@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Book List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Pages</th>
                    <th>Category</th>
                    <th>Publisher</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->judul }}</td>
                        <td>{{ $book->halaman }}</td>
                        <td>{{ $book->kategori }}</td>
                        <td>{{ $book->penerbit }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
