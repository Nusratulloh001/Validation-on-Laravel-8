<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>@yield('head_title')</title>
</head>
<body class="bg-light text-black h-100">

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3">
        <div class="container">
            <a href="/" class="navbar-brand fs-4">BookShop</a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Books</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <main class="flex-sm-fill">
    @yield('content')
    </main>

    {{-- <footer class="bg-dark p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="m-0 fs-small text-primary text-center">
                        &copy;<span class="text-danger">BookShop</span>
                        @php
                            echo date('Y')
                        @endphp. 
                        All right reserved
                    </p>
                </div>
            </div>
        </div>
    </footer> --}}
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>