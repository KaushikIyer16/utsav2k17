<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <script src="./js/jquery.js"></script>
    <script src="./js/materialize.min.js"></script>
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <?php include 'links.php'; ?>
    <style media="screen">
    <?php
      include 'timeChange.php';
     ?>
    </style>
  </head>
  <script type="text/javascript">
        $(document).ready(function(){
          $('.modal-trigger').leanModal();
          $(".button-collapse").sideNav();
    });
  </script>
  <body class="body-color">
    <div class="bg-image-1"></div>
    <?php include 'header.php' ?>

    <div class="container">
      <h3 class="ludicrous-font">UTSAV 2017</h3>
    </div>
    <div class="container custom-container" style="z-index: 995;">
      <div class="row">
        <div class="col s12 m6 l6 offset-l4">
          <video class="responsive-video" controls>
            <source src="./images/gallery/campus-info-480.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>

    <div class="container">
      <h3 class="ludicrous-font">UTSAV 2016</h3>
    </div>
    <div class="container custom-container" style="z-index: 995;">
          <?php
              $k=1;
                echo '<div class="row">';
                  echo '<div style="margin:1rem 0px;" class="col l6 m6 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                  echo '<div style="margin:1rem 0px;" class="col l3 m3 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                  echo '<div style="margin:1rem 0px;" class="col l3 m3 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                  echo '<div style="margin:1rem 0px;" class="col l3 m3 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                  echo '<div style="margin:1rem 0px;" class="col l3 m3 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                echo '</div>';

                echo '<div class="row">';
                for ($i=0; $i < 6 && $k < 19 ; $i++) {

                    echo '<div style="margin:1rem 0px;" class="col l4 m6 s12">';
                      echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                    echo '</div>';

                }
                echo '</div>';
                echo '<div class="row">';
                  echo '<div style="margin:1rem 0px;" class="col l6 m6 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                  echo '<div style="margin:1rem 0px;" class="col l6 m6 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                echo '</div>';
                echo '<div class="row">';
                  echo '<div style="margin:1rem 0px;" class="col l3 m3 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                  echo '<div style="margin:1rem 0px;" class="col l3 m3 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                  echo '<div style="margin:1rem 0px;" class="col l3 m3 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                  echo '<div style="margin:1rem 0px;" class="col l3 m3 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                  echo '</div>';
                echo '</div>';
                echo '<div class="row">';
                for ($i=0; $i < 3 && $k < 21 ; $i++) {

                    echo '<div style="margin:1rem 0px;" class="col l4 m6 s12">';
                      echo '<img class="responsive-img materialboxed" src="./images/gallery/'.$k.'.jpg">';$k++;
                    echo '</div>';

                }
                echo '</div>';
           ?>
         </div>
         <?php include 'footer.php' ?>
  </body>
</html>
