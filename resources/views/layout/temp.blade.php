<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link rel="icon" href="{{asset('mosque2.png')}}"> --}}
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            height: 100vh;
            background-image: linear-gradient(#550707, #D21919);
            
        }
    </style>

<body>
    <nav class="navbar navbar-expand-lg mx-auto mt-2" style="font-family: Righteous;background-color: #ff9900; width: 95vw; border-radius: 20px;">
        <div class="container-fluid">
            <img src="pp.jpg" alt="ppsekolah" class="ms-3 me-3" width="40vw">
            <a class="navbar-brand" href="#">SMKN 1 KOTA BEKASI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">LOREM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">LOREM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">LOREM</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            LOREM
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main">
             @yield('content')
    \</main>
</body>

</html>
