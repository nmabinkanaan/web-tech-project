// Daniel Shiffman
// https://thecodingtrain.com/CodingChallenges/147-chrome-dinosaur.html
// https://youtu.be/l0HoJHc-63Q

// Google Chrome Dinosaur Game (Unicorn, run!)
// https://editor.p5js.org/codingtrain/sketches/v3thq2uhk

class Sylevster {
  constructor() {
   this.r = 75;
    //this.r = 500;
    this.x = width;
    this.y = height - this.r;
  }

  move() {
     this.x -= 16;
    //this.x -= 20;
  }

  show() {
    image(tImg, this.x, this.y, this.r, this.r);

    //fill(255, 50);
    // ellipseMode(CORNER);
    // ellipse(this.x, this.y, this.r, this.r);
    
    
  }
}
