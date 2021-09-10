<!DOCTYPE html>
<html lang="en">
<head>
  {{-- <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
<link href="/css/header.css"   rel="stylesheet">

</head>

<body>


<div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light">

            <a class="navbar-brand" href="https://front.codes/" target="_blank"><img src="https://assets.codepen.io/1462889/fcy.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto py-4 py-md-0">

                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="{{ route('home') }}">Acceuil</a>
                  </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">A propos</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('historique') }} ">Historique</a>
                    <a class="dropdown-item" href="{{ route('motdupresident') }} ">Mot du president</a>
                    <a class="dropdown-item" href="{{ route('cooperative') }}">Cooperative</a>
                    <a class="dropdown-item" href="#">missions et visions</a>
                  </div>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="">Activites</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                  {{-- <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Another action</a>
                  </div> --}}
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="{{ route('archieves') }}"">Archives</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
              </ul>
            </div>

          </nav>
        </div>
      </div>
    </div>
  </div>
<!--   <div class="section full-height">
    <div class="absolute-center">
      <div class="section">
        <div class="container">
          <div class="row">n
            <div class="col-12">
        <h1><span>B</span><span>o</span><span>o</span><span>t</span><span>s</span><span>t</span><span>r</span><span>a</span><span>p</span> <span>4</span><br>
        <span>m</span><span>e</span><span>n</span><span>u</span></h1>
        <p>scroll for nav animation</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div id="switch">
                <div id="circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  {{-- <div class="my-5 py-5">
  </div> --}}

<!-- Link to page
================================================== -->

  {{-- <a href="https://front.codes/" class="logo" target="_blank">
    <img src="https://assets.codepen.io/1462889/fcy.png" alt="">
  </a> --}}


</body>
</html>


<script>



    /* Please ❤ this if you like it! */


    (function($) { "use strict";

      $(function() {
        var header = $(".start-style");
        $(window).scroll(function() {
          var scroll = $(window).scrollTop();

          if (scroll >= 10) {
            header.removeClass('start-style').addClass("scroll-on");
          } else {
            header.removeClass("scroll-on").addClass('start-style');
          }
        });
      });

      //Animation

      $(document).ready(function() {
        $('body.hero-anime').removeClass('hero-anime');
      });

      //Menu On Hover

      $('body').on('mouseenter mouseleave','.nav-item',function(e){
          if ($(window).width() > 750) {
            var _d=$(e.target).closest('.nav-item');_d.addClass('show');
            setTimeout(function(){
            _d[_d.is(':hover')?'addClass':'removeClass']('show');
            },1);
          }
      });

      //Switch light/dark

      $("#switch").on('click', function () {
        if ($("body").hasClass("dark")) {
          $("body").removeClass("dark");
          $("#switch").removeClass("switched");
        }
        else {
          $("body").addClass("dark");
          $("#switch").addClass("switched");
        }
      });

      })(jQuery);


    </script>


