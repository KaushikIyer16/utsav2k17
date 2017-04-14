<?php
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
if ((strpos($userAgent, 'ipad') == false) && strpos($userAgent, 'iphone') == false && strpos($userAgent, 'android') == false) {

}
else{
  header("Location: indexMob.php");
}
 ?>
<!DOCTYPE html>
<html>
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
      body{
        background-image:-webkit-linear-gradient(left, rgb(243,119,97) 0%, rgb(238, 90, 160) 100%);
        background-image:-o-linear-gradient(left, rgb(243,119,97) 0%, rgb(238, 90, 160) 100%);
        background-image:linear-gradient(to right, rgb(243,119,97) 0%, rgb(238, 90, 160) 100%);
        animation: bgChange 10s infinite;
        animation-timing-function: ease-in-out;
        transition: all 1s ease-in-out;
      }
      @keyframes bgChange {
          from{
            background-image:-webkit-linear-gradient(left, rgb(243,119,97) 0%, rgb(238, 90, 160) 100%);
            background-image:-o-linear-gradient(left, rgb(243,119,97) 0%, rgb(238, 90, 160) 100%);
            background-image:linear-gradient(to right, rgb(243,119,97) 0%, rgb(238, 90, 160) 100%);
          }
          to{
            background-image: -webkit-linear-gradient(left, rgb(105,126,174) 0%, rgb(126,105,174) 100%);
            background-image: -o-linear-gradient(left, rgb(105,126,174) 0%, rgb(126,105,174) 100%);
            background-image: linear-gradient(to right, rgb(105,126,174) 0%, rgb(126,105,174) 100%);
          }
      }
    </style>
  </head>
  <body>
    <nav class="custom-navbar">
      <a href="about.php">ABOUT US</a>
      <!-- <a href="events.php">EVENTS</a> -->
      <a href="schedule.php">SCHEDULE</a>
      <a href="sponsors.php">SPONSORS</a>
      <a href="gallery.php">GALLERY</a>
      <!-- <a href="#">PRE UTSAV EVENTS</a> -->
    </nav>

    <div class="utsav-logo">

    </div>

    <div class="countdown-timer">
      <p></p>

    </div>
    <div class="scroll-container" id="scroll-container">
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

       ?>

    </div>
    <script type="text/javascript">
    var tween = new TimelineMax()
                                 .to("#slide2", 2.75, {scale:1.2,bottom: "+=3000" ,ease: Linear.easeNone})
                                 .to("#slide1",4,{scale:0.5,bottom: "-=500", ease: Linear.easeNone})
                                 .to("#slide1",2.5,{opacity: 0})
                                 .to("#slide2",2.5,{scale: 1,bottom: "-=5000",delay:0.5, ease: Linear.easeNone})

                                 .to("#slide2",1.5,{scale:0.9,delay: 1,bottom:"-=5000",ease: Linear.easeNone})
                                 ;




    // build scene
    var scene = new ScrollMagic.Scene({triggerElement: "#triger1", duration: 940,offset: 350})
            .setTween(tween)
            .setPin("#slide1", {pushFollowers: true})
            // .addIndicators({name:"anim 1"})
            .addTo(controller);
    //
    // var tween2 = TweenMax.to("#slide2",1, {scale: 0.8,bottom: "-=600", ease: Linear.easeNone});
    // var tween21 = new TimelineMax().to("#slide2", 1.75, {scale: 0.8,bottom: "-=600", ease: Linear.easeNone})
    //                                .to("#slide3", 1, {scale:1.2,ease: Linear.easeNone})
    //                                .to("#slide3",1.5,{scale: 1,bottom: "-=1000",delay:1, ease: Linear.easeNone})
    //                                .to("#slide2",1,{bottom:"-=600",opacity:0})
    //                                .to("#slide3",1,{bottom:"-=3000"});
    //             // .to("#slide1",0.1,{opacity:0})
    //
    // var scene2 = new ScrollMagic.Scene({triggerElement: "#triger2",duration: 490,offset: -300})
    //         .setTween(tween21)
    //         .setPin("#slide2",{pushFollowers: false})
    //         .addIndicators({name: "anim 2"})
    //         .addTo(controller);


      var countDownDate = new Date("Mar 31, 2017 00:00:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.querySelector('.countdown-timer p').innerHTML = "#festivaloffaith";

        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "#festivaloffaith";
        }
      }, 1000);

    </script>
  </body>
</html>
