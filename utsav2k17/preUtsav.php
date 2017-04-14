<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pre UTSAV Events</title>
    <script src="./js/jquery.js"></script>
    <script src="./js/materialize.min.js"></script>
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript">
        $(document).ready(function(){
        $('.carousel.carousel-slider').carousel({'duration' : 2});
        window.setInterval(function(){$('.carousel.carousel-slider').carousel('next')},2500);
      });
    </script>
    <?php include 'links.php'; ?>
    <style media="screen">
    <?php
      include 'timeChange.php';
     ?>
    </style>
    <style media="screen">
      .pre-paragraph{
        font-size : 16px;
        text-align : justify;
        padding-right: 5%;
        padding-left: 5%;
      }
      .pre-image{
        padding: 5%;
        height: 480px;
      }
      .custom-transparent{

        <?php

          if ($hour>=19 || $hour<=5) {
            echo "background-image: -webkit-linear-gradient(left, rgb(105,126,174) 0%, rgb(126,105,174) 100%);
            background-image: -o-linear-gradient(left, rgb(105,126,174) 0%, rgb(126,105,174) 100%);
            background-image: linear-gradient(to right, rgb(105,126,174) 0%, rgb(126,105,174) 100%);";
          }
          else{
            echo "background-image: -webkit-linear-gradient(left,rgb(243,119,97) 0%, rgb(238,90,160) 100%);
            background-image: -o-linear-gradient(left,rgb(243,119,97) 0%, rgb(238,90,160) 100%);
            background-image: linear-gradient(to right, rgb(243,119,97) 0%, rgb(238,90,160) 100%);";
          }

         ?>

      }
@media (max-device-width: 1024px) {
  [class="pre-image"]{
    margin-left: auto;
	margin-right: auto;
	display: block;
  }
  [class="pre-paragraph"]{
    font-size: 20px;
  }
}
    </style>
  </head>
  <body>
    <div class="bg-image-2"></div>
    <?php include 'header.php' ?>
    <div class="container">
      <h2 class="ludicrous-font" style="margin-bottom: 6%;">Pre UTSAV Events</h2>
    <div class ="card transparent custom-transparent" style="margin-bottom: 8%;">
    <div class="row" style="margin-bottom: 0px;">
      <div class="col s12 m12 l6">
        <!--div class="carousel carousel-slider" style="height: 400px; background-color: red;">
          <a class="carousel-item" href="#one!"><img src=""></a>
          <a class="carousel-item" href="#two!"><img src=""></a>
          <a class="carousel-item" href="#three!"><img src=""></a>
          <a class="carousel-item" href="#four!"><img src=""></a>
        </div-->
        <img src="./images/prefest/pre1.jpeg" class="pre-image" alt="">
      </div>
      <div class="col s12 m12 l6">
        <h3 class="ludicrous-font" style="padding-left: 5%;">BMSCE UTSAV<br/>Campus Ambassador Program!</h3>
        <p class="fauna-font pre-paragraph">
          Want to broaden your horizons and acquire effective communication skills? Well, look no further because the Campus Ambassador Program for UTSAV 2017 is here!
Being selected as the ambassador will not only give you an opportunity to interact with a diverse crowd, but will also help you hone your soft skills and will set you apart from the crowd!

Apart from certificates, the active campus ambassadors will be awarded with exciting prizes!
If you think you have what it takes to be the UTSAV ambassador, apply here:<br/>
<strong class="ludicrous-font" style="font-size:x-large;"><a href="https://bmsceutsav.typeform.com/to/EHZGlg" style="color: black;" target="_blank">https://bmsceutsav.typeform.com/to/EHZGlg</a></strong>
        </p>
        <p><a href="#"></a></p>
      </div>
    </div>
  </div>
  <div class ="card transparent custom-transparent">
    <div class="row" style="margin-bottom: 10%;">
      <div class="col s12 m12 l5">
        <!--div class="carousel carousel-slider" style="height: 480px; background-color: red;">
          <a class="carousel-item" href="#one!"><img src=""></a>
          <a class="carousel-item" href="#two!"><img src=""></a>
          <a class="carousel-item" href="#three!"><img src=""></a>
          <a class="carousel-item" href="#four!"><img src=""></a>
        </div-->
        <img src="./images/prefest/pre2.jpeg" class="pre-image" alt="">
      </div>
      <div class="col s12 m12 l7">
        <h3 class="ludicrous-font" style="padding-left: 5%;">Snapshot Metropolis</h3>
        <p class="fauna-font pre-paragraph">
          From 'Bendakaaluru' to 'Bangalore' to 'Bengaluru'. The unrealistic transformation this metropolis has seen hasn't fazed nor diminished the essence and pneuma this city offers to us.
          The 30th edition of Utsav unravels the soul that drives Namma Bengaluru. The mad rush, the cheap thrill, the crazy heights, Utsav 2017 has it all.
          Namma Bengaluru is one of a kind :)
          Here's your chance to add to the mood! Send us your entries for 'Snapshot Metropolis', a photography contest, and relish the feeling of your love for Namma Bengaluru!
          Capture the soul of Bengaluru through your lenses. The theme is Inner Bengaluru! The winner will win a free ticket to the Photography Symposium- Photo Stage 2017 during Utsav and will also win Utsav t-shirt. :')
          Let the festivities begin!
          Send your entries to <b>bmsceutsav.photography@gmail.com</b> along with your details (full name, city, college)
        </p>
        <p><a href="#"></a></p>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>
  </body>
</html>
