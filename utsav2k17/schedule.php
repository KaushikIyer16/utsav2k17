<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Schedule</title>
    <?php include 'links.php'; ?>
    <script src="./js/jquery.js"></script>
   <script src="./js/materialize.min.js"></script>
   <link rel="stylesheet" href="./css/materialize.min.css">
   <link rel="stylesheet" href="./css/common.css">
   <link rel="stylesheet" href="./css/font-awesome.min.css">

   <script type="text/javascript">
   $(document).ready(function(){
      $('.modal-trigger').leanModal();
      $('.tooltipped').tooltip({delay: 50});
      $(".button-collapse").sideNav();

    });
   </script>
   <script type="text/javascript">

   <?php
   $conn = new PDO("mysql:host=localhost;dbname=utsav;charset=utf8","utsavhosting","");
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   $stmt = $conn->prepare('SELECT * FROM events ORDER BY ClubName');
   $stmt->execute();
   $row = $stmt->fetchAll();
   ?>
   var eventDetails =<?php echo json_encode($row, JSON_UNESCAPED_UNICODE); ?>;
   function populateModal(){
     document.getElementById("mod-content").innerHTML='';
     for(var j=0; j<arguments.length;j++){
     for(var i=0; i<eventDetails.length; i++)
     {
       if(eventDetails[i].EventName === arguments[j]){
         document.getElementById("mod-content").innerHTML+= `
 					<div class="row">
 						<div class="col s12 m12 l12" style='color:rgb(126,105,174);'>

 								<h3 class="ludicrous-font" >`+eventDetails[i].EventName+`</h3>
 								<span class="fauna-font">
 								`+eventDetails[i].Description+`
 								</span>
 								<h5 class="ludicrous-font"><i class="fa fa-money" aria-hidden="true"></i> Registration fee: </h5>
 								<i class="fa fa-inr" aria-hidden="true"></i> `+eventDetails[i].RegFee+`
 								<br>
 								<h5 class="ludicrous-font"><i class="fa fa-user" aria-hidden="true"></i> Coordinator: </h5>
 								<a href="tel:`+eventDetails[i].Contact+`" style="color:rgb(126,105,174); padding-left: 5px;">`+eventDetails[i].Coordinator+`:&emsp; <i class="fa fa-phone " style="color:rgb(126,105,174);"></i> `+eventDetails[i].Contact+`</a>
 								<br>
 								<h5 class="ludicrous-font"><i class="fa fa-trophy" aria-hidden="true"></i> Prize: </h5>
 								<h6 class="fauna-font">I Prize: <i class="fa fa-inr" aria-hidden="true"></i> `+eventDetails[i].First+`</h6>
 								<h6 class="fauna-font">II Prize: <i class="fa fa-inr" aria-hidden="true"></i> `+eventDetails[i].Second+`</h6>

 						</div>
 					</div>
 				`;
       }

     }
 }
 }
 /*function multi_test(evtName1, evtName2, evtName3){
   document.getElementById("mod-content").innerHTML='';
   for(var i=0; i<eventDetails.length; i++)
   {
     if(eventDetails[i].EventName === evtName1 || eventDetails[i].EventName === evtName2 || eventDetails[i].EventName === evtName3){
       document.getElementById("mod-content").innerHTML += `
        <div class="row">
          <div class="col s12 m12 l12" style='color:rgb(126,105,174);'>

              <h3 class="ludicrous-font" >`+eventDetails[i].EventName+`</h3>
              <span class="fauna-font">
              `+eventDetails[i].Description+`
              </span>
              <h5 class="ludicrous-font"><i class="fa fa-money" aria-hidden="true"></i> Registration fee: </h5>
              <i class="fa fa-inr" aria-hidden="true"></i> `+eventDetails[i].RegFee+`
              <br>
              <h5 class="ludicrous-font"><i class="fa fa-user" aria-hidden="true"></i> Coordinator: </h5>
              <a href="tel:`+eventDetails[i].Contact+`" style="color:rgb(126,105,174); padding-left: 5px;">`+eventDetails[i].Coordinator+`:&emsp; <i class="fa fa-phone " style="color:rgb(126,105,174);"></i> `+eventDetails[i].Contact+`</a>
              <br>
              <h5 class="ludicrous-font"><i class="fa fa-trophy" aria-hidden="true"></i> Prize: </h5>
              <h6 class="fauna-font">I Prize: <i class="fa fa-inr" aria-hidden="true"></i> `+eventDetails[i].First+`</h6>
              <h6 class="fauna-font">II Prize: <i class="fa fa-inr" aria-hidden="true"></i> `+eventDetails[i].Second+`</h6>

          </div>
        </div><br/>
      `;
     }

   }
}*/
   </script>

   <style media="screen">
     tr th{
       border: solid 2px black;
     }
     tr td{
       border: solid 2px black;
     }
     /*.custom-page-footer{
       position:fixed;
       width: 100%;
       bottom: 0px;
     }*/
     <?php include 'timeChange.php'; ?>

   </style>

  </head>
  <body style="font-size: 20px">
    <div class="bg-image-3"></div>
    <?php include 'header.php' ?>

    <div class="container" style="length: 20%">
      <h2 class = "ludicrous-font">SCHEDULE</h2>
    </div>
    <div class="row schedule-pad">
      <div class="col s12">
        <ul class="tabs event-days modal-font transparent">
          <li class="tab col s6 ludicrous-font"><a style="color : black;" href="#day1" class="active">31 March</a></li>
          <li class="tab col s6 ludicrous-font"><a style="color : black;" href="#day2">1 April</a></li>
          <li class="tab col s6 ludicrous-font"><a style="color : black;" href="#day3">2 April</a></li>
        </ul>
      </div>
    </div>
    <div class="container custom-size-container modal-font" id="day1">
    <table class="centered bordered" style="min-width: 1000px;">
         <thead>
           <tr>
               <th>Venue/Timings</th>
               <th>9am - 10am</th>
               <th>10am - 11am</th>
               <th>11am - 12pm</th>
               <th>12pm - 1pm</th>
               <th>1pm - 2pm</th>
               <th>2pm - 3pm</th>
               <th>3pm - 4pm</th>
               <th>4pm - 5pm</th>
               <th>5pm - 6pm</th>
               <th>6pm - 7pm</th>
               <th>7pm - 8pm</th>
               <th>8pm - 9pm</th>
           </tr>
         </thead>

         <tbody>
           <tr>
             <td>Main Stage</td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td colspan="2"><a class="schedule-tooltip tooltipped" data-position="top" data-delay="50" data-tooltip="No Description Available">Inauguration</a></td>
             <td colspan="2"><a class="modal-trigger" onclick="populateModal('Eastern Group Dance','Western Group Dance')"  href="#modal1" style="color: black;">Eastern and Western Group Dance</a></td>
           </tr>
           <tr>
             <td>Stage 2 (Indoor Stadium)</td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td colspan="2"><a class="modal-trigger" onclick="populateModal('Mr.UTSAV')"  href="#modal1" style="color: black;">Mr. UTSAV</a></td>
           </tr>

           <tr>
             <td>Area around CR, EC, Mech Block, Library </td>
             <td colspan="7"><a class="modal-trigger" onclick="populateModal('Amazing Task Race(Adrenaline Junkyard)')"  href="#modal1" style="color: black;">Amazing Task race(Adrenaline Junkyard)(8am to 4pm)</a></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>

           </tr>
           <tr>
             <td>C Bench</td>
             <td colspan="12"><a class="modal-trigger" onclick="populateModal('Cultural Sante')"  href="#modal1" style="color: black;">Cultural Sante</a></td>

           </tr>
         </tbody>
       </table>
     </div>

     <div class="container custom-size-container modal-font" id="day2" >
     <table class="centered bordered" style="width: 100%;">
          <thead>
                <tr>
                <th>Venue/Timings</th>
                <th>9am - 10am</th>
                <th>10am - 11am</th>
                <th>11am - 12pm</th>
                <th>12pm - 1pm</th>
                <th>1pm - 2pm</th>
                <th>2pm - 3pm</th>
                <th>3pm - 4pm</th>
                <th>4pm - 5pm</th>
                <th>5pm - 6pm</th>
                <th>6pm - 7pm</th>
                <th>7pm - 8pm</th>
                <th>8pm - 9pm</th>
                </tr>
          </thead>

          <tbody>
            <tr>
              <td>Main Stage</td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('NamHans(Mad Ads)')"  href="#modal1" style="color: black;">NamHans(Mad Ads)</a></td>
              <td></td>
              <td colspan="3"><a class="modal-trigger" onclick="populateModal('Battle of Bands')"  href="#modal1" style="color: black;">Battle of Bands(western)</td>
              <td></td>
              <td colspan="3"><a class="modal-trigger" onclick="populateModal('Fashion Show')"  href="#modal1" style="color: black;">Fashion Show</a></td>
              <td><a class="schedule-tooltip tooltipped" data-position="top" data-delay="50" data-tooltip="No Description Available">EDM Night</a></td>
            </tr>
            <tr>
              <td>Stage 2 (Indoor Stadium)</td>
              <td></td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Solo Dance')"  href="#modal1" style="color: black;">Solo Dance</a></td>
              <!--td colspan="3"><a class="modal-trigger" onclick="populateModal('Beatboxing 1 on 1','Beatboxing 2 on 2','Female Beatboxing')"  href="#modal1" style="color: black;">Beat Boxing</a></td-->
               <td></td>
               <td></td>
                <td></td>
              <td colspan="3"><a class="modal-trigger" onclick="populateModal('Western(Vocal) Solo')"  href="#modal1" style="color: black;">Western(Vocal) Solo</a></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>PG Block IS-4005</td>
              <td></td>
              <td colspan="3"><a class="modal-trigger" onclick="populateModal('Beyond Infinity')"  href="#modal1" style="color: black;">Beyond Infinity</a></td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Pirates of Maths')"  href="#modal1" style="color: black;">&pi;rates of Maths</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>PG Block IS-4001</td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Creative Writing')"  href="#modal1" style="color: black;">Creative Writing</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>PG Block EE-6003</td>
              <td></td>
              <td colspan="3"><a class="modal-trigger" onclick="populateModal('Questars')"  href="#modal1" style="color: black;">Questars</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Mech Block Drawing Hall 1</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Vidrawna Soudha(Sketching)')"  href="#modal1" style="color: black;">Sketching</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Library Auditorium</td>
              <td></td>
              <td colspan="3"><a class="modal-trigger" onclick="populateModal('Photography Symposium')"  href="#modal1" style="color: black;">Photography Symposium</a></td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Antyakshari')"  href="#modal1" style="color: black;">Antyakshari</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

            </tr>
            <tr>
              <td>BSN Hall</td>
              <td></td>
              <td colspan="4"><a class="modal-trigger" onclick="populateModal('SpEnt Quiz')"  href="#modal1" style="color: black;">SpEnt Quiz</a></td>
              <td colspan="5"><a class="modal-trigger" onclick="populateModal('General Quiz')"  href="#modal1" style="color: black;">General Quiz</a></td>
              <td></td>
              <td></td>

            </tr>
            <tr>
              <td>FDC Hall</td>
              <td></td>
              <td colspan="3"><a class="modal-trigger" onclick="populateModal('Classical(Vocal) Solo')"  href="#modal1" style="color: black;">Classical Vocal Solo</a></td>
              <td></td>
              <td colspan="4"><a class="modal-trigger" onclick="populateModal('Non Classical(Vocal) Solo')"  href="#modal1" style="color: black;">Non Classical Vocal Solo</a></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>MESH</td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Stress Test')"  href="#modal1" style="color: black;">Stress Test</a></td>
              <!--td colspan="5"><a class="modal-trigger" onclick="populateModal('B-Plan')"  href="#modal1" style="color: black;">B-Plan</a></td-->
              <td></td>
              <td></td><td></td><td></td><td></td><td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>MV Hall</td>
              <td></td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Mookabhinaya')"  href="#modal1" style="color: black;">Mookabhinaya</a></td>
              <td></td>
              <td colspan="4"><a class="modal-trigger" onclick="populateModal('Wonder-LAS(Last Actor Standing)')"  href="#modal1" style="color: black;">Wonder-LAS(Last Actor Standing)</a></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>MPH</td>
              <td></td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Shades Of Garden City(Painting)')"  href="#modal1" style="color: black;">Painting</a></td>
              <td colspan="4"><a class="modal-trigger" onclick="populateModal('Beg Borrow Startup')"  href="#modal1" style="color: black;">Beg borrow startup</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>RK Hall</td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Slam Poetry')"  href="#modal1" style="color: black;">Slam Poetry</a></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('JAM')"  href="#modal1" style="color: black;">JAM</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>C-bench</td>
              <td colspan="12"><a class="modal-trigger" onclick="populateModal('Cultural Sante')"  href="#modal1" style="color: black;">Cultural Sante</a></td>
            </tr>
            <tr>
              <td>CR Block 101</td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="3"><a class="modal-trigger" onclick="populateModal('Marketing Genius')"  href="#modal1" style="color: black;">Marketing Genius</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Gopi Wall</td>
              <td></td>
              <td colspan="6"><a class="modal-trigger" onclick="populateModal('Wall Climbing Competitive','Wall Climbing Non Competitive')"  href="#modal1" style="color: black;">Wall Climbing</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Classroom block arena and the lawn</td>
              <td></td>
              <td colspan="6"><a class="modal-trigger" onclick="populateModal('Zipline(Flying Fox)')"  href="#modal1" style="color: black;">Zipline (Flying Fox)</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>EC Block Wall</td>
              <td></td>
              <td colspan="6"><a class="modal-trigger" onclick="populateModal('Rappelling')"  href="#modal1" style="color: black;">Rappelling</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Passage between MECH and EC block</td>
              <td></td>
              <td colspan="6"><a class="modal-trigger" onclick="populateModal('Obstacle Cycling Competitive','Obstacle Cycling Non Competitive')"  href="#modal1" style="color: black;">Obstacle Cycling</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>CR Block Arena</td>
              <td></td>
              <td colspan="6"><a class="modal-trigger" onclick="populateModal('Tyroline Traverse Competitive','Tyroline Traverse Non Competitive')"  href="#modal1" style="color: black;">Tyroline Traverse</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>CS Seminar Hall</td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Tech-Tok')"  href="#modal1" style="color: black;">Tech-Tok</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>IS Lab</td>
              <td></td>
              <td></td>
              <td colspan="5"><a class="modal-trigger" onclick="populateModal('Counter Strike GO')"  href="#modal1" style="color: black;">Counter Strike GO</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Internet Lab</td>
              <td></td>
              <td></td>
              <td colspan="5"><a class="modal-trigger" onclick="populateModal('Mini Militia')"  href="#modal1" style="color: black;">Mini Militia</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>PG Block Entrance</td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="2"><a class="modal-trigger" onclick="populateModal('Natakalappa Circle(Street Play)')"  href="#modal1" style="color: black;">Street Play</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Library and CR Block Lawn</td>
              <td colspan="7"><a class="modal-trigger" onclick="populateModal('Hogathon')"  href="#modal1" style="color: black;">Hogathon</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>CS Lab</td>
              <td></td>
              <td></td>
              <td colspan="5"><a class="modal-trigger" onclick="populateModal('DOTA 2','FIFA 12')"  href="#modal1" style="color: black;">DOTA 2 and FIFA 12</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>MCA Lab</td>
              <td></td>
              <td colspan="3"><a class="modal-trigger" onclick="populateModal('Coding/Debugging')"  href="#modal1" style="color: black;">Coding/Debugging</a></td>
              <td colspan="4"><a class="modal-trigger" onclick="populateModal('Online Treasure Hunt')"  href="#modal1" style="color: black;">Online Treasure Hunt</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Telecom Lab</td>
              <td></td>
              <td></td>
              <td colspan="5"><a class="modal-trigger" onclick="populateModal('NFS Most Wanted(2005)')"  href="#modal1" style="color: black;">NFS Most Wanted</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>

          </tbody>
          </table>
        </div>
      <div class="container custom-size-container modal-font" id="day3">
      <table class="centered bordered" style="width: 100%;">
           <thead>
             <tr>
                 <th>Venue/Timings</th>
                 <th>9am - 10am</th>
                 <th>10am - 11am</th>
                 <th>11am - 12pm</th>
                 <th>12pm - 1pm</th>
                 <th>1pm - 2pm</th>
                 <th>2pm - 3pm</th>
                 <th>3pm - 4pm</th>
                 <th>4pm - 5pm</th>
                 <th>5pm - 6pm</th>
                 <th>6pm - 7pm</th>
                 <th>7pm - 8pm</th>
                 <th>8pm - 9pm</th>
             </tr>
           </thead>

           <tbody>
             <tr>
               <td>Main Stage</td>
               <td></td>
               <td colspan="3"><a class="modal-trigger" onclick="populateModal('Battle of Bands(Eastern)')"  href="#modal1" style="color: black;">Bugle Rock (Battle of Eastern Bands)</a></td>
               <td colspan="7"><a class="schedule-tooltip tooltipped" data-position="top" data-delay="50" data-tooltip="No Description Available">Whiplash</a></td>
               <td><a class="schedule-tooltip tooltipped" data-position="top" data-delay="50" data-tooltip="No Description Available">Bollywood Night</a></td>
             </tr>
             <tr>
               <td>Indoor Stadium</td>
               <td></td>
               <td colspan="7"><a class="modal-trigger" onclick="populateModal('One On One Turtle Jam','Two on Two Turtle Jam', 'Crew on Crew Turtle Jam')"  href="#modal1" style="color: black;">Turtle Jam</a></td>
               <!--td colspan="3"><a class="modal-trigger" onclick="populateModal('Beatboxing 1 on 1','Beatboxing 2 on 2','Female Beatboxing')"  href="#modal1" style="color: black;">Beat Boxing</a></td-->
               <td></td>
               <td></td>
               <td></td>
               <td></td>

             </tr>
             <tr>
               <td>PG Block EC-6002</td>
               <td></td>
               <td colspan="2"><a class="modal-trigger" onclick="populateModal('Potpourri')"  href="#modal1" style="color: black;">Potpourri</a></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>

             <tr>
               <td>MPH</td>
               <td></td>
               <td colspan="3"><a class="modal-trigger" onclick="populateModal('Acapella')"  href="#modal1" style="color: black;">Acapella</td>
               <td></td>
               <td colspan="3"><a class="modal-trigger" onclick="populateModal('Instrumental Solo')"  href="#modal1" style="color: black;">Instrumental Solo</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>

             </tr>

             <tr>
               <td>BSN Hall</td>
               <td></td>
               <td colspan="4"><a class="modal-trigger" onclick="populateModal('India Quiz')"  href="#modal1" style="color: black;">India Quiz</td>
               <td colspan="5"><a class="modal-trigger" onclick="populateModal('Arbit Quiz')"  href="#modal1" style="color: black;">Arbit Quiz</td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>FDC Hall</td>
               <td></td>
               <td colspan="4"><a class="modal-trigger" onclick="populateModal('BMS Talkies(Short Film Making)')"  href="#modal1" style="color: black;">BMSCE Talkies(Short Film Making)</td>
               <td colspan="4"><a class="modal-trigger" onclick="populateModal('Thatt Antha Maadi(Improv)')"  href="#modal1" style="color: black;">Thatt Antha Maadi(IMPROV)</td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>MV Hall</td>
               <td></td>
               <td></td>
               <td></td>
               <td colspan="2"><a class="modal-trigger" onclick="populateModal('Debate')"  href="#modal1" style="color: black;">Debate</td>
               <td colspan="4"><a class="modal-trigger" onclick="populateModal('Non Classical(Vocal) Solo')"  href="#modal1" style="color: black;">Non Classical Vocal Solo</td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>CR Block 101</td>
               <td></td>
               <td></td>
               <td colspan="2"><a class="modal-trigger" onclick="populateModal('Junk Down The Line(Best out of waste)')"  href="#modal1" style="color: black;">Junk down the line(Best out of waste)</td>
               <td></td>
               <td colspan="2"><a class="modal-trigger" onclick="populateModal('Facer Town(Face Painting)')"  href="#modal1" style="color: black;">Facer Town (Face painting)</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>Library Auditorium</td>
               <td></td>
               <td colspan="2"><a class="modal-trigger" onclick="populateModal('IPL Auction')"  href="#modal1" style="color: black;">IPL Auction</td>
               <td colspan="4"><a class="modal-trigger" onclick="populateModal('E-Talks')"  href="#modal1" style="color: black;">E-talks</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>MESH</td>
               <td></td>
               <td></td>
               <td colspan="2"><a class="modal-trigger" onclick="populateModal('Rasaprashne')"  href="#modal1" style="color: black;">Rasaprashne</td>
               <td colspan="2"><a class="modal-trigger" onclick="populateModal('Charchaspardhe')"  href="#modal1" style="color: black;">Charchaspardhe</td>
               <td colspan="2"><a class="modal-trigger" onclick="populateModal('Chakravyuha')"  href="#modal1" style="color: black;">Chakravyuha</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>RK Hall</td>
               <td colspan="3"><a class="modal-trigger" onclick="populateModal('Stock Market')"  href="#modal1" style="color: black;">Stock Market</td>
               <td colspan="3"><a class="modal-trigger" onclick="populateModal('Biz Quiz')"  href="#modal1" style="color: black;">Biz Quiz</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>C-bench</td>
               <td colspan="3"><a class="modal-trigger" onclick="populateModal('Cultural Sante')"  href="#modal1" style="color: black;">Cultural Sante</td>
               <td colspan="3"><a class="modal-trigger" onclick="populateModal('Wanderlust')"  href="#modal1" style="color: black;">Wanderlust</td>
               <td colspan="6"><a class="modal-trigger" onclick="populateModal('Cultural Sante')"  href="#modal1" style="color: black;">Cultural Sante</td>
            </tr>
            <tr>
              <td>Gopi Wall</td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="4"><a class="modal-trigger" onclick="populateModal('Wall Climbing Competitive','Wall Climbing Non Competitive')"  href="#modal1" style="color: black;">Wall Climbing</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>CR Block Arena</td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="4"><a class="modal-trigger" onclick="populateModal('Zipline(Flying Fox)')"  href="#modal1" style="color: black;">Zipline (Flying Fox)</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>EC Block Wall</td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="4"><a class="modal-trigger" onclick="populateModal('Rappelling')"  href="#modal1" style="color: black;">Rappelling</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Passage between MECH Block and EC Block</td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="4"><a class="modal-trigger" onclick="populateModal('Obstacle Cycling Competitive','Obstacle Cycling Non Competitive')"  href="#modal1" style="color: black;">Obstacle Cycling</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>CR Block Arena</td>
              <td></td>
              <td></td>
              <td></td>
              <td colspan="4"><a class="modal-trigger" onclick="populateModal('Tyroline Traverse Competitive','Tyroline Traverse Non Competitive')"  href="#modal1" style="color: black;">Tyroline Traverse</a></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
             <tr>
               <td>IS Lab</td>
               <td></td>
               <td></td>
               <td colspan="5"><a class="modal-trigger" onclick="populateModal('Counter Strike GO','App Up')"  href="#modal1" style="color: black;">Counter Strike and App Up</a></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>CS Lab</td>
               <td></td>
               <td></td>
               <td colspan="5"><a class ="modal-trigger" onclick="populateModal('DOTA 2', 'FIFA 12')" href ="#modal1" style="color: black;">DOTA 2 and FIFA 12</a></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>CS Seminar Hall</td>
               <td></td>
               <td></td>
               <td></td>
               <td colspan="2"><a class ="modal-trigger" onclick="populateModal('Technovation')" href ="#modal1" style="color: black;">Technovation</a></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>Internet Lab</td>
               <td></td>
               <td></td>
               <td colspan="5"><a class ="modal-trigger" onclick="populateModal('Mini Militia')" href ="#modal1" style="color: black;">Mini Militia</a></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
               <td>Telecom Lab</td>
               <td></td>
               <td></td>
               <td colspan="5"><a class ="modal-trigger" onclick="populateModal('NFS Most Wanted(2005)')" href ="#modal1" style="color: black;">NFS Most Wanted</a></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
           </thead>
         </table>
       </div><br/><br/>
       <div id="modal1" class="modal modal-fixed-footer">
         <div class="modal-content" id="mod-content">

         </div>
         <div class="modal-footer">
           <a href="#!" class=" modal-action modal-close btn-flat ludicrous-font" style="color:rgb(126,105,174);">CLOSE</a>
         </div>
       </div>
       <?php include 'footer.php';?>
  </body>
</html>
