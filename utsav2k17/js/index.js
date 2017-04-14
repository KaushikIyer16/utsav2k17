var tween=(new TimelineMax).to("#slide2",2.75,{scale:1.2,bottom:"+=3000",ease:Linear.easeNone}).to("#slide1",4,{scale:.5,bottom:"-=500",ease:Linear.easeNone}).to("#slide1",2.5,{opacity:0}).to("#slide2",2.5,{scale:1,bottom:"-=5000",delay:.5,ease:Linear.easeNone}).to("#slide2",1.5,{scale:.9,delay:1,bottom:"-=5000",ease:Linear.easeNone}),scene=new ScrollMagic.Scene({triggerElement:"#triger1",duration:940,offset:350}).setTween(tween).setPin("#slide1",{pushFollowers:!0}).addTo(controller);
var countDownDate = new Date("Mar 30, 2017 021:02:00").getTime();

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
      document.querySelector(".countdown-timer p").innerHTML = "#festivaloffaith";
    }
  }, 1000);
