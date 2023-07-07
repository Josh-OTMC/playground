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
            .slider--vertical {
                height: 50vh;
                margin: 5% 0%;
            }

            .slider__controls--vertical {
                font-size: 5vh; 
                z-index: 1; 
                color: violet; 
                cursor: pointer;
            }

            .slider__container--vertical {
                height: inherit;
                overflow:hidden;
                white-space: nowrap;
            }

            .img__container--vertical {
                height: 40vh;
                display: inline-block;
                margin: 2%;
                border-radius: 1vh;
            }

            .img__container--vertical:hover {
                transform: scale(1.4, 1.2);
                border-radius: 1vh;
            }

            .img__container--vertical:hover .slider__container--vertical {
                overflow: visible !important;
            }

            .img__container--vertical:hover .slider__img--vertical {
                opacity: 0;
            }

            .slider__img--vertical {
                height: inherit;
                cursor: pointer;
            }

            .slider__poster--vertical {
                background-color: red;
                width: 100%;
                height: auto;
                opacity: 0;
                margin-top: -25vh;
                margin-left: -100%;
                border-radius: 1vh;
            }

            .img__container--vertical:hover .slider__poster--vertical , 
            .img__container--vertical:hover .slider__meta--vertical {
                opacity: 1;
            }

            .img__container--vertical {
                background-color: blue;
            }

            .slider__meta--vertical {
                opacity: 0;
                color: #fff;
                margin-top: -25vh;
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
            <div class = "row slider--vertical">
                <div class = "col-1 bg-success text-light d-flex align-items-center justify-content-center">
                    <i class="bi-arrow-left-square-fill slider__controls--vertical" id = "prev_v"></i>
                </div>
                
                <div class = "col-10 bg-dark slider__container--vertical d-flex align-items-center" id = "slider-container-vertical">
                    @for($j = 0; $j < 15; $j ++)
                    <div class = "img__container--vertical">
                        {{-- Image --}}
                        <img src = "{{asset('images/noimagevetical.png')}}" title = "Image" class = "slider__img--vertical">
                        {{-- Poster --}}
                        <img src = "{{asset('images/noimagehorizonatal.png')}}" title = "Image" class = "slider__poster--vertical">
                        {{-- Metadata --}}
                        <div class = "slider__meta--vertical">
                            <p style = "font-size: 3vh;">{{$j}}</p>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class = "col-1 bg-success text-light d-flex align-items-center justify-content-center">
                    <i class = "bi-arrow-right-square-fill slider__controls--vertical" id = "next_v"></i>
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
        */?>

        {{-- Custom Script --}}
        {{-- <script>
            $('#prev_v').on('click', function() {

                var scrollValue = 7 * $("#slider-container-vertical").offset().left;

                $('#slider-container-vertical').animate({

                    scrollLeft: '-=' + scrollValue
                }, 300, 'swing');
            });
            
            $('#next_v').on('click', function() {

                var scrollValue = 7 * $("#slider-container-vertical").offset().left;

                $('#slider-container-vertical').animate({

                    scrollLeft: '+=' + scrollValue
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
        </script> --}}
    </body>
</html>