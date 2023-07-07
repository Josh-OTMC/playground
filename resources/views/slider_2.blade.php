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
                margin: 1%;
                border-radius: 1vh;
            }

            .img__container--vertical:hover {
                transform: scale(1.2, 1.2);
                border-radius: 1vh;
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
                background-color: yellowgreen;
            }

            .slider__meta--vertical {
                opacity: 0;
                color: #fff;
                margin-top: -25vh;
            }
        </style>
    </head>
    <body>
        <div class = "container-fluid">

            <div class = "row slider--vertical">
                <div class = "col-1 d-flex align-items-center justify-content-center">
                    <i class="bi-arrow-left-square-fill slider__controls--vertical" id = "prev_v"></i>
                </div>

                <ul class="col-10 list-group list-group-horizontal slider__container--vertical d-flex align-items-center" id = "slider-container-vertical">
                    @for($j = 0; $j < 15; $j ++)
                    <li class="list-group-item img__container--vertical">
                        <img src = "{{asset('images/noimagevetical.png')}}" title = "Image" class = "slider__img--vertical">
                        <li style = "position: relative; left: -20vh;">Example</li>
                    </li>
                    @endfor
                </ul>

                <div class = "col-1 d-flex align-items-center justify-content-center">
                    <i class = "bi-arrow-right-square-fill slider__controls--vertical" id = "next_v"></i>
                </div>
            </div>
        </div>

        {{-- Custom Script --}}
        <script>
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
        </script>
    </body>
</html>