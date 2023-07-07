<!DOCTYPE html>
<html lang = "en">
    <head>
        {{-- Title --}}
        <title>Title</title>

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        {{-- jQuery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        {{-- Bootstrap v5--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        {{-- Bootstrap Icons v1.10.5 --}}
        <link href="{{asset('icons/font/bootstrap-icons.css')}}" rel="stylesheet">

        {{-- Custom CSS --}}
        <style>
            html, body {
                background-color: #0c0c0c;
            }

            .slider--vertical {
                height: 40vh;
                margin: 5% 0%;
            }

            .slider__controls {
                font-size: 5vh; 
                z-index: 1; 
                color: #fff; 
                cursor: pointer;
            }

            .slider__container--vertical {
                height: inherit;
                overflow:hidden;
                white-space: nowrap;
            }

            .slider__href {
                height: inherit; 
                margin: 1%;
            }

            .slider__img--vertical {
                height: inherit;
                cursor: pointer;
                /* margin: 1%; */
                border-radius: 1vh;
                border: 1px solid #fff;
            }

            .slider__meta--vertical {
                opacity: 0;
                color: #fff;
                margin-top: -25vh;
            }

            .slider--horizontal {
                height: 25vh;
                margin: 5% 0%;
            }

            .img__container--horizontal {
                height: inherit; 
                overflow:hidden; 
                white-space: nowrap;
            }

            .slider__container--horizontal {
                height: inherit;
                overflow:hidden;
                white-space: nowrap;
            }

            .slider__img--horizontal {
                height: inherit;
                cursor: pointer;
                margin: 0% 1%;
                border-radius: 1vh;
                border: 1px solid #fff;
            }

            .slider__poster {
                height: 25vh;
            }

            .tooltip__custom {
                height: 25vh
                width: 50vh;
            }

            .ui-tooltip {
                max-width: 50vh;
                border-radius: 2%;
            }

            .tooltip__poster {
                height: auto; 
                width: 100%;
            }

            .tooltip__title {
                font-size: 2.5vh;
                font-weight: bold;
            }

            .tooltip__description {
                font-size: 2vh;
                text-align: justify !important;
            }

            .flip-card {
                background-color: transparent;
                width: 300px;
                height: 300px;
                perspective: 1000px;
            }

            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                text-align: center;
                transition: transform 0.6s;
                transform-style: preserve-3d;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }

            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }

            .flip-card-front, .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .flip-card-front {
                background-color: #bbb;
                color: black;
            }

            .flip-card-back {
                background-color: #2980b9;
                color: white;
                transform: rotateY(180deg);
            }
        </style>

        <script>
            $(document).ready(function() {
                @for($j = 0; $j < 30; $j ++)
                // $("#img-{{$j}}").tooltip({ content: '<img src="{{asset('images/noimagehorizonatal.png')}}" class = "tooltip__poster"/><p class = "tooltip__title">Title {{$j}}</p><p class = "tooltip__description">description description description description description description description description description description description.</p>' });
                @endfor
            });
        </script>
    </head>
    <body>
        <div class = "container-fluid">
            {{-- Vertical Slider --}}
            <div class = "row slider--vertical">

                {{-- Previous --}}
                <div class = "col-1 d-flex align-items-center justify-content-center">
                    <i class="bi-arrow-left-square-fill slider__controls" id = "previous-slider-vertical"></i>
                </div>

                {{-- Slider --}}
                <div class = "col-10 slider__container--vertical d-flex align-items-center" id = "slider-container-vertical">
                    @for($j = 0; $j < 15; $j ++)
                    {{-- Image --}}
                    {{-- <a href = "#" title = "" class = "slider__href" id = "img-{{$j}}">
                        <img src = "{{asset('images/noimagevetical.png')}}" title = "" class = "slider__img--vertical">
                    </a> --}}
                    <a href = "#" title = "" class = "slider__href" id = "img-{{$j}}">
                        <img src = "{{asset('images/noimagevetical.png')}}" title = "" class = "slider__img--vertical">
                    </a>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <a href = "#" title = "" class = "slider__href" id = "img-{{$j}}">
                                {{-- <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;"> --}}
                                <img src = "{{asset('images/noimagevetical.png')}}" title = "" class = "slider__img--vertical">
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <h1>John Doe</h1> 
                            <p>Architect & Engineer</p> 
                            <p>We love that guy</p>
                        </div>
                    </div>
                    @endfor
                </div>

                {{-- Next --}}
                <div class = "col-1 d-flex align-items-center justify-content-center">
                    <i class = "bi-arrow-right-square-fill slider__controls" id = "next-slider-vertical"></i>
                </div>
            </div>
            {{-- /Vertical Slider --}}

            {{-- Horizontal Slider --}}
            <div class = "row slider--horizontal">

                {{-- Previous --}}
                <div class = "col-1 d-flex align-items-center justify-content-center">
                    <i class="bi-arrow-left-square-fill slider__controls" id = "previous-slider-horizontal"></i>
                </div>

                {{-- Slider --}}
                <div class = "col-10 slider__container--horizontal d-flex align-items-center" id = "slider-container-horizontal">
                    @for($j = 15; $j < 30; $j ++)
                    <a href = "#" title = "" class = "slider__href" id = "img-{{$j}}">
                        <img src = "{{asset('images/noimagehorizonatal.png')}}" title = "Image" class = "slider__img--horizontal">
                    </a>
                    @endfor
                </div>

                {{-- Next --}}
                <div class = "col-1 d-flex align-items-center justify-content-center" id = "next--horizontal">
                    <i class = "bi-arrow-right-square-fill slider__controls" id = "next-slider-horizontal"></i>
                </div>
            </div>
            {{-- /Horizontal Slider --}}
        </div>

        {{-- Custom Script --}}
        <script>
            $('#previous-slider-vertical').on('click', function() {

                var scrollValue = 7 * $("#slider-container-vertical").offset().left;

                $('#slider-container-vertical').animate({

                    scrollLeft: '-=' + scrollValue
                }, 300, 'swing');
            });
            
            $('#next-slider-vertical').on('click', function() {

                var scrollValue = 7 * $("#slider-container-vertical").offset().left;

                $('#slider-container-vertical').animate({

                    scrollLeft: '+=' + scrollValue
                }, 300, 'swing');
            });

            $('#previous-slider-horizontal').hide();

            $('#previous-slider-horizontal').on('click', function() {

                var scrollValue = 7 * $("#slider-container-vertical").offset().left;

                $('#slider-container-horizontal').animate({
                    scrollLeft: '-=' + scrollValue
                }, 300, 'swing');
            });
            
            $('#next-slider-horizontal').on('click', function() {

                $('#previous-slider-horizontal').show();

                var scrollValue = 7 * $("#slider-container-vertical").offset().left;

                $('#slider-container-horizontal').animate({
                    scrollLeft: '+=' + scrollValue
                }, 300, 'swing');
            });
        </script>
    </body>
</html>