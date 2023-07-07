<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
        $(document).ready(function() {
            // $("#content").html('<a id="magilla" href="#" title="" >Magilla Gorilla</a>');
            // $("#content #magilla").tooltip({ content: '<img src="https://i.etsystatic.com/18461744/r/il/8cc961/1660161853/il_794xN.1660161853_sohi.jpg" />' }); 
            $("#magilla").tooltip({ content: '<img src="https://i.etsystatic.com/18461744/r/il/8cc961/1660161853/il_794xN.1660161853_sohi.jpg" class = "test-img" /><br><span>Title</span><br><span>This is the content description that might seem long but is actually a shorter version of the real deal.</span>' });
        });
        </script>
        <style>
            .test-img {
                width: 100%;
                height: auto;
                /* width: 30vh;
                height: 40vh; */
            }
        </style>
    </head>
    <body>
        {{-- <div id="content"></div> --}}
        {{-- <a id="magilla" href="#" title="" >Magilla Gorilla</a> --}}
        <a id="magilla" href="#" title="" class = "slider__href">
            <img src = "{{asset('images/noimagevetical.png')}}" title = "" style = "height: 40vh; width: auto;">
        </a>
    </body>
</html>