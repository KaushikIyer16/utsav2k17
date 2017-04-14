const burst1 = new mojs.Burst({
  radius:{0:300},
  count: 99,
  angle: {0:90},
  children: {
    duration: 1500,
    fill: {'rgb(220,109,90)':'rgb(95,75,140)'}
  }
});

const burst2 = new mojs.Burst({
  radius:{0:250},
  count: 99,
  angle: {0:90},
  children: {
    duration: 1500,
    fill: {'rgb(95,75,140)':'rgb(220,109,90)'}
  }
});

const burst3 = new mojs.Burst({
  radius:{0:200},
  count: 99,
  angle: {0:-90},
  children: {
    duration: 1500,
    fill: {'rgb(220,109,90)':'rgb(95,75,140)'}
  }
});

// const burst4 = new mojs.Burst({
//   radius:{0:200},
//   count: 99,
//   angle: {0:-90},
//   children: {
//     duration: 1500,
//     fill:  [ 'rgb(220,109,90)','rgb(95,75,140)' ]
//   }
// });

const meteor1 = new mojs.Burst({
  top:600,
  count:    1,
  radius:   { 0: 250 },
  degree:   0,

  children: {
    shape:        'line',
    stroke:       ['#F9DD5E', '#FC2D79', '#11CDC5'],
    duration:     400,
    radius:       60,
    strokeWidth:  8,

  }
});

const meteor2 = new mojs.Burst({
  top:600,
  left: 150,
  count:    1,
  radius:   { 0: 250 },
  degree:   -45,

  children: {
    shape:        'line',
    stroke:       ['#F9DD5E', '#FC2D79', '#11CDC5'],
    duration:     400,
    radius:       60,
    strokeWidth:  8,

  }
});

const meteor3 = new mojs.Burst({
  top:600,
  count:    1,
  radius:   { 0: 250 },
  degree:   45,

  children: {
    shape:        'line',
    stroke:       ['#F9DD5E', '#FC2D79', '#11CDC5'],
    duration:     400,
    radius:       60,
    strokeWidth:  8,

  }
});
// this is the second fireworks
const burst5 = new mojs.Burst({
  top: 300,
  radius:   { 0: 250 },
  angle:    'rand(-45,45 )',
  children: {
    shape:        'line',
    stroke:       'rgb(220,109,90)',
    fill:         'none',
    scale:        1,
    scaleX:       { 1: 0 },
    easing:       'cubic.out',
    duration:     2000
  }
});

const bubbles = new mojs.Burst({
  top: 300,
  radius:   150,
  count:    3,
  timeline: { delay: 100 },
  children: {
    stroke:       'rgb(220,109,90)',
    fill:         'none',
    scale:        1,
    strokeWidth:  { 8: 0 },
    radius:       { 0 : 'rand(6, 10)' },
    degreeShift:  'rand(-50, 50)',
    duration:     400,
    delay:        'rand(0, 250)',
  }
});

const burst6 = new mojs.Burst({

  radius:   { 0: 100 },
  count:    30,
  children: {
    shape:      'polygon',
    points:     5,
    stroke:       [ 'rgb(220,109,90)','rgb(95,75,140)' ],
    angle:      { 360: 0 },
    duration:   2000,
    delay:      'stagger( rand(0, 100) )'
  }
});
//       document.addEventListener( 'click' , (e) => {
//         meteors.replay();
//   // burst1.replay();
//   // burst2.replay();
//   // burst3.replay();
//     burst6.replay();
//     // burst5.replay();
//     // bubbles.replay();
// });

window.setInterval(function(){
  const timeline1 = new mojs.Timeline();
  timeline1.add(meteor1);
  timeline1.play();
  setTimeout(function(){const timeline2 = new mojs.Timeline();
  timeline2.add(burst1,burst2,burst3);
  timeline2.play();},400);
},2500);

window.setInterval(function(){
  const timeline1 = new mojs.Timeline();
  timeline1.add(meteor2);
  timeline1.play();
  setTimeout(function(){const timeline2 = new mojs.Timeline();
  timeline2.add(burst5,bubbles);
  timeline2.play();},400);
},2500);
