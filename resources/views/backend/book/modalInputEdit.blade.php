<!-- Modal -->
<div class="modal fade" id="editBookModal" tabindex="-1" aria-labelledby="editBookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="editBookForm" action="{{ route('books.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="edit-id">
                <div class="modal-header p-3 border-bottom-0">
                    <h5 class="modal-title" id="editBookModalLabel">Edit Books</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-3 pb-3 pt-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="control-label form-label">Book Name</label>
                                <input class="form-control  @error('title') is-invalid @enderror"
                                    placeholder="Insert Book Name" type="text" name="title" id="edit-title"
                                    required value="{{ old('title') }}" />
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="control-label form-label">Book Cover</label>
                                <input class="form-control  @error('cover') is-invalid @enderror" type="file"
                                    name="cover" id="cover" value="{{ old('cover') }}" />
                                @error('cover')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="control-label form-label">Book PDF</label>
                                <input class="form-control  @error('file_pdf') is-invalid @enderror" type="file"
                                    name="file_pdf" id="file_pdf" value="{{ old('file_pdf') }}" />
                                @error('file_pdf')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="control-label form-label">Have ISBN</label>
                                <input class="form-control  @error('isbn') is-invalid @enderror"
                                    placeholder="Insert Number ISBN" type="text" name="isbn" id="edit-isbn"
                                    value="{{ old('isbn') }}" />
                                @error('isbn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="control-label form-label">Have Google Books</label>
                                <input class="form-control  @error('google') is-invalid @enderror"
                                    placeholder="Insert Link Google Books" type="text" name="google"
                                    id="edit-google" value="{{ old('google') }}" />
                                @error('google')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="control-label form-label">Book Pages</label>
                                <input class="form-control  @error('halaman') is-invalid @enderror"
                                    placeholder="Insert Book Pages" type="text" name="halaman" id="edit-halaman"
                                    required value="{{ old('halaman') }}" />
                                @error('halaman')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="control-label form-label">Book Publish Date</label>
                                <input class="form-control  @error('publish_date') is-invalid @enderror" type="date"
                                    name="publish_date" id="edit-publish_date" required
                                    value="{{ old('publish_date') }}" />
                                @error('publish_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="control-label form-label">Autor</label>
                                <input class="form-control  @error('author') is-invalid @enderror"
                                    placeholder="Insert Autor Name (,)" type="text" name="author" id="edit-author"
                                    required value="{{ old('author') }}" />
                                @error('author')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="control-label form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="edit-description"
                                    rows="5" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-2">
                        {{-- <button type="button" class="btn btn-danger" id="btn-delete-event">
                            Delete
                        </button> --}}

                        <button type="button" class="btn btn-light ms-auto" data-bs-dismiss="modal">
                            Close
                        </button>

                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
