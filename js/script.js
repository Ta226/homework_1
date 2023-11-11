/*var currentdate = new Date(); 
var datetime = "Last Sync: " + currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();*/

var countDownDate = new Date("Nov 12, 2023 06:00:00").getTime();
//alert(countDownDate);
var x = setInterval(function() {
    var now = new Date().getTime();
    
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("countdown").innerHTML = days + "يوم " + hours + "ساعة " +
        minutes + "دقيقة " + seconds + "ثانية ";
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "لقد وصلت متاخر";
    }
}, 1000);
/*var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height;
var diff;
var sim;*/
const win = document.querySelector('#winner');
const loader = document.querySelector('.loader-con');
const prize = document.querySelector('.winner-pop');
var myModal = new bootstrap.Modal(document.getElementById('modal'), {
        keyboard: false
    })
    /*
    function progressSim() {
        diff = ((al / 100) * Math.PI * 2 * 10).toFixed(2);
        ctx.clearRect(0, 0, cw, ch);
        ctx.lineWidth = 17;
        ctx.fillStyle = '#7d2ae8';
        ctx.strokeStyle = "#0d5efd";
        ctx.lineCap = 'round'
        ctx.textAlign = "center";
        ctx.font = "28px monospace";
        ctx.fillText(al + '%', cw * .52, ch * .5 + 5, cw + 12);
        ctx.beginPath();
        ctx.arc(100, 100, 75, start, diff / 10 + start, false);
        //ctx.strokeStyle = "#00ffff";
        //ctx.lineWidth = 5;
        ctx.stroke();
        if (al >= 100) {
            clearTimeout(sim);
            myModal.show();
            loader.style.display = 'none';
            //prize.style.display = 'block';

        }
        al++;
    }*/
var finished = false;
win.addEventListener('click', function() {
    loader.style.display = 'block';
    const numb = document.querySelector(".numb");
    let counter = 0;
    setInterval(() => {
        clearTimeout();
        if (counter == 100) {
            clearInterval();
            if (!finished) {
                myModal.show();
                loader.style.display = 'none';
            }
            finished = true;
            prize.style.display = 'block';
            //alert('finish');
        } else {
            counter += 1;
            numb.textContent = counter + "%";
        }
    }, 80);
    //sim = setInterval(progressSim, 80);
});