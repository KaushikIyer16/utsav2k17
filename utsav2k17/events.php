<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Events</title>
		<?php include 'links.php'; ?>
		<script src="./js/jquery.js" charset="utf-8"></script>
		<script src="./js/materialize.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="./css/materialize.min.css">
		<link rel="stylesheet" href="./css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/common.css">
		<script type="text/javascript">
		$(document).ready(function(){
		$(".button-collapse").sideNav();
	});
		console.log(screen.width);
		</script>
		<style media="screen">
		<?php include 'timeChange.php'; ?>
			body,html{
				overflow-x: hidden;
			}
			@media (max-device-width: 776px) {
				body,html{
					overflow: hidden;
				}
			}

		</style>
		<script type="text/javascript">
		<?php

						$conn = new PDO("mysql:host=localhost;dbname=utsav;charset=utf8","utsavhosting","");
						// $conn = new PDO("mysql:host=localhost;dbname=utsav;charset=utf8","root","root");
						$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
						$stmt = $conn->prepare('SELECT * FROM events ORDER BY ClubName' );
						$stmt->execute();
						$row = $stmt->fetchAll();
		 ?>
			var eventDetails =<?php echo json_encode($row, JSON_UNESCAPED_UNICODE); ?>;

			function cardClick(deptName) {
					clearList();
					var deptEvents = getEventNamesByDept(deptName);
					var domElement = document.querySelector('#event-caraousel');
					for(var i=0;i<deptEvents.length;i++){

						domElement.appendChild(getCard(deptEvents[i]));
					}
					var slider = $('.carousel');
					slider.carousel();
					if (slider.hasClass('initialized')){
					    slider.removeClass('initialized')
					}

					//just reinit the carousel
					slider.carousel();


			}
			function clearList() {
				var domElement = document.querySelector('#event-caraousel');
			  if (domElement != null) {
			    while (domElement.firstChild) {
			      domElement.removeChild(domElement.firstChild);
			    }
			  }
			}
			function getCard(cardDetails) {
				var card = document.createElement('a');
				card.classList = 'carousel-item';
				card.innerHTML = `
					<div class="row" >
						<div class="col s12 m12 l12" style='color:rgb(126,105,174);'>
							<div class="card-panel knsi-panel" style="">
								<h3 class="ludicrous-font" >`+cardDetails.EventName+`</h3>
								<span class="fauna-font">
								`+cardDetails.Description+`
								</span>
								<h5 class="ludicrous-font knsi-font-size"><i class="fa fa-money" aria-hidden="true"></i> Registration fee: </h5>
								<i class="fa fa-inr" aria-hidden="true"></i> `+cardDetails.RegFee+`
								<br>
								<h5 class="ludicrous-font knsi-font-size"><i class="fa fa-user" aria-hidden="true"></i> Coordinator: </h5>
								<a href="tel:`+cardDetails.Contact+`" style="color:rgb(126,105,174); padding-left: 5px;">`+cardDetails.Coordinator+`:&emsp; <i class="fa fa-phone " style="color:rgb(126,105,174);"></i> `+cardDetails.Contact+`</a>
								<br>
								<h5 class="ludicrous-font knsi-font-size"><i class="fa fa-calendar" aria-hidden="true"></i> Date and Time: </h5>
								<a href="#" style="color:rgb(126,105,174); padding-left: 5px;">`+cardDetails.Date+` ,</a>
								<a href="#" style="color:rgb(126,105,174); padding-left: 5px;">`+cardDetails.Time+` </a>
								<br>
								<h5 class="ludicrous-font knsi-font-size"><i class="fa fa-map-marker" aria-hidden="true"></i> Venue: </h5>
								<a href="#" style="color:rgb(126,105,174); padding-left: 5px;">`+cardDetails.Venue+`&emsp;</a>
								<br>
								<h5 class="ludicrous-font"><i class="fa fa-trophy" aria-hidden="true"></i> Prize: </h5>
								<h6 class="fauna-font knsi-price">I Prize: <i class="fa fa-inr" aria-hidden="true"></i> `+cardDetails.First+`</h6>
								<h6 class="fauna-font knsi-price">II Prize: <i class="fa fa-inr" aria-hidden="true"></i> `+cardDetails.Second+`</h6>
							</div>
						</div>
					</div>
				`;
				return card;
			}
			function getEventNamesByDept(deptName) {
				var deptEvents = Array();
				for (var i = 0; i < eventDetails.length; i++) {
					if (eventDetails[i].ClubName === deptName.toUpperCase()) {
						deptEvents.push(eventDetails[i]);
					}
				}
				return deptEvents;
			}
			function showTitle(card) {
				card.querySelector('.card-title').style.opacity = "1";
				card.querySelector('.svg-card').style.opacity = "0.65";

			}

			function hideTitle(card) {
				card.querySelector('.card-title').style.opacity = "0";
				card.querySelector('.svg-card').style.opacity = "1";
			}

			function initEvents() {
				var deptEvents = getEventNamesByDept('entrepreneurship');
				var domElement = document.querySelector('#event-caraousel');
				for(var i=0;i<deptEvents.length;i++){

					domElement.appendChild(getCard(deptEvents[i]));
				}
				var slider = $('.carousel');

				if (slider.hasClass('initialized')){
						slider.removeClass('initialized')
				}

				//just reinit the carousel
				slider.carousel();
			}
		</script>
	</head>
	<body onload="initEvents()">
		<?php include 'header.php'; ?>
		<span>
		<div class="carousel" id="event-caraousel">


	    <!-- <a class="carousel-item" href="#five!"><div style="background: cyan;" class="custom-card">this is the fourth card</div></a> -->
	  </div>

		<?php
			if ($hour>=19 || $hour<=5) {
				$srcLoc = './images/eventsNight/';
			}else{
				$srcLoc = './images/events/';
			}

			$deptImg = array('entrepreneurship' => 'edc.svg',
											 'BMS dance crew' => 'dance.svg','astronomy club'=>'astronomy.svg',
										   'fashion' => 'fashion.svg','finearts' => 'finearts.svg','gaming' => 'gaming.svg',
										 	 'photography' => 'photo.svg','informal' => 'informal.svg','literary' => 'literary.svg',
										 	 'mountaineering' => 'mc.svg','ninaad' => 'music.svg','chiranthana' => 'chirantana.svg', 'western music' => 'musicWest.svg','pentagram' => 'pentagram.svg','pravrutthi' => 'pravruthi.svg',
										 	 'quiz' => 'quiz.svg','tech' => 'tech.svg','whiplash' => 'whip.svg');

		 $dept = array('edc','dance','ASTRONOMY CLUB','fashion','finearts','gaming','photography','informal','literary',
	 									'mc','music','pentagram','pravruthi','quiz','tech','whiplash');

		 ?>
		<div class="card-panel-overlay">
			<div class="custom-card-panel">
				<?php

					foreach ($deptImg as $dept => $img) {
						echo '<div class="col s12 m6 l10 custom-card" onclick="cardClick(\''.$dept.'\')" onmouseenter="showTitle(this)" onmouseleave="hideTitle(this)">
								<div class="card custom-bg darken-1 svg-card" style="background-image: url(\''.$srcLoc.$img.'\')">
									<div class="card-content">
										<span class="card-title white-text" style="font-family:ludicrous;opacity:0;font-size:27px;" >'.$dept.'</span>
										<p><br><br><br><br></p>
									</div>
								</div>
						</div>';
					}

				 ?>

			</div>
		</div>




	</body>

</html>
