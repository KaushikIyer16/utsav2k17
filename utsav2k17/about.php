<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>About Us</title>
    <script src="./js/jquery.js"></script>
    <script src="./js/materialize.min.js"></script>
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <?php include 'links.php'; ?>
    <script type="text/javascript">
          $(document).ready(function(){
            $('.carousel').carousel({'duration' : 2});
            window.setInterval(function(){$('.carousel').carousel('next')},2500);
            $('.tooltipped').tooltip({delay: 50});
            $('.modal-trigger').leanModal();
            $(".button-collapse").sideNav();
      });
    </script>

    <style media="screen">
      <?php include 'timeChange.php'; ?>
    </style>
  </head>

  <body class ="body-color">
    <?php include 'header.php' ?>
    <div class="bg-image-2"></div>
    <div>

    <div class="row transparent" style="background-color: white; margin-bottom: 10px; padding-top:10%;">
      <div class="col s12 m12 l6" >
        <div class="carousel transparent" style="height: 500px;">
          <a class=" car carousel-item" href="#one!"><img src="./images/about/uts1.jpg"></a>
          <a class=" car carousel-item" href="#two!"><img src="./images/about/uts2.jpg"></a>
          <a class=" car carousel-item" href="#three!"><img src="./images/about/uts3.jpg"></a>
          <a class=" car carousel-item" href="#four!"><img src="./images/about/uts4.jpg"></a>
          <a class=" car carousel-item" href="#four!"><img src="./images/about/uts5.jpg"></a>
        </div>
      </div>

      <div class="col s12 m12 l6" style="margin-top: -5%;padding:1.5rem;">
        <h3 class="ludicrous-font">ABOUT BMSCE</h3>
        <div class="row">
          <div class="col s12 m12 l4">
            <img src="./images/BMSCE_Logo.svg" class="responsive-img bms-logo">
          </div>
          <div class="col s12 m12 l8">
            <p class="about-text">
              <b>BMS College of Engineering</b>, Bengaluru was founded in the year 1946 by Late Sri. B.M. Sreenivasaiah, a great visionary and philanthropist; and was nurtured by his illustrious son Late Sri. B.S.Narayan.</p>
          </div>
        </div>
        <p class="about-text">BMSCE is the first private sector initiative in engineering education in India. Started with only 3 undergraduate courses, BMSCE today offers 13 Undergraduate and 16 Postgraduate courses both in conventional and emerging areas.</p>
        <p class="about-text">15 of its Departments are recognized as Research Centres offering PhD/M.Sc(Engineering by Research) degrees in Science, Engineering, Architecture and Management. Modernization, expansion and sophistication have not changed the basic philosophy of education at BMSCE</p>
      </div>
    </div>
  </div>

  <div>
    <div class="row transparent" style="background-color: white; margin-bottom: 40px; padding-top:5%;padding:1.5rem;">
      <div class="col s12 m12 l6">
        <h3 class="ludicrous-font">UTSAV 2017</h3>
        <div class="row">
          <div class="col s12 m12 l4">
            <img src="./images/SimpleLogo.svg" class="responsive-img bms-logo" style="margin-top:30px; margin-bottom: -30px;">
          </div>
          <div class="col s12 m12 l8">
            <p class="about-text">
              It is human nature to feel the need to belong and to know where they are, not just in terms of a compass but in terms of their culture and history. To be inspired from the tales of home and to have a glimpse of a hopeful future.</p>
          </div>
        </div>
        <p class="about-text"> Utsav, the annual cultural fest of BMS College Of Engineering welcomes you back home! Utsav's origins can be dated back to 1975 whence it sprung from a rustic Bengaluru. Utsav continues to be a flamboyant spectacle to this day and serves as a platform for students across India who are eager to exhibit their virtuoso talents. Utsav's fame stems from its huge scale and consistent success.</p>
        <p class="about-text"> TURTLE Jam, Whiplash, Sahas, Fashion Show and DJ Night are among the events to which people throng. These events, and Utsav wholly, have set unprecedented standards and we don't intend to slow down! To facilitate UTSAV, each year we partner with various sponsors. Our unique publicity strategy has always benefitted our sponsors greatly.</p>
        <p class="about-text">Each year, we grow, stretch, blurring boundaries. In a world torn apart by helplessness and despair, we at UTSAV vow to give you the solace of home.
        <br><br>
        <b>Utsav 2017 - A tribute to the multidimensional Bengaluru!</b></p>
      </div>

      <div class="col s12 m12 l6" ></br></br>
        <div class="carousel transparent custom-carousel" style="height: 370px; ">
          <a class="car carousel-item" href="#one!"><img src="./images/about/uts6.jpg"></a>
          <a class=" car carousel-item" href="#two!"><img src="./images/about/uts7.jpg"></a>
          <a class="car carousel-item" href="#three!"><img src="./images/about/uts8.jpg"></a>
          <a class="car carousel-item" href="#four!"><img src="./images/about/uts9.jpg"></a>
          <a class="car carousel-item" href="#four!"><img src="./images/about/uts10.jpg"></a>
        </div>
      </div>
    </div>

  </div>
  <?php include 'footer.php' ?>
  </body>
</html>
