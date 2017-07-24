<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
canvas {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
		padding-left: 0;
    padding-right: 0;
    margin-left: auto;
    margin-right: auto;
    display: block;
		margin-top:5%;
}
h3{
	text-align:center;
	position:absolute;
	left:47%;
  top:2%;
}
h4{
	text-align:center;

}

</style>
</head>
<body onload="startGame()">
<h3>Flappy bird</h3><br/>
<!-- INICIO SCRIPT -->
<script>
   			var myGamePiece;
				var myObstacles = [];
				var myScore;

				function startGame() {
						//(30, 30, "smiley.gif", 10, 120, "image");
						myGamePiece = new component(30, 30, "img/flappybird.png", 10, 120, "image");
				    //myGamePiece = new component(30, 30, "red", 10, 120);
				    myGamePiece.gravity = 0.05;
				    myScore = new component("30px", "Consolas", "black", 280, 40, "text");
				    myGameArea.start();
				}

				var myGameArea = {
				    canvas : document.createElement("canvas"),
				    start : function() {
				        this.canvas.width = 480;
				        this.canvas.height = 270;
				        this.context = this.canvas.getContext("2d");
				        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
				        this.frameNo = 0;
				        this.interval = setInterval(updateGameArea, 20);
				        },
				    clear : function() {
				        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
				    }
				}

				function component(width, height, color, x, y, type) {
					  this.type = type;
						this.score = 0;
					  if (type == "image") {
					    this.image = new Image();
					    this.image.src = color;
							//alert(this.image.src);
					  }
						if (type == "text") {
							this.color = color;
							//alert(this.image.src);
						}
						//alert(color);
					  this.width = width;
					  this.height = height;
					  this.speedX = 0;
					  this.speedY = 0;
					  this.x = x;
					  this.y = y;
						this.gravity = 0;
    				this.gravitySpeed = 0;


					  this.update = function() {
					    ctx = myGameArea.context;
					    if (type == "image") {
					      ctx.drawImage(this.image, this.x, this.y, this.width, this.height);
					    } else if(type == "text"){
								ctx.font = this.width + " " + this.height;
								ctx.fillStyle = color;
								ctx.fillText(this.text, this.x, this.y);
					    }else{
								ctx.fillStyle = color;
							 ctx.fillRect(this.x, this.y, this.width, this.height);
							}

					  }


				    this.newPos = function() {
				        this.gravitySpeed += this.gravity;
				        this.x += this.speedX;
				        this.y += this.speedY + this.gravitySpeed;
				        this.hitBottom();
				    }

				    this.hitBottom = function() {
				        var rockbottom = myGameArea.canvas.height - this.height;
				        if (this.y > rockbottom) {
				            this.y = rockbottom;
				            this.gravitySpeed = 0;
				        }
				    }

				    this.crashWith = function(otherobj) {
				        var myleft = this.x;
				        var myright = this.x + (this.width);
				        var mytop = this.y;
				        var mybottom = this.y + (this.height);
				        var otherleft = otherobj.x;
				        var otherright = otherobj.x + (otherobj.width);
				        var othertop = otherobj.y;
				        var otherbottom = otherobj.y + (otherobj.height);
				        var crash = true;
				        if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
				            crash = false;
				        }
				        return crash;
				    }
				}

				function updateGameArea() {
				    var x, height, gap, minHeight, maxHeight, minGap, maxGap;
				    for (i = 0; i < myObstacles.length; i += 1) {
				        if (myGamePiece.crashWith(myObstacles[i])) {
				            return;
				        }
				    }
				    myGameArea.clear();
				    myGameArea.frameNo += 1;
				    if (myGameArea.frameNo == 1 || everyinterval(150)) {
				        x = myGameArea.canvas.width;
				        minHeight = 20;
				        maxHeight = 200;
				        height = Math.floor(Math.random()*(maxHeight-minHeight+1)+minHeight);
				        minGap = 50;
				        maxGap = 200;
				        gap = Math.floor(Math.random()*(maxGap-minGap+1)+minGap);
                //myGamePiece = new component(30, 30, "img/flappybird.png", 10, 120, "image");
				        myObstacles.push(new component(10, height, "img/tube2.png", x, 0, "image"));
				        myObstacles.push(new component(10, x - height - gap, "img/tube.png", x, height + gap, "image"));
				    }
				    for (i = 0; i < myObstacles.length; i += 1) {
				        myObstacles[i].x += -1;
				        myObstacles[i].update();
				    }
				    myScore.text="SCORE: " + myGameArea.frameNo;
				    myScore.update();
				    myGamePiece.newPos();
				    myGamePiece.update();
				}

				function everyinterval(n) {
				    if ((myGameArea.frameNo / n) % 1 == 0) {return true;}
				    return false;
				}

				function accelerate(n) {
						myGamePiece.gravity = n;

				}

				document.onkeydown = checkKeyUp;
				document.onkeyup = checkKeyDown;

				function checkKeyUp(e) {
				    var event = window.event ? window.event : e;
            var keyCode = e.keyCode;
				    if(keyCode == 32){
								accelerate(-0.2);
						}
				}

				function checkKeyDown(e) {
						var event = window.event ? window.event : e;
            var keyCode = e.keyCode;
						if(keyCode == 32){
								accelerate(0.05);
						}
				}
</script>
<!-- INICIO SCRIPT -->

<br>
<h4>Use spacebar to play!</h4>
</body>
</html>
