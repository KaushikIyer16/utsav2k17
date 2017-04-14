<!DOCTYPE html>

<?php

  if (isset($_POST['sendmail'])) {
    $to = "request@utsavbmsce.com";
    $subject = "Enquiry from website";
    $txt = $_POST['message'];
    $msg = "From: " . $_POST['name'] . "\n" . "Contact e-mail: " . $_POST['email'] . "\n" . "Phone number: " . $_POST['phone'] . "\n" . "Message: \n" . $txt;
    $headers = "From: admin@utsavbmsce.com " . "\r\n";
    mail($to,$subject,$msg,$headers);
  }
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <script src="./js/jquery.js"></script>
    <script src="./js/materialize.min.js"></script>
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <?php include 'links.php'; ?>
    <style media="screen">
      <?php include 'timeChange.php' ?>
      #map {
        height: 400px;
       }
    </style>

    <script type="text/javascript">
      function validateData() {
        var reg = /[1-9][0-9]{9}/g;
        var phoneNum = document.contactForm.phone.value;
        if (phoneNum == '' || reg.exec(phoneNum) !== null) {
          return true;
        }else{
          return false;
        }
      }
    </script>
  </head>
  <body>
    <?php include 'header.php' ?>
    <div class="row container fauna-font">
      <h3 class ="ludicrous-font" style="padding-bottom: 5%;">CONTACT US</h3>
    <form class="col s12 l6" method="POST" action="" onsubmit="return validateData()" name="contactForm">
      <div class="row">
        <div class="input-field col s12">
          <input id="name_field" type="text" class="validate" name="name">
          <label for="name_field" style="color: black; font-weight: bold;">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email" style="color: black; font-weight: bold;">Your Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="phone" type="text" class="validate" name="phone">
          <label for="phone" style="color: black; font-weight: bold;">Phone Number</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
          <label for="textarea1" style="color: black; font-weight: bold;" >Query</label>
        </div>
      </div>
      <div class="msg-text">
      </div>
      <button class="waves-effect waves-light black btn" style="margin-bottom: 5%;" type="submit" name="sendmail">SEND</button>
    </form>



    <div class="col s12 l6" id="map">

    </div>
  </div>

  <?php include 'footer.php' ?>


  <script>
      function initMap() {
        var bmsLoc = {lat: 12.9416, lng: 77.5669};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: bmsLoc
        });
        var marker = new google.maps.Marker({
          position: bmsLoc,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtNrG43s784NSkT4YenR4MI0BQL9kwL5M&callback=initMap"></script>
  </body>
</html>
