<script type="text/javascript">
function triggerNav() {
    document.getElementById("mob-nav").style.width = "100%";
}
function closeNav() {
    document.getElementById("mob-nav").style.width = "0%";
}
</script>
<nav class="transparent custom-nav-ht">
  <div class="nav-wrapper custom-nav-ht" style="height: 120px;">
    <a href="index.php" class="brand-logo">
      <div class="utsav-logo">
      </div>
    </a>
    <!-- <a href="#" data-activates="mobile-demo" class="button-collapse nav-white-button" id="nav-button"><i class="fa fa-2x fa-bars" style="font-size: 4.5rem !important;" aria-hidden="true"></i></a> -->
    <a href="#" onclick="triggerNav()" class="hide-on-large-only nav-white-button custom-nav-btn"><i class="fa fa-2x fa-bars" style="font-size: 6rem !important; margin-top: 20px;" aria-hidden="true"></i></a>
   <ul id="nav-mobile" class="custom-nav-ht right hide-on-med-and-down" style="margin-left: -25%; text-align: center;">
     <li class="custom-nav-ht" ><a style="margin-top: 20px;" href="about.php" >ABOUT US</a></li>
     <li><a  href="events.php">EVENTS</a></li>
     <li><a href ="meettheteam.php">PEOPLE</a></li>
     <li><a href ="schedule.php">SCHEDULE</a></li>
     <li><a  href="sponsors.php">SPONSORS</a></li>
     <li><a  href="gallery.php">GALLERY</a></li>
     <li><a href="preUtsav.php">PRE UTSAV EVENTS</a></li>
     <li><a  href="contactus.php">CONTACT US</a></li>
   </ul>

   <!-- <ul class="side-nav bg-color nav-size-mobile side-nav-custom" id="mobile-demo">
          <li><a href="about.php"><i class="fa fa-2x fa-info-circle " aria-hidden="true" style=""></i>About</a></li>
          <li><a href="events.php"><i class="fa fa-2x fa-calendar-o" aria-hidden="true" style=""></i>Events</a></li>
          <li><a href="schedule.php"><i class="fa fa-calendar fa-2x " aria-hidden="true"></i>Schedule</a></li>
          <li><a href="sponsors.php"><i class="fa fa-users fa-2x " aria-hidden="true"></i>Sponsors</a></li>
          <li><a href="gallery.php"><i class="fa fa-picture-o fa-2x " aria-hidden="true"></i>Gallery</a></li>

        </ul> -->
  </div>
  <div class="mobile-nav" id="mob-nav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="font-size: 6rem !important;"><i class="fa fa-times"></i> </a>
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
