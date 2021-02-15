<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 225px;
          height: 83px;
        }
      body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }

      .topnav {
        overflow: hidden;
        background-color: #333;
      }

      .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }

      .topnav a:hover {
        background-color: #ddd;
        color: black;
      }

      .topnav a.active {
        background-color: #4CAF50;
        color: white;
      }

      .topnav .icon {
        display: none;
      }

      @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
          float: right;
          display: block;
        }
      }

      @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
          position: absolute;
          right: 0;
          top: 0;
        }
        .topnav.responsive a {
          float: none;
          display: block;
          text-align: left;
        }
      }

      /* Slideshow container */
      .slideshow-container {
        width: 100%;
        position: relative;
        margin: auto;
      }

      /* Next & previous buttons */
      .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
      }

      /* Caption text */
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }

      .slide_show_title {
        color: #b0a835;
        text-shadow: 1px 0 10px;
        font-size: 48px;
        padding: 8px 12px;
        position: absolute;
        Top: 18px;
        width: 50%;
        margin-left: 25%;
        text-align: center;
      }


      .slide_show_details {
        color: #032946;
        text-shadow: 1px 0 10px;
        font-size: 32px;
        padding: 8px 12px;
        position: absolute;
        bottom: 90px;
        width: 60%;
        margin-left: 20%;
        text-align: center;
      }
      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }

      .active, .dot:hover {
        background-color: #717171;
      }

      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }

      @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
      }

      @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
      }

      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
      }

      /* Image Galary */
      * {
          box-sizing: border-box;
        }

        body {
          margin: 0;
          font-family: Arial;
        }

        .header {
          text-align: center;
          padding: 32px;
        }

        .row {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
          -ms-flex: 25%; /* IE10 */
          flex: 25%;
          max-width: 25%;
          padding: 0 4px;
        }

        .image_card {
            margin-bottom: 8px;
            vertical-align: middle;
            text-align: center;
            width: 100%;
            height: 100%;
        }
        .image_card img {
              /* margin: 8px; */
              position: relative;
              padding: auto;
              vertical-align: middle;
              width: 90%;
        }

        /* Responsive layout - makes a three column-layout instead of four columns */
        @media screen and (max-width: 1000px) {
          .column {
            -ms-flex: 32%;
            flex: 32%;
            max-width: 32%;
          }
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
          .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
          }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
          }
        }



    </style>
  </head>
  <body>
    <div class="topnav" id="myTopnav">
      <a href="#home" class="active">Home</a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>




<?php

$_title_logo = "./resources/AuBleDor-Logo-2018.png";
$_title_logo_alt = "Au Blé D'Or";


echo "<img src=' {$_title_logo} ' alt='{$_title_logo_alt}' class= center>";

//Get the slides from db
$_slides = array(
   array (
    'src' => "./resources/slide1.png",
    'title' => "Greate Opeining of the Third big STORE",
    'details' => "Meet us this Tusday the 8th of December at 7:30 PM in the greate Wale Island",
    'url' => "url"
  ),
  array (
    'src' => "./resources/slide2.png",
    'title' => "TEXXTTTT",
    'details' => "details",
    'url' => "url"
  ),
  array (
    'src' => "./resources/Home-NewLocation-Notice-2.jpg",
    'title' => "",
    'details' => "",
    'url' => "url"
  )
);

$_slideShowHtml = slideShow($_slides);
echo $_slideShowHtml;


function slideShow($_slides){
  $f_slideShowHtml = '<div class="slideshow-container">';
  $f_navigation_dots = '<div style="text-align:center">';
  $f_len = count($_slides);
  for($i=1; $i<= $f_len; $i++) {
    $f_src = $_slides[$i-1]["src"];
    $f_title = $_slides[$i-1]["title"];
    $f_details = $_slides[$i-1]["details"];
    $f_url = $_slides[$i-1]["url"];
    $f_slideShowHtml .=
        "<div class='mySlides fade'>
          <div class='numbertext'>{$i} / {$f_len}</div>
          <a href = '{$f_url}'>
            <img src={$f_src} style='width:100%'>
          </a>
          <div class='slide_show_title'>{$f_title}</div>
          <div class='slide_show_details'>{$f_details}</div>
        </div>";
    $f_navigation_dots .= "<span class='dot' onclick='currentSlide({$i})'></span>";
  }
  $f_navigation_dots .= '</div>';
  $f_slideShowHtml .=
    '<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>';

  $f_slideShowHtml .= $f_navigation_dots;


  return $f_slideShowHtml;
}



?>

<br><br><br><br><br><br>

<!-- Photo Grid -->
<div class="row">
  <div class="column">
    <div class = "image_card">
      <img src="./resources/image1.png">
      <p> Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2</p>
      <p> Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2</p>
    </div>
  </div>
  <div class="column">
    <div class = "image_card">
    <img src="./resources/image2.png">
      <p> Slide 2</p>
    </div>
  </div>
  <div class="column">
    <div class = "image_card">
    <img src="./resources/image3.png">
      <p> Slide 2</p>
    </div>
  </div>
  <div class="column">
    <div class = "image_card">
    <img src="./resources/image1.png">
      <p> Slide 2</p>
    </div>
  </div>
  <div class="column">
    <div class = "image_card">
      <img src="./resources/image1.png">
      <p> Slide 2</p>
    </div>
  </div>
  <div class="column">
    <div class = "image_card">
    <img src="./resources/image2.png">
      <p> Slide 2</p>
    </div>
  </div>
  <div class="column">
    <div class = "image_card">
    <img src="./resources/image3.png">
      <p> Slide 2</p>
    </div>
  </div>
  <div class="column">
    <div class = "image_card">
    <img src="./resources/image1.png">
    <p> Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2</p>
    <p> Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2</p>
    </div>
  </div>
</div>

<br><br>


    <script>

    var slideShowInterval;

    window.onload = function(){startSlidesShow()};

    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }

    //slide Show javascript
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      resetSlidesShow();
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }

    function startSlidesShow(){
      slideShowInterval = setTimeout(function(){plusSlides(1)}, 3000);
    }

    function resetSlidesShow(){
      console.log("TESSAASD");
      clearInterval(slideShowInterval);
      startSlidesShow();
    }

    </script>
  </body>
</html>
