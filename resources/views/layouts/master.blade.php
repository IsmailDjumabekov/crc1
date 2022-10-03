<!DOCTYPE html>
<html>
    <head>
        <title>CRC-1</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">CRC-1</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Product <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/category') }}">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/add-category') }}">Add Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/add-product') }}">Add Product</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
                        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search Product" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="container mt-2">
            @if($errors->any())
                @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
                @endforeach
            @endif
        </div>
    <div class="container">
        @yield('content')
    </div>
    </body>
</html>
