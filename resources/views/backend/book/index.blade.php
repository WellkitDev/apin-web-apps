@extends('backend.layouts.app')

@push('plugin-styles')
    <link rel="stylesheet"
        href="{{ asset('backend/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}">
@endpush

@section('content')
    <div class="page-container">
        <!-- top-header -->
        <div class="page-title-box">
            <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                <div class="flex-grow-1">
                    <h4 class="font-18 mb-0">List Book</h4>
                </div>
                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Book</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end-top-header -->

        <!-- content-main -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">All Books</h4>
                        <button class="btn btn-outline-primary ms-auto" data-bs-toggle="modal"
                            data-bs-target="#btn-new-book" type="button">
                            Create</button>
                        {{-- <a href="" class="btn btn-outline-primary ms-auto">Create</a> --}}
                    </div>

                    <div class="card-body pt-2">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Tille</th>
                                    <th>ISBN</th>
                                    <th>Publish Date</th>
                                    <th>Last Update</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($books as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->isbn }}</td>
                                    <td>{{ $item->publish_date }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        {{-- <a href="{{ route('books.edit', ['book' => $item->slug]) }}"
                                            class="btn btn-primary">Edit</a> --}}
                                        <button type="button" class="btn btn-primary edit-book-btn" data-bs-toggle="modal"
                                            data-bs-target="#editBookModal" data-id="{{ $item->id }}"
                                            data-title="{{ $item->title }}" data-isbn="{{ $item->isbn }}"
                                            data-publish_date="{{ $item->publish_date }}" data-slug="{{ $item->slug }}"
                                            data-google="{{ $item->link_google_books }}"
                                            data-halaman="{{ $item->halaman }}" data-author="{{ $item->author }}"
                                            data-description="{{ $item->description }}">Edit
                                        </button>
                                        <form action="{{ route('books.destroy', ['book' => $item->slug]) }}" method="POST"
                                            style="display:inline-block;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip"
                                                title='Delete'>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
        <!-- end-content-main -->
    </div>
    @include('backend.book.modalInput')
    @include('backend.book.modalInputEdit')
@endsection

@push('plugin-scripts')
    <script src="{{ asset('backend/assets/libs/datatables.net/js/dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>

    <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
    </script>

    <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>

    <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>

    <script src="{{ asset('backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('backend/assets/js/pages/table-datatable.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {


            // Populate modal with book data
            $('.edit-book-btn').on('click', function() {
                var button = $(this);
                var id = button.data('id');
                var title = button.data('title');
                var isbn = button.data('isbn');
                var publish_date = button.data('publish_date');
                var slug = button.data('slug');
                var google = button.data('google');
                var halaman = button.data('halaman');
                var author = button.data('author');
                var description = button.data('description');


                var modal = $('#editBookModal');
                modal.find('#edit-id').val(id);
                modal.find('#edit-title').val(title);
                modal.find('#edit-isbn').val(isbn);
                modal.find('#edit-publish_date').val(publish_date);
                modal.find('#editBookForm').attr('action', '/books/' + slug);
                modal.find('#edit-google').val(google);
                modal.find('#edit-halaman').val(halaman);
                modal.find('#edit-author').val(author);
                modal.find('#edit-description').val(description);
            });
        });
    </script>
@endpush
