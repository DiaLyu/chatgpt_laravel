@extends('admin.admin_master')
@section('admin')

<style>
    .loading-overlay{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }
</style>

<div class="page-container">

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header border-bottom justify-content-between d-flex flex-wrap align-items-center gap-2">
                    <h4 class="header-title">Generated Blog</h4>
                </div>

                <div class="card-body" id="contentGeneratorForm">
                    <form action="">
                        @csrf

                        <div class="mb-3">
                            <label for="blog_title" class="form-label">Blog Title</label>
                            <input type="text" name="title" id="blog_title" class="form-control" 
                                placeholder="Enter your blog topic or title" required>
                        </div>

                        <div class="mb-3">
                            <label for="word_count" class="form-label">Word Limit</label>
                            <input type="text" name="title" id="word_count" class="form-control" min="50" max="2000"
                                value="200" required>
                        </div>

                        <button type="submit" class="btn btn-primary" id="generateBtn">
                            <span class="btn-text">Generate Content</span>
                            <span class="spinner-border spinner-border-sm d-none" role="status"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Generated Blog</h4>
                    <div class="ms-auto">
                        <small class="text-muted" id="wordCountDisplay"></small>
                    </div>
                </div>

                <div class="card-body">
                    <div id="snow-editor" style="height: 300px;">
                        <i class="fas fa-pencil-alt fa-3x mb-3"></i>
                        <p>Generated content will be appear here...</p>
                    </div>

                    <div class="mt-3 d-none" id="saveSection">
                        <button class="btn btn-success" id="saveContentBtn">
                            <i class="fas fa-save"></i>
                            Save Content
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->

<script>
    document.addEventListener("DOMContentLoaded", function(){
        const quill = new Quill("#snow-editor", {
            theme: 'snow',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote', 'code-block'],
                    [{'header': 1}, {'header': 2}],
                    [{'list': 'ordered'}, {'list': 'bullet'}],
                    [{'script': 'sub'}, {'script': 'super'}],
                    [{'indent': '-1'}, {'indent': '+1'}],
                    [{'size': ['small', false, 'large', 'huge']}],
                    [{'header': [1,2,3,4,5,6,false]}],
                    [{'color': []}, {'background': []}],
                    [{'align': []}],
                    ['clean'],
                    ['link', 'image']
                ]
            }
        })
    });

    const form = document.getElementById('contentGeneratorForm');
    const generateBtn = document.getElementById("generateBtn");
    const btnText = generateBtn.querySelector(".btn-text");
    const spinner = generateBtn.querySelector(".spinner-border");

    form.addEventListener("submit", async function(e){
        e.preventDefault();

        // Collect form data
        const title = document.getElementById("blog_title").value;
        const wordCount = document.getElementById('word_count').value;

        // Loading state
        btnText.textContent = "Generating...";
        spinner.classList.remove("d-none");
        generateBtn.disabled = true;

        quill.setContents([]);
        document.getElementById("wordCountDisplay").textContent = "";
        document.getElementById("saveSection").classList.add("d-none");

        try{
            const res = await fetch("/content/generate", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({title, word_count: wordCount})
            });

            console.log('Response status: ', res.status);   // Debug Log

            const response = await res.json();

            if(response.success) {
                quill.root.innerHTML = response.content;
                document.getElementById("wordCountDisplay").textContent = `Words: ${response.word_count}`;
                document.getElementById("saveSection").classList.remove('d-none');
                toastr.success("Content generate successfully!");
            } else {
                toastr.error(response.message || "Failed to generate content");
            }
        } catch (error){
            toastr.error("Failed to generate content");
        } finally {
            btnText.textContent = "Generate Content";
            spinner.classList.add("d-none");
            generateBtn.disabled = false;
        }
    });

    document.getElementById("saveContentBtn").addEventListener("click", function(){
        const content = quill.root.innerHTML;
        const wordCount = quill.getText().split(/\s+/).length;
        toastr.info("Content is automatically saved when generated");
    });

</script>

@endsection