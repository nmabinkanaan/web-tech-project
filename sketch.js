
let tweety;
let uImg;
let tImg;
let bImg;
let sylevsters = [];
// let soundClassifier;

 function preload() {
  const options = {
     probabilityThreshold: 0.95
   };
  // soundClassifier = ml5.soundClassifier('SpeechCommands18w', options);
  uImg = loadImage('tweety1.PNG');
  tImg = loadImage('sylevster.png');
  bImg = loadImage('background1.jpg');
}

function mousePressed() {
  sylevsters.push(new Sylevster());
}

function setup() {
  // createCanvas(900, 400);
  createCanvas(1290, 600);
  tweety = new Tweety();
  // soundClassifier.classify(gotCommand);
}

// function gotCommand(error, results) {
//   if (error) {
//     console.error(error);
//   }
//   console.log(results[0].label, results[0].confidence);
//   // if (results[0].label == 'up') {    
//   //   tweety.jump();
//   // }
// }

function keyPressed() {
  if (key == ' ') {
    tweety.jump();
  }
}

function draw() {
  let b = false;

  if (random(1) < 0.005) {
    sylevsters.push(new Sylevster());
  }

  background(bImg);

  
  for (let t of sylevsters) {
    t.move();
    t.show();
    
    if (tweety.hits(t)) {      
      console.log('game over');
      b= true;
      noLoop();
    }
  }

  tweety.show();

  tweety.move();

  if (b){
    $("#result").replaceWith("<p>current result scores : "+sylevsters.length +"</p>");
    $.ajax({
      url: "saveScore.php",    
      type: "POST",      
      data: {
          "score": sylevsters.length,
          "action": "save"
      },
      success: function(response) {                              
        var data = JSON.parse(JSON.stringify(response));                
        if (data == "not found session") {
            var url = "login.php";
            window.location.assign(url);
        } else {
            //alert(data);                      
            $("#resultMaxScore").replaceWith("<p>Maximum result of all the playres is: "+ data +"</p>");
        }       
      }
    });
  }
}
