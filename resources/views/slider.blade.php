<!DOCTYPE html>
<html lang = "en">
    <head>
        {{-- Title --}}
        <title>Title</title>

        {{-- Bootstrap v5--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        {{-- Bootstrap Icons v1.10.5 --}}
        <link href="{{asset('icons/font/bootstrap-icons.css')}}" rel="stylesheet">

        {{-- jQuery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        {{-- Custom CSS --}}
        <style>
            .slider-v--container {
                height: 40vh;
                margin: 5% 0%;
            }

            .slider-v--controls {
                font-size: 5vh; 
                z-index: 1; 
                color: violet; 
                cursor: pointer;
            }

            .slider-v--img {
                height: inherit; 
                overflow:hidden; 
                white-space: nowrap;
            }

            .slider-v--img>img {
                height: inherit;
                cursor: pointer;
            }

            #vSliderImg>img:nth-child(odd) {
                background-color: yellow;
            }

            #vSliderImg>img:nth-child(even) {
                background-color: blue;
            }

            #vSliderImg>div:nth-child(odd) {
                background-color: yellow;
            }

            #vSliderImg>div:nth-child(even) {
                background-color: blue;
            }

            .slider-h--container {
                height: 25vh;
                margin: 5% 0%;
            }

            .slider-h--controls {
                font-size: 5vh; 
                z-index: 1; 
                color: violet; 
                cursor: pointer;
            }

            .slider-h--img {
                height: inherit; 
                overflow:hidden; 
                white-space: nowrap;
            }

            .slider-h--img>img {
                height: inherit;
            }

            #hSliderImg>img:nth-child(odd) {
                background-color: yellow;
            }

            #hSliderImg>img:nth-child(even) {
                background-color: blue;
            }
        </style>
    </head>
    <body>
        <div class = "container-fluid">
            {{-- Vertical Slider --}}
            <div class = "row slider-v--container">
                <div class = "col-1 bg-success text-light d-flex align-items-center justify-content-center">
                    <i class="bi-arrow-left-square-fill slider-v--controls" id = "prev_v"></i>
                </div>
                <div class = "col-10 bg-dark slider-v--img" id = "vSliderImg">
                    @for($j = 0; $j < 8; $j ++)
                    <img src = "{{asset('images/noimagevetical.png')}}" title = "Image">
                    @endfor
                </div>
                <div class = "col-1 bg-success text-light d-flex align-items-center justify-content-center">
                    <i class = "bi-arrow-right-square-fill slider-v--controls" id = "next_v"></i>
                </div>
            </div>
            {{-- /Vertical Slider --}}

            {{-- Horizontal Slider --}}
            <div class = "row slider-h--container">
                <div class = "col-1 bg-success text-light d-flex align-items-center justify-content-center">
                    <i class="bi-arrow-left-square-fill slider-h--controls" id = "prev_h"></i>
                </div>
                <div class = "col-10 bg-dark slider-h--img" id = "hSliderImg">
                    @for($j = 0; $j < 8; $j ++)
                    <img src = "{{asset('images/noimagehorizonatal.png')}}" title = "Image">
                    @endfor
                </div>
                <div class = "col-1 bg-success text-light d-flex align-items-center justify-content-center">
                    <i class = "bi-arrow-right-square-fill slider-h--controls" id = "next_h"></i>
                </div>
            </div>
            {{-- /Horizontal Slider --}}
        </div>

        <script>
            $('#prev_v').on('click', function() {
                $('#vSliderImg').animate({
                    scrollLeft: '-=500'
                }, 300, 'swing');
            });
            
            $('#next_v').on('click', function() {
                $('#vSliderImg').animate({
                    scrollLeft: '+=500'
                }, 300, 'swing');
            });

            $('#prev_h').on('click', function() {
                $('#hSliderImg').animate({
                    scrollLeft: '-=500'
                }, 300, 'swing');
            });
            
            $('#next_h').on('click', function() {
                $('#hSliderImg').animate({
                    scrollLeft: '+=500'
                }, 300, 'swing');
            });
        </script>
    </body>
</html>