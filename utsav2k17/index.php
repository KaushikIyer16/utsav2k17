<?php
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
if ((strpos($userAgent, 'ipad') == false) && strpos($userAgent, 'iphone') == false && strpos($userAgent, 'android') == false) {

}
else{
  header("Location: indexMob.php");
}
 ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Utsav 2017</title>

    <?php include 'links.php'; ?>

    <script src="./js/ScrollMagic.min.js" charset="utf-8"></script>
    <script src="./js/TweenMax.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/animation.gsap.min.js"></script>
    <!-- <script src="./js/debug.addIndicators.min.js" charset="utf-8"></script> -->
    <script src="./js/TimelineMax.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      var controller = new ScrollMagic.Controller();
    </script>
    <link rel="stylesheet" href="./css/index.css">
    <style media="screen">
      .scrollmagic-pin-spacer{
        overflow-y: hidden !important;
      }
      .custom-navbar a{
        text-decoration: none;
        color: black;
        padding: 1rem 1rem;
        font-size: 1.5rem;

      }
      .custom-navbar a:hover{
        background-color: rgba(0,0,0,0.1);
      }

      .utsav-logo{
        position: fixed;
        width: 200px;
        height: 200px;
        top: 5%;
        left: 5%;
        background-image: url("./images/Logo.svg");
        background-repeat: no-repeat;
        background-size: contain;
        z-index: 998;
      }

      .down-arrow{
        width: 50px;
        height: 50px;
        position: fixed;
        top: 45%;
        left: 50%;
        z-index: 998;
        background-image: url("./images/scrollArrow.png");
        background-repeat: no-repeat;
        background-size: cover;
        animation: arrowWiggle 1s infinite;
        animation-direction: alternate;
        transition: 0.5s all ease-out;
      }

      @keyframes arrowWiggle {
        from{
          top: 45%;

        }to{
          top: 55%;
        }
      }
      <?php include 'timeChange.php'; ?>

      body::-webkit-scrollbar {
        display:none;
      }

    </style>
    <script src="./js/smoothScroll.js" charset="utf-8"></script>
    <script type="text/javascript">





    function hideArrow() {
      var doc = document.documentElement;
      var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
      var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
      if (top > 175) {
        document.querySelector('.down-arrow').style.display = "none";
      }else{
        document.querySelector('.down-arrow').style.display = "block";
      }
    }

    function arrowClick() {
      console.log("the arrow was clicked");
      window.scrollBy({
        top: 750, // could be negative value
        left: 0,
        behavior: 'smooth'
      });
    }
    </script>
  </head>
  <body onscroll="hideArrow()">
    <nav class="custom-navbar">
      <a href="about.php">ABOUT US</a>
      <a href="events.php">EVENTS</a>
      <a href ="meettheteam.php">PEOPLE</a>
      <a href="schedule.php">SCHEDULE</a>
      <a href="sponsors.php">SPONSORS</a>
      <a href="gallery.php">GALLERY</a>
      <a href="preUtsav.php">PRE UTSAV EVENTS</a>
      <a href="contactus.php">CONTACT US</a>
    </nav>

    <div class="utsav-logo">

    </div>

    <div class="countdown-timer">
      <p></p>

    </div>

    <div class="down-arrow" onclick="arrowClick()">

    </div>
    <div class="scroll-container" id="scroll-container" >
      <section class="slide1">

        <div id="slide1" style="margin:0px !important;">
          <!-- <img id="slide1Image" src="./Icons/Brochure.png" alt=""> -->
        </div>

      </section>

      <div style="" id="triger1"></div>

      <section class="slide2">
        <div id="slide2" style="margin:0px !important"></div>
      </section>
      <!-- <section class="slide3">
        <div id="slide3" style="margin:0px !important"></div>
      </section> -->
      <div id="triger2"></div>
      <?php
          // if ($hour>=19 || $hour<=5) {
          //
          // }
          // else{
            echo '<div class="baloon-container balloon-one">
              <div class="baloon-wiggle orange">

              </div>
            </div>

            <div class="baloon-container balloon-two">
              <div class="baloon-wiggle purple">

              </div>
            </div>

            <div class="baloon-container balloon-three">
              <div class="baloon-wiggle orange">

              </div>
            </div>

            <div class="baloon-container balloon-four">
              <div class="baloon-wiggle purple">

              </div>
            </div>

            <div class="baloon-container balloon-five">
              <div class="baloon-wiggle orange">

              </div>
            </div>';
          // }
       ?>

    </div>
    <script src="./js/index.js" charset="utf-8"></script>
  </body>
</html>
