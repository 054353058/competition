
let win = document.getElementById('winner');
let msg = document.querySelectorAll(".msg");
let sim;

msg.forEach(element => {
    setTimeout(() => {
        element.style.display = 'none';
    }, 5000)
});



var countDownDate = new Date("Sep 26, 2023 15:25:25").getTime();


let x = setInterval(function() {

 
  let now = new Date().getTime();


  
  let distance = countDownDate - now;


  let days = Math.floor(distance / (1000 * 60 * 60 * 24))
  let hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60))
  let minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60))
  let seconds = Math.floor(distance % (1000 * 60 ) / 1000)


 
  document.getElementById("demo").innerHTML = days + " أيام " + hours + " ساعات "
  + minutes + " دقيقة " + seconds + " ثواني ";

 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "لقد وصلت متأخراً 😕";
    win.style.display = 'inline-block';
  }
}, 1000);


 

document.querySelector('.btn-close').addEventListener("click", () => {
    location.reload()
})




var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
function progressSim(){

	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 17;
	ctx.fillStyle = '#4285f4';
	ctx.strokeStyle = "#4285f4";
	ctx.textAlign = "center";
	ctx.font="28px monospace";
	ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
	ctx.beginPath();
	ctx.arc(100, 100, 75, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 100){
		clearTimeout(sim);
    myModal.show()
    loader.style.display = 'none';
	}

	al++;

}





let loader = document.getElementById('loader-con');

const myModal = new bootstrap.Modal(document.getElementById('myModal'), {
  keyboard: false

})

win.addEventListener("click", () => {
  loader.style.display = 'block';
  sim = setInterval(progressSim, 50);
})



