@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Update Book</h1>

        @if ($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row my-5">
            <div class="col-12">
                <form action="{{ route('books.edit', $book) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn"
                            value="{{ old('isbn', $book->isbn) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Title</label>
                        <input type="text" class="form-control" id="judul" name="judul"
                            value="{{ old('judul', $book->judul) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="halaman" class="form-label">Pages</label>
                        <input type="number" class="form-control" id="halaman" name="halaman"
                            value="{{ old('halaman', $book->halaman) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Category</label>
                        <input type="text" class="form-control" id="kategori" name="kategori"
                            value="{{ old('kategori', $books->kategori) }}">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Publisher</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit"
                            value="{{ old('penerbit', $book->penerbit) }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
