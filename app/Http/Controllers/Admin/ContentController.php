<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GeneratedContent;
use OpenAI\Laravel\Facades\OpenAI;

class ContentController extends Controller
{
    public function GenerateContentMain(){
        $contents = GeneratedContent::latest()->get();
        return view('admin.backend.contents.all_contents', compact('contents'));
    }
    // End Method

    public function AddContent(){
        return view('admin.backend.contents.add_contents');
    }
    // End Method

    public function generateContentNew(Request $request){

        $request->validate([
            'title' => 'required|string',
            'word_count' => 'required|integer'
        ]);

        $title = $request->input('title');
        $wordCountLimit = $$request->input('word_count');

        // Enhanced prompt for better structured content
        $prompt = "Wrote a well-structured blog post about '{$title}'. 
        Requirements:
        - Approximately {$wordCountLimit} words
        - Use clear headings and subheadings
        - Include engaging introduction and coclusion
        - Use proper paragraphs
        - Make it informative and well-organized
        - Format with HTML tags like <h2>, <h3>, <p>, <strong>, <em> for better presentation;
        ";
        
        try{
            $response = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $prompt]
                ],
                'max_tokens' => $wordCountLimit * 3,
                'temperature' => 0.7,
            ]);

            $generatedContent = $response->choices[0]->message->content;
            
            $formattedContent = $this->formatContentForQuill($generatedContent);
            $actualWordCount = str_word_count(strip_tags($formattedContent));

            $generated = new GeneratedContent();
            $generated->input = json_encode([
                'title' => $title,
                'word_count_limit' => $wordCountLimit
            ]);
            $generated->output = $formattedContent;
            $generated->word_count = $actualWordCount;
            $generated->save();

            return response()->json([
                'success' => true,
                'content' => $formattedContent,
                'word_count' => $actualWordCount
            ]);

        } catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Failed to generate the content' . $e->getMessage(),
            ], 500);
        }
    }
    // End Method

    private function formatContentForQuill($content){
        // if content already has HTML tags, return as is
        if(strip_tags($content) !== $content) {
            return $content;
        }

        // Convert plain text to HTML format
        $lines = explode("\n", $content);
        $formattedLines = [];

        foreach($lines as $line) {
            $line = trim($line);
            if(empty($line)){
                continue;
            }

            // Check if line looks like a heading
            if(preg_match('/^#+\s/', $line)){
                // Markdown heading
                $level = substr_count($line, '#');
                $text = trim(str_replace('#', '', $line));
                $formattedLines[] = "<h{$level}>{$text}</h{$level}>";
            } elseif(preg_match('/^[A-Z][^.!?]*[:.]\s*$/', $line) && strlen($line) < 100){
                // Looks like a heading (short line ending with colon)
                $formattedLines[] = "<h3>{$line}</h3>";
            } else {
                // Regular paragraph
                $formattedLines[] = "<p>{$line}</p>";
            }
        }

        return implode("\n", $formattedLines);
    }
}
