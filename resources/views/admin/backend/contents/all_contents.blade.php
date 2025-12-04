@extends('admin.admin_master')
@section('admin')

<div class="page-container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div
                    class="card-header border-bottom justify-content-between d-flex flex-wrap align-items-center gap-2">
                    <div class="flex-shrink-0 d-flex align-items-center gap-2">
                        <div class="position-relative">
                            <h2>Generated Content</h2>
                        </div>
                    </div>

                    <a href="{{ route('add.content') }}" class="btn btn-primary">
                        <i class="ti ti-plus me-1"></i>Add Content</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover text-nowrap mb-0">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th class="fs-12 text-uppercase text-muted py-1">Sl</th>
                                <th class="fs-12 text-uppercase text-muted py-1">Title </th>
                                <th class="fs-12 text-uppercase text-muted py-1">Content Preview</th>
                                <th class="fs-12 text-uppercase text-muted py-1">Word Count</th>
                                <th class="fs-12 text-uppercase text-muted py-1">Created</th>
                                <th class="text-center  py-1 fs-12 text-uppercase text-muted"
                                    style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <!-- end table-head -->

                        <tbody>
                            @foreach ($contents as $key => $item)
                            @php
                                // Ddecode JSON input to get title
                                $inputData = json_decode($item->input, true);
                                $title = $inputData['title'] ?? 'Untitled';
                                $wordLimit = $inputData['word_count_limit'] ?? 0;

                                // Clean content for preview
                                $cleanContent = strip_tags($item->output);
                                $preview = Str::limit($cleanContent, 80, '...');

                            @endphp
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ Str::limit($title, 30, '...') }}</td>
                                    <td>{{ $preview }}</td>
                                    <td><span class="text-muted">{{ $item->word_count }} Words</span></td>
                                    <td><span class="text-muted">{{ $item->created_at->format('M d Y') }}</span></td>
                                    <td class="pe-3">
                                        <div class="hstack gap-1 justify-content-end">
                                            <a href="javascript:void(0);" class="btn btn-soft-primary btn-icon btn-sm rounded-circle"> 
                                                <i class="ti ti-eye"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-soft-success btn-icon btn-sm rounded-circle"> 
                                                <i class="ti ti-edit fs-16"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-sm rounded-circle"> 
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr><!-- end table-row -->
                            @endforeach
                        </tbody><!-- end table-body -->
                    </table><!-- end table -->
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <ul class="pagination mb-0 justify-content-center">
                            <li class="page-item disabled">
                                <a href="#" class="page-link"><i class="ti ti-chevrons-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link"><i class="ti ti-chevrons-right"></i></a>
                            </li>
                        </ul><!-- end pagination -->
                    </div><!-- end flex -->
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

</div> <!-- container -->

@endsection