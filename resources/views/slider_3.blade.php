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
        {{-- Owl Carousel --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        {{-- Custom CSS --}}
        <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            body{
                min-height: 100vh;
                display: flex;
                align-items: center;
            }
            .wrapper{
                width: 100%;
            }
            .carousel{
                max-width: 1200px;
                margin: auto;
                padding: 0 30px;
            }
            .carousel .card{
                color: #fff;
                text-align: center;
                margin: 20px 0;
                line-height: 250px;
                font-size: 90px;
                font-weight: 600;
                border-radius: 10px;
                box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
            }
            .carousel .card-1{
                background: #ed1c24;
            }
            .carousel .card-2{
                background: #0072bc;
            }
            .carousel .card-3{
                background: #39b54a;
            }
            .carousel .card-4{
                background: #f26522;
            }
            .carousel .card-5{
                background: #630460;
            }
            .owl-dots{
                text-align: center;
                margin-top: 40px;
            }
            .owl-dot{
                height: 15px;
                width: 45px;
                margin: 0 5px;
                outline: none;
                border-radius: 14px;
                border: 2px solid #0072bc!important;
                box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
                transition: all 0.3s ease;
            }
            .owl-dot.active,
            .owl-dot:hover{
                background: #0072bc!important;
            }
        </style>
    </head>
    <body>
        <div class = "container">
            <div class="wrapper">
                <div class="carousel owl-carousel">
                    <div class="card card-1">A</div>
                    <div class="card card-2">B</div>
                    <div class="card card-3">C</div>
                    <div class="card card-4">D</div>
                    <div class="card card-5">E</div>
                </div>
            </div>
        </div>
        {{-- Custom Script --}}
        <script>
            $(".carousel").owlCarousel({
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0:{
                        items:1,
                        nav: false
                    },
                    600:{
                        items:3,
                        nav: false
                    },
                    1024:{
                        items:5,
                        nav: false
                    },
                    1366:{
                        items:6,
                        nav: false
                    }
                }
            });
        </script>
    </body>
</html>