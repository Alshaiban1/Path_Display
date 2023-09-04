<?php
include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <title>Path</title>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous">
    </script>
</head>

<body>
  <div class="canvas-container" style="text-align:center;">
    <canvas width="900" height="600" id="Canvas" style="border:2px solid #000000;"></canvas>
  </div>

  <!-- Buttons to control the animation loop -->
  <div style="text-align:center;">
    <button id="north">Forward</button>
    <button id="east">Right</button>
    <button id="west">Left</button>
  </div>

  <script>

    let canvas = $("#Canvas");
    let context = canvas.get(0).getContext("2d");
    context.fillStyle = "black";
    var absDirection = "north";
    var xend = 450;
    var yend = 300;
    var arrowLength = 50;


    let northButton = $("#north");
    let westButton = $("#west");
    let eastButton = $("#east");

    northButton.click(function () {
      drawArrow(xend, yend, arrowLength, "forward");
    })

    eastButton.click(function () {
      drawArrow(xend, yend, arrowLength, "right");
    })

    westButton.click(function () {
      drawArrow(xend, yend, arrowLength, "left");
    })


    function drawArrow($startx, $starty, $distance, $direction) {
      var value = {};
      value.direc = $direction;
      value.dist = 1;

      //ajax code to excute the transfer to php file using the POST method
      $.ajax({
        url: "transfer.php",
        method: "post",
        data: value,
        //display on the console if we are connected
        success: function (res) {
          console.log(value);
        }
      })
      console.log("absolute direction =" + absDirection);
      console.log("relative direction =" + $direction);



      context.moveTo($startx, $starty);
      var xmod, ymod = 0;



      if ($direction == "forward") {
        switch (absDirection) {
          case "north":
            xmod = 0;
            ymod = -1;
            break;
          case "east":
            xmod = 1;
            ymod = 0;
            break;
          case "west":
            xmod = -1;
            ymod = 0;
            break;
          case "south":
            xmod = 0;
            ymod = 1;
            break;
          default:
            console.log("Default switch reached");
            break;
        }
      }

      if ($direction == "right") {
        switch (absDirection) {
          case "north":
            xmod = 1;
            ymod = 0;
            absDirection = "east";
            break;
          case "east":
            xmod = 0;
            ymod = 1;
            absDirection = "south";
            break;
          case "west":
            xmod = 0;
            ymod = -1;
            absDirection = "north";
            break;
          case "south":
            xmod = -1;
            ymod = 0;
            absDirection = "west";
            break;
          default:
            console.log("Default switch reached");
            break;
        }
      }

      if ($direction == "left") {
        switch (absDirection) {
          case "north":
            xmod = -1;
            ymod = 0;
            absDirection = "west";
            break;
          case "east":
            ymod = -1;
            xmod = 0;
            absDirection = "north";
            break;
          case "west":
            ymod = 1;
            xmod = 0;
            absDirection = "south";
            break;
          case "south":
            xmod = 1;
            ymod = 0;
            absDirection = "east";
            break;
          default:
            console.log("Default switch case")
            break;
        }
      }
      xend = $startx + ($distance * xmod);
      yend = $starty + ($distance * ymod);
      context.lineTo(xend, yend);
      context.stroke();
      drawArrowHead(xend, yend);
    }

    function drawArrowHead($startx, $starty) {
      context.moveTo($startx, $starty);

      context.beginPath();
      context.arc($startx, $starty, arrowLength * 0.05, 0, 2 * Math.PI);
      context.fill();
    }
  </script>
</html>