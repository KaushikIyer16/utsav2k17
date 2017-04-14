// document.getElementById('slide1').style.height = window.outerHeight+"px";
// document.getElementById('slide1Image').style.width = window.outerWidth+"px";
var tween = new TimelineMax()
                             .to("#slide2", 2.75, {scale:1.2,bottom: "+=3000" ,ease: Linear.easeNone})
                             .to("#slide1",4,{scale:0.5,bottom: "-=500", ease: Linear.easeNone})
                             .to("#slide1",2.5,{opacity: 0})
                             .to("#slide2",2.5,{scale: 1,bottom: "-=5000",delay:0.5, ease: Linear.easeNone})

                             .to("#slide2",1.5,{scale:0.9,delay: 1,bottom:"-=5000",ease: Linear.easeNone})
                             ;




// build scene
var scene = new ScrollMagic.Scene({triggerElement: "#triger1", duration: 500,offset: 300})
        .setTween(tween)
        .setPin("#slide1", {pushFollowers: true})
        // .addIndicators({name:"anim 1"})
        .addTo(controller);
//
// var tween2 = TweenMax.to("#slide2",1, {scale: 0.8,bottom: "-=600", ease: Linear.easeNone});
// var tween21 = new TimelineMax().to("#slide2", 1.75, {scale: 0.8,bottom: "-=600", ease: Linear.easeNone})
//                                .to("#slide3", 1, {scale:1.2,ease: Linear.easeNone})
//                                .to("#slide3",1.5,{scale: 1,bottom: "-=1000",delay:1, ease: Linear.easeNone})
//                                .to("#slide2",1,{bottom:"-=600",opacity:0})
//                                .to("#slide3",1,{bottom:"-=3000"});
//             // .to("#slide1",0.1,{opacity:0})
//
// var scene2 = new ScrollMagic.Scene({triggerElement: "#triger2",duration: 490,offset: -300})
//         .setTween(tween21)
//         .setPin("#slide2",{pushFollowers: false})
//         .addIndicators({name: "anim 2"})
//         .addTo(controller);


  var countDownDate = new Date("Mar 31, 2017 00:00:00").getTime();

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
    document.querySelector('.countdown-timer p').innerHTML = days + "d:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + hours + "h:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
    + minutes + "m:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "";
    }
  }, 1000);
