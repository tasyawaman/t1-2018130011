@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <h1>Welcome to the Book Management System</h1>

        <p>This is a simple book management application where you can:</p>

        <ul>
            <li>View a list of books in the </li>
            <li>Add a new book to the database in the section.</li>
            <li>View, edit, or delete individual books in the .</li>
        </ul>

        <p>Feel free to get started and manage your book collection!</p>
    </div> --}}
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container d-flex align-items-center">
                        <a class="blog-header-logo text-dark" href="#" style="font-size: 2rem;">Book Management
                            System</a>
                    </div>
                </nav>

            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#">Book List</a>
                <a class="p-2 link-secondary" href="#">Add a book</a>
                <a class="p-2 link-secondary" href="#">Delete a book</a>
                <a class="p-2 link-secondary" href="#">Update a book</a>

            </nav>
        </div>
    </div>

    <main class="container">
        <div class="row">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Welcome to the Book Management System</h1>
                <p class="lead my-3">Efficiently manage your book collection with our intuitive system. Quickly organize,
                    track, and explore your books, making it easier than ever to discover your favorite reads.</p>
            </div>
            <div class="col-md-6 px-0">
                <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Ym9vayUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D&w=1000&q=80"
                    alt="Book Image" class="img-fluid rounded ml-10" style="max-width: 80%; margin-left: 100px;">
            </div>
        </div>


        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mt-3">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Quotes</strong>
                        <h3 class="mb-0">Quotes of the Day</h3>
                        <div class="mb-1 text-muted">Oct 16</div>
                        <p class="card-text mb-auto">"A reader lives a thousand lives before he dies."</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="https://images.ctfassets.net/9i3f0j4g4w7c/7bsPTtX0rMiz3Z4T7E4syT/712d1737fb3668edd5bf2d903fffa375/quote-1-2.png"
                            width="200" height="250" alt="Thumbnail" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mt-3">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Featured Books</strong>
                        <h3 class="mb-0">Favorite Book of the Day</h3>
                        <div class="mb-1 text-muted">Oct 16</div>
                        <p class="mb-auto">A room of one's own by Virginia Wolf.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="https://upload.wikimedia.org/wikipedia/en/3/31/ARoomOfOnesOwn.jpg" width="200"
                            height="250" alt="Thumbnail" />
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="blog-footer text-center mt-auto">
        <p>Website built for PBWL task by Tasya Wamantassa - 2018130011</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
@endsection
