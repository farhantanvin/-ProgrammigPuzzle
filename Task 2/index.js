const square = document.getElementById("square");
let x = 0;
let y = 50;
let xDirection = 1;
let yDirection = 1;

const animateSquare = () => {
  x += 10 * xDirection;
  y += 10 * yDirection;

  if (x + 100 > window.innerWidth || x < 0) {
    xDirection *= -1;
  }
  if (y + 100 > window.innerHeight || y < 0) {
    yDirection *= -1;
  }

  square.style.left = x + "px";
  square.style.top = y + "px";

  requestAnimationFrame(animateSquare);
}

animateSquare();