<!DOCTYPE html>
<html lang = "en">
    <head>
        {{-- Title --}}
        <title>Title</title>
        {{-- Viewport --}}
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        {{-- Boostrap CSS --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        {{-- Boostrap Icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        {{-- Custom CSS --}}
        <style>
            
        </style>
    </head>
    <body class = "container">
        <div id = "carousel_1" class = "carousel slider" data-ride = "carousel">
            <div class = "carousel-inner">
                @for($i = 0; $i <= 3; $i ++)
                @if($i == 0)
                <div class = "carousel-item active w-100 bg-dark">
                @else
                <div class = "carousel-item w-100 bg-dark">
                @endif
                    <img src = "https://playflix.app/images/noimagehorizonatal.png" class = "" style = "width: inherit; height: auto;" alt = "First Slide">
                </div>
                @endfor
            </div>
            <a class = "carousel-control-prev" href = "#carousel_1" role = "button" data-slide = "prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class = "carousel-control-next" href = "#carousel_1" role = "button" data-slide = "next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{-- Boostrap JS --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    </body>
</html>