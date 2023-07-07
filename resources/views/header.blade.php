<!DOCTYPE html>
<html lang = "en">
    <head>
        {{-- Title --}}
        <title>Title</title>

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        {{-- jQuery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        {{-- Bootstrap v5--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        {{-- Bootstrap Icons v1.10.5 --}}
        <link href="{{asset('icons/font/bootstrap-icons.css')}}" rel="stylesheet">

        {{-- Custom CSS --}}
        <style>

        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src = "{{asset('images/logo.png')}}" style = "width: 20vh; height: auto;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex" id="navbarNav">
                    <ul class="navbar-nav d-flex" style = "width: 100%;">
                        <li class="nav-item" style = "padding-left: 1.5%; padding-right: 1.5%">
                            <a class="nav-link" aria-current="page" href="#">
                                <i class = "bi-house text-light" style = "font-size: 3vh;"></i>
                            </a>
                        </li>
                        <li class="nav-item" style = "padding-left: 1.5%; padding-right: 1.5%">
                            <a class="nav-link" href="#" style = "font-size: 3vh;">Home</a>
                        </li>
                        <li class="nav-item" style = "padding-left: 1.5%; padding-right: 1.5%">
                            <a class="nav-link" href="#" style = "font-size: 3vh;">K-World</a>
                        </li>
                        <li class="nav-item" style = "padding-left: 1.5%; padding-right: 1.5%">
                            <a class="nav-link" style = "font-size: 3vh;">Movies</a>
                        </li>
                        <li class="nav-item" style = "padding-left: 1.5%; padding-right: 1.5%">
                            <a class="nav-link" style = "font-size: 3vh;">Kids</a>
                        </li>
                        <li class="nav-item" style = "padding-left: 1.5%; padding-right: 1.5%">
                            <a class="nav-link" style = "font-size: 3vh;">Cooking</a>
                        </li>
                    </ul>
                    <div class = "d-flex justify-content-end" style = "width: 100%;">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style = "font-size: 3vh;">
                            <button class="btn" type="submit" style = "font-size: 3vh;">
                                <i class = "bi-search text-light"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </body>
</html>