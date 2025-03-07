@extends('backend.layouts.app')

@push('plugin-styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}">
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
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">All Pages</h4>
                    <a href="{{ route('pages.create') }}" class="btn btn-outline-primary ms-auto">Create</a>
                </div>

                <div class="card-body pt-2">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Pages</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>{{ $page->type }}</td>
                                @if ($page->is_active == 1)
                                <td><span class="badge bg-success">Active</span></td>
                                @endif
                                @if ($page->is_active == 0)
                                <td><span class="badge bg-danger">Inactive</span></td>
                                @endif
                                {{-- <td>
                                    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('pages.destroy', $page->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td> --}}
                                <td class="action-buttons">
                                    <a href="{{ route('pages.edit', ['slug' => rawurlencode($page->slug)]) }}" class="btn badge bg-primary">Edit</a>
                                    <form method="post" action="{{ route('pages.destroy',$page->id) }}" style="display:inline-block;">
                                        @csrf
                                       @method('DELETE')
                                        <button type="submit" class="btn badge bg-danger show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end row -->
    <!-- end-content-main -->
</div>
<!-- container -->

@endsection

@push('plugin-scripts')
<script src="{{ asset('backend/assets/libs/datatables.net/js/dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>

<script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>

<script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>

<script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>

<script src="{{ asset('backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

@endpush

@push('custom-scripts')
<script src="{{ asset('backend/assets/js/pages/table-datatable.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
@endpush