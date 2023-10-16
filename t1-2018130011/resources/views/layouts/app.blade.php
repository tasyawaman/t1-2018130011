<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Book Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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
                <a class="p-2 link-secondary" href={{ route('booklist') }}>Book List</a>
                <a class="p-2 link-secondary" href={{ route('create') }}>Add a book</a>
                <a class="p-2 link-secondary" href={{ route('delete') }}>Delete a book</a>
                <a class="p-2 link-secondary" href={{ route('edit') }}>Update a book</a>

            </nav>
        </div>
    </div>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
