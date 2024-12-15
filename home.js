const accordionHeaders = document.querySelectorAll('.accordion-header');

accordionHeaders.forEach(header => {
    header.addEventListener('click', () => {
        // Toggle the visibility of the corresponding content section
        const content = header.nextElementSibling;
        content.classList.toggle('active');
    });
});
const canvasEl = document.querySelector('#canvas');

const w = canvasEl.width = window.innerWidth;
const h = canvasEl.height = window.innerHeight * 2;

function loop() {
  requestAnimationFrame(loop);
  ctx.clearRect(0,0,w,h);
  
  confs.forEach((conf) => {
    conf.update();
    conf.draw();
  })
}

function Confetti () {
  //construct confetti
  const colours = ['#8a0d04', '#730e5d', '#ec020c','#050589',"#026210","#084769","#920672","#c8bc03","#32046e"];
  
  this.x = Math.round(Math.random() * w);
  this.y = Math.round(Math.random() * h);
  this.rotation = Math.random()*360;

  const size = Math.random()*(w/70);
  this.size = size < 20 ? 18 : size;

  this.color = colours[Math.floor(colours.length * Math.random())];

  this.speed = this.size/7;
  
  this.opacity =0.9;

  this.shiftDirection = Math.random() > 0.5 ? 1 : -1;
}

Confetti.prototype.border = function() {
  if (this.y >= h) {
    this.y = h;
  }
}

Confetti.prototype.update = function() {
  this.y += this.speed;
  
  if (this.y <= h) {
    this.x += this.shiftDirection/4;
    this.rotation += this.shiftDirection*this.speed/150;
  }

  if (this.y > h) this.border();
};

Confetti.prototype.draw = function() {
  ctx.beginPath();
  ctx.arc(this.x, this.y, this.size  , this.rotation, this.rotation + Math.PI / 12);
  ctx.arc(this.x, this.y, this.size * 0.4, this.rotation + Math.PI / 4, this.rotation, true);
  ctx.lineTo(this.x, this.y);
  ctx.closePath();
  ctx.globalAlpha = this.opacity;
  ctx.fillStyle = this.color;
  ctx.fill();
};

const ctx = canvasEl.getContext('2d');
const confNum = Math.floor(w / 2);
const confs = new Array(confNum).fill().map(_ => new Confetti());

loop();

