@extends('backend.layouts.app')

@push('plugin-styles')
    <!-- summmernote-lite -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <!-- summmernote-lite -->
@endpush

@section('content')
    <!-- container -->
    <div class="page-container">
        <!-- top-header -->
        <div class="page-title-box">
            <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                <div class="flex-grow-1">
                    <h4 class="font-18 mb-0">Article Post</h4>
                </div>
                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                        <h4 class="header-title">Article Edit</h4>
                        <a href="{{ route('article.index') }}" class="ms-auto">
                            <h5><span class="mdi mdi-close"></span></h5>
                        </a>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading
                            for documentation on required classes, form layout, and more.</p>
                        <div class="row">
                            <form action="{{ route('article.update', ['slug' => $articles->slug]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-2">
                                    <div class="col-lg-6 sm-12 mb-2">
                                        <div class="col-lg-12">
                                            <label for="title" class="form-label">Article Title: </label>
                                        </div>
                                        <div class="col-lg-12 sm-12">
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="{{ $articles->article_title }}">
                                        </div>
                                        @if ($errors->has('title'))
                                            <p style="color: red;">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 sm-12 mb-2">
                                        <div class="col-lg-12">
                                            <label for="data_images" class="form-label">Image Thumbnail: </label>
                                        </div>
                                        <div class="col-lg-12 sm-12">
                                            <input type="file" class="form-control" id="data_images" name="data_images">
                                        </div>
                                        @if ($errors->has('data_images'))
                                            <p style="color: red;">{{ $errors->first('data_images') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-6 sm-12 mb-2">
                                        <div class="col-lg-12">
                                            <label for="article_category" class="form-label">Category Article: </label>
                                        </div>
                                        <div class="col-lg-12 sm-12">
                                            <select class="js-example-basic-single form-select" data-toggle="select2"
                                                name="article_category" id="article_category" required>
                                                <option selected disabled>--Select Category--</option>
                                                @foreach ($subCategories as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if ($articles->subcategory_id == $item->id) selected @endif>
                                                        {{ $item->subcategory_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if ($errors->has('article_category'))
                                            <p style="color: red;">{{ $errors->first('article_category') }}</p>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 sm-12 mb-2">
                                        <div class="col-lg-12">
                                            <label for="is_share" class="form-label">Is Shareble ?</label>
                                        </div>
                                        <div class="col-lg-12 sm-12">
                                            <select class="form-select" name="is_share" id="is_share">
                                                <option value="0" @if ($articles->is_share == '0') selected @endif>Yes
                                                </option>
                                                <option value="1" @if ($articles->is_share == '1') selected @endif>No
                                                </option>
                                            </select>
                                        </div>
                                        @if ($errors->has('is_share'))
                                            <p style="color: red;">{{ $errors->first('is_share') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-6 sm-12 mb-2">
                                        <div class="col-lg-12">
                                            <label for="article_tags" class="form-label">Keyword : </label>
                                        </div>
                                        <div class="col-lg-12 sm-12">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="article_tags"
                                                    name="article_tags" value="{{ $tags->implode('tag_name', ', ') }}">
                                            </div>
                                        </div>
                                        @if ($errors->has('article_tags'))
                                            <p style="color: red;">{{ $errors->first('article_tags') }}</p>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 sm-12 mb-2">
                                        <div class="col-lg-12">
                                            <label for="is_comment" class="form-label">Is Comment ?</label>
                                        </div>
                                        <div class="col-lg-12 sm-12">
                                            <select class="form-select" name="is_comment" id="is_comment">
                                                <option value="0" @if ($articles->is_comment == '0') selected @endif>Yes
                                                </option>
                                                <option value="1" @if ($articles->is_comment == '1') selected @endif>No
                                                </option>
                                            </select>
                                        </div>
                                        @if ($errors->has('is_comment'))
                                            <p style="color: red;">{{ $errors->first('is_comment') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <div class="col-lg-12 sm-12 mb-2">
                                        <div class="col-lg-6">
                                            <label for="description" class="form-label">Description : </label>
                                        </div>
                                        <div class="col-lg-12 sm-12">
                                            <textarea name="description" id="description"> {{ $articles->article_detail }}</textarea>
                                        </div>
                                        @if ($errors->has('description'))
                                            <p style="color: red;">{{ $errors->first('description') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
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
    <script>
        $('#description').summernote({
            placeholder: 'Content is here..',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
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
