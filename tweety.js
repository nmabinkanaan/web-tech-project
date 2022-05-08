// Daniel Shiffman
// https://thecodingtrain.com/CodingChallenges/147-chrome-dinosaur.html
// https://youtu.be/l0HoJHc-63Q

// Google Chrome Dinosaur Game (Unicorn, run!)
// https://editor.p5js.org/codingtrain/sketches/v3thq2uhk

class Tweety {
  constructor() {
   this.r = 100;
   // this.r = 150;
     this.x = 50;
    //this.x = 70;
    this.y = height - this.r;
    this.vy = 0;
    this.gravity = 3;
  }

  jump() {
    if (this.y == height - this.r) {
     this.vy = -35;
      //this.vy = -50;
    }
  }

  hits(sylevster) {    
    let x1 = this.x + this.r * 0.5;
    let y1 = this.y + this.r * 0.5;
    let x2 = sylevster.x + sylevster.r * 0.5;
    let y2 = sylevster.y + sylevster.r * 0.5;
    return collideCircleCircle(x1, y1, this.r, x2, y2, sylevster.r);
  }

  move() {
    this.y += this.vy;
    this.vy += this.gravity;
    this.y = constrain(this.y, 0, height - this.r);
  }

  show() {
    image(uImg, this.x, this.y, this.r, this.r);
    // fill(255, 50);
    // ellipseMode(CORNER);
    // ellipse(this.x, this.y, this.r, this.r);
  }
}
