@extends('backend.layouts.app')

@push('plugin-styles')
    <!-- summmernote-lite -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" />
    <!-- summmernote-lite -->
@endpush

@section('content')
    <!-- container -->
    <div class="page-container">
        <!-- top-header -->
        <div class="page-title-box">
            <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                <div class="flex-grow-1">
                    <h4 class="font-18 mb-0">Categories Blog</h4>
                </div>
                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end-top-header -->

        <!-- content-main -->
        <div class="row">
            <div class="col-lg-6 col-xl-6 col-sm-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Category Create</h4>
                        <a href="{{ route('category.index') }}" class="ms-auto">
                            <h5><span class="mdi mdi-close"></span></h5>
                        </a>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading
                            for documentation on required classes, form layout, and more.</p>
                        <div class="row">
                            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="col-lg-6 sm-12 mb-2">
                                    <div class="col-lg-12">
                                        <label for="title" class="form-label">Category Name: </label>
                                    </div>
                                    <div class="col-lg-12 sm-12">
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Education">
                                    </div>
                                    @if ($errors->has('title'))
                                        <p style="color: red;">{{ $errors->first('title') }}</p>
                                    @endif
                                </div>

                                <div class="col-lg-6 sm-12 mb-2">
                                    <div class="col-lg-12">
                                        <label for="is_active" class="form-label">Show Menu:</label>
                                    </div>
                                    <div class="col-lg-12 sm-12">
                                        <select class="form-select" name="is_active" id="is_active">
                                            <option value="0">On</option>
                                            <option value="1">Off</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('is_active'))
                                        <p style="color: red;">{{ $errors->first('is_active') }}</p>
                                    @endif
                                </div>

                                <div class="col-lg-6 sm-12 mb-2">
                                    <div class="col-lg-12">
                                        <label for="order" class="form-label">Order: </label>
                                    </div>
                                    <div class="col-lg-12 sm-12">
                                        <input type="text" class="form-control" id="order" name="order">
                                    </div>
                                    @if ($errors->has('order'))
                                        <p style="color: red;">{{ $errors->first('order') }}</p>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->
        </div>
        <!-- end-content-main -->
    </div>
    <!-- custom js -->
@endsection

@push('plugin-scripts')
    <script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}"></script>
@endpush

@push('custom-scripts')
@endpush
