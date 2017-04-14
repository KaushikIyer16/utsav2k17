<?php
  date_default_timezone_set("UTC");
  $hour = floatval(date("H"))+5.5;
  if ($hour>=19 || $hour<=5) {
    echo "body{
      background-image: -webkit-linear-gradient(left, rgb(105,126,174) 0%, rgb(126,105,174) 100%);
      background-image: -o-linear-gradient(left, rgb(105,126,174) 0%, rgb(126,105,174) 100%);
      background-image: linear-gradient(to right, rgb(105,126,174) 0%, rgb(126,105,174) 100%);
    }";
  }

 ?>
