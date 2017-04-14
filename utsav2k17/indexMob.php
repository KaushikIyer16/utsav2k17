<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Utsav 2017</title>
    <script src="./js/jquery.js"></script>
    <script src="./js/materialize.min.js"></script>
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/indexMob.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">

    <?php include 'links.php'; ?>

    <script type="text/javascript">
    var countDownDate = new Date("Mar 30, 2017 00:00:00").getTime();

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
      document.querySelector('.countdown-timer p').innerHTML = days + "d:&emsp;" + hours + "h:&emsp;"
      + minutes + "m:&emsp;" + seconds + "s ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.querySelector('.countdown-timer p').innerHTML = "#festivaloffaith";
      }
    }, 1000);
    </script>
    <script type="text/javascript">
          $(document).ready(function(){
            $('.carousel').carousel({'duration' : 2});
            window.setInterval(function(){$('.carousel').carousel('next')},2500);
            $('.tooltipped').tooltip({delay: 50});
            $('.modal-trigger').leanModal();
            $(".button-collapse").sideNav();
      });
    </script>
    <script type="text/javascript">
    function triggerNav() {
        document.getElementById("mob-nav").style.width = "100%";
    }
    function closeNav() {
        document.getElementById("mob-nav").style.width = "0%";
    }
    </script>
    <style media="screen">
      body{
        min-width: 100%;
        min-height: 100%;
      }
      .utsav-logo{
        height: 40%;
        width: 40%;
        position: relative;
        left: 50%;
        margin-top: 15%;
        transform: translateX(-50%);
      }
      nav a.button-collapse{
        display: block;
      }
      .side-nav-custom a{
        height: 60px;
        line-height: 60px;
      }
      .svg-container{
        position: absolute;
        bottom: 0px;
        background-image: url("./images/PageTwo.svg");
        background-size: cover;
        width: 150%;
        height: 55%;
        left: -50%;
      }
      .fa-knsi-custom{
        font-size: 5.5rem !important;
        padding: 14px;
      }

      @media (min-device-width: 768px) and (max-device-width: 1048px) {
        .svg-container{
          position: absolute;
          bottom: 0px;
          background-image: url("./images/PageTwo.svg");
          background-size: contain;

        }

        .countdown-timer p{
          font-family: ludicrous;
          overflow-y: hidden;
          position: relative;
          height: 100%;
          width: 100%;
          font-size: 7em;
          margin-top: 15%;
          margin-left: 50%;
          transform: translateX(-39%);

        }
      }

      @media (min-width: 768px) and (max-width: 1048px) {
        /*.svg-container{
          position: absolute;
          bottom: 0px;
          background-image: url("./images/PageTwo.svg");
          background-size: contain;

        }*/
        .countdown-timer p{
          font-family: ludicrous;
          overflow-y: hidden;
          position: relative;
          height: 100%;
          width: 80%;
          font-size: 6em;
          margin-top: 15%;
          margin-left: 50%;
          transform: translateX(-39%);

        }

      }
      <?php include 'timeChange.php'; ?>
    </style>
  </head>
  <body>
    <nav class="transparent custom-nav-ht">
      <a href="#" onclick="triggerNav()" class="nav-white-button custom-nav-btn"><i class="fa fa-bars" style="font-size: 6rem !important; margin-top: 20px;" aria-hidden="true"></i></a>
         <ul class="side-nav bg-color nav-size-mobile side-nav-custom" id="mobile-demo">
                <li><a href="about.php"><i class="fa fa-2x fa-info-circle " aria-hidden="true" style=""></i>About</a></li>
                <li><a href="pre_events.php"><i class="fa fa-2x fa-list fa-knsi-custom" aria-hidden="true" style=""></i>Events</a></li>
                <!-- <li><a href="events.php"><i class="fa fa-2x fa-calendar-o fa-knsi-custom" aria-hidden="true" style=""></i>Events</a></li> -->
                <!-- <li><a href="workshops.php"><i class="fa fa-newspaper-o fa-2x fa-knsi-custom" aria-hidden="true"></i>Seminars and Workshops</a></li> -->
                <li><a href ="meettheteam.php">Team</a></li>
                <li><a href="schedule.php"><i class="fa fa-calendar fa-2x " aria-hidden="true"></i>Schedule</a></li>
                <li><a href="sponsors.php"><i class="fa fa-users fa-2x " aria-hidden="true"></i>Sponsors</a></li>
                <li><a href="gallery.php"><i class="fa fa-picture-o fa-2x " aria-hidden="true"></i>Gallery</a></li>

        </ul>
      </div>
      <div class="mobile-nav" id="mob-nav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="font-size: 6rem !important;"><i class="fa fa-times"></i></a>
        <div class="mobile-nav-content">
            <a href="index.php">HOME</a>
            <a href="about.php" >ABOUT US</a>
            <a href="events.php">EVENTS</a>
            <a href="meettheteam.php">PEOPLE</a>
            <a href="schedule.php">SCHEDULE</a>
            <a href="sponsors.php">SPONSORS</a>
            <a href="gallery.php">GALLERY</a>
            <a href="preUtsav.php">PRE UTSAV EVENTS</a>
            <a href="contactus.php">CONTACT US</a>
        </div>
      </div>
    </nav>

      <div class="container">
        <div class="row">
          <div class="s12 ">
            <img src="./images/Logo.svg" class="utsav-logo" alt="">
          </div>
        </div>
      </div>

      <div class="countdown-timer">
        <p></p>

      </div>

      <div class="svg-container">
        <!-- <img src="./images/PageTwo.svg" alt=""> -->
      </div>

      <div class="baloon-container balloon-one">
        <div class="baloon-wiggle orange-balloon">

        </div>
      </div>

      <div class="baloon-container balloon-two">
        <div class="baloon-wiggle purple-balloon">

        </div>
      </div>

      <div class="baloon-container balloon-three">
        <div class="baloon-wiggle orange-balloon">

        </div>
      </div>

      <div class="baloon-container balloon-four">
        <div class="baloon-wiggle purple-balloon">

        </div>
      </div>

      <div class="baloon-container balloon-five">
        <div class="baloon-wiggle orange-balloon">

        </div>
      </div>
  </body>
</html>
