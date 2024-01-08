let canvas = document.getElementById("can");
let ctx = canvas.getContext("2d");
ctx.beginPath();

let x = 0;
let y = 0;

ctx.moveTo(x, y);

let interval = setInterval(function () {

    if (x < canvas.width) {
        x += 10;
        y += 10;
        ctx.strokeStyle = "black";
        ctx.lineWidth = 2;
        ctx.lineTo(x, y);
        ctx.stroke();
    }
    else {
        clearInterval(interval);
        alert("Done");
    }

}, 50)