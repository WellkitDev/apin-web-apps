@extends('backend.layouts.app')

@push('plugin-styles')
  <!-- summmernote-lite -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
  crossorigin="anonymous"></script>
  <link href="{{ asset ('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
  <!-- summmernote-lite -->
@endpush

@section('content')
<div class="page-container">
    <!-- top-header -->
    <div class="page-title-box">
        <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
            <div class="flex-grow-1">
                <h4 class="font-18 mb-0">Pages Controll</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Pages Create</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end-top-header -->

    <!-- content-main -->
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Pages Create</h4>
                    <a href="{{ route('pages.index') }}" class="ms-auto"><h5><span class="mdi mdi-close"></span></h5></a>
                </div>

                <div class="card-body">
                    <p class="text-muted">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</p>

                    <form action="{{ route('pages.update', ['id' => rawurlencode($page->slug)]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 sm-12 mb-3">
                                <label for="type" class="form-label">Pages</label>
                                <select class="form-select" data-toggle="select2" name="type" id="type">
                                    <option disabled>--Select Pages--</option>
                                    <option value="About" @if($page->type == 'About') selected @endif>About</option>
                                    <option value="Program" @if($page->type == 'Program') selected @endif>Program</option>
                                    <option value="Services" @if($page->type == 'Services') selected @endif>Services</option>
                                </select>
                                {{-- error --}}
                                @if ($errors->has('type'))
                                <p style="color: red;">{{ $errors->first('type') }}</p>
                                @endif
                            </div>
                            <div class="col-lg-6 sm-12 mb-3">
                                <label for="title" class="form-label">Page Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $page->title }}">
                                {{-- error --}}
                                @if ($errors->has('title'))
                                <p style="color: red;">{{ $errors->first('title') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 sm-12 mb-3">
                                <label for="image" class="form-label">Images</label>
                                <input type="file" class="form-control" id="image" name="image">
                                {{-- error --}}
                                @if ($errors->has('image'))
                                <p style="color: red;">{{ $errors->first('image') }}</p>
                                @endif
                            </div>
                            <div class="col-lg-6 sm-12 mb-3">
                                <label for="is_active" class="form-label">Status Page</label>
                                <select class="form-select" name="is_active" id="is_active">
                                    <option value="1" @if($page->is_active == '1') selected @endif>On</option>
                                    <option value="0" @if($page->is_active == '0') selected @endif>Off</option>
                                </select>
                                {{-- error --}}
                                @if ($errors->has('is_active'))
                                <p style="color: red;">{{ $errors->first('is_active') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12 sm-12">
                                <label for="description" class="form-label">Description Content</label>
                                <textarea name="description" id="description" name="description">{{ $page->description }}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col -->
    </div>
    <!-- end-content-main -->
</div>
<!-- container -->
<!-- custom js -->
<script>
    $('#description').summernote({
        placeholder: 'Description Pages..',
        tabsize: 2,
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
  </script>

@endsection

@push('plugin-scripts')
    <script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}"></script>
@endpush

@push('custom-scripts')
@endpush