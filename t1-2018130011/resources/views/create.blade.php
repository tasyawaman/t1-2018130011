@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a New Book</h1>
        <form method="POST" action="{{ route('books.store') }}">
            @csrf
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn" id="isbn" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="judul">Title:</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="halaman">Pages:</label>
                <input type="number" name="halaman" id="halaman" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kategori">Category:</label>
                <input type="text" name="kategori" id="kategori" class="form-control">
            </div>
            <div class="form-group">
                <label for="penerbit">Publisher:</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add Book</button>
        </form>
    </div>
@endsection
