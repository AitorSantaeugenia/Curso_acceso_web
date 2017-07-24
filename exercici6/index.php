<!DOCTYPE html>
<html lang="en">

	<head>
		<?php
				//$_POST = array();

				$cookie_name = "";
				$cookie_name1 = "";
				$cookie_name2 = "";
				$cookie_name3 = "";
				$cookie_name4 = "";

				$cookie1 = "";
				$cookie2 = "";
				$cookie3 = "";
				$cookie4 = "";

				$cookie_value = "";

					if(isset($_POST["button1"])){
						$cookie1=$_POST["button1"];
						$cookie_name1 = "button1";
					}
					if(isset($_POST["button2"])){
						$cookie2=$_POST["button2"];
						$cookie_name2 = "button2";
					}
					if(isset($_POST["button3"])){
						$cookie3=$_POST["button3"];
						$cookie_name3 = "button3";
					}
					if(isset($_POST["button4"])){
						$cookie4=$_POST["button4"];
						$cookie_name4 = "button4";
					}

				setcookie($cookie_name1, $cookie1, time() + (86400 * 30), "/");
				setcookie($cookie_name2, $cookie2, time() + (86400 * 30), "/");
				setcookie($cookie_name3, $cookie3, time() + (86400 * 30), "/");
				setcookie($cookie_name4, $cookie4, time() + (86400 * 30), "/");

				if(!isset($_COOKIE[$cookie_name1])) {
				     echo "Cookie named '" . $cookie_name1 . "' is not set!<br>";
				} else {
				     echo "Cookie '" . $cookie_name1 . "' is set!<br>";
				     echo "Value is: " . $_COOKIE[$cookie_name1] . "<br><br>";
				}
				if(!isset($_COOKIE[$cookie_name2])) {
						 echo "Cookie named '" . $cookie_name2 . "' is not set!<br>";
				} else {
						 echo "Cookie '" . $cookie_name2 . "' is set!<br>";
						 echo "Value is: " . $_COOKIE[$cookie_name2] . "<br><br>";;
				}
				if(!isset($_COOKIE[$cookie_name3])) {
						 echo "Cookie named '" . $cookie_name3 . "' is not set!<br>";
				} else {
						 echo "Cookie '" . $cookie_name3 . "' is set!<br>";
						 echo "Value is: " . $_COOKIE[$cookie_name3] . "<br><br>";;
				}
				if(!isset($_COOKIE[$cookie_name4])) {
						 echo "Cookie named '" . $cookie_name4 . "' is not set!<br>";
				} else {
						 echo "Cookie '" . $cookie_name4 . "' is set!<br>";
						 echo "Value is: " . $_COOKIE[$cookie_name4] . "<br><br>";
				}
;
				echo"POST:"; print_r($_POST); echo"<br/>";
				echo"COOKIE:"; print_r($_COOKIE);echo"<br/>";echo"<br/>";
				/*echo $cookie1;echo"<br/>";
				echo $cookie2;echo"<br/>";
				echo $cookie3;echo"<br/>";
				echo $cookie4;echo"<br/>";*/
	 ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
			button{
					position:absolute;
					top:500px;
					left:10px;
			}
		.button{
		  background-color: white;
		  color: black;
		  border: 2px solid #555555;
		}
		.button:hover {
    	background-color: #555555;
    	color: white;
		}
	</style>

	<script>

		$(document).ready(function(){

					    $("#button").css({
					                left:(Math.random()*1700)+"px",
					                top:(Math.random()*1000)+"px",
		  				});

							$("#button").click(function() {
									 $(this).attr('id', 'stop1');
						  });


							$("#button2").css({
												 left:(Math.random()*1700)+"px",
												 top:(Math.random()*1000)+"px",
						 });
						 $("#button2").click(function() {
									$(this).attr('id', 'stop2');
						 });


						 $("#button3").css({
												 left:(Math.random()*1700)+"px",
												 top:(Math.random()*1000)+"px",
						 });
						 $("#button3").click(function() {
									$(this).attr('id', 'stop3');
						 });


						 $("#button4").css({
												 left:(Math.random()*1700)+"px",
												 top:(Math.random()*1000)+"px",
						 });
						 $("#button4").click(function() {
									$(this).attr('id', 'stop4');
						 });
		});

		setTimeout(function(){
		   window.location.reload(1);
		}, 1000);


		/*
		$(function(){
    $("#contenidor").on({
        mouseover:function(){
            $(".button").css({
                left:(Math.random()*200)+"px",
                top:(Math.random()*200)+"px",
            });
        }
    });
})*/
	</script>



	</head>

	<body>

			<div id="contenidor" style="border:1px solid red; height:1000px;">
					<form action="index.php" method="POST">
							<button id="button<?php echo $cookie1; ?>" class="button" name="button1" value="stop1">button1</button>
							<button id="button2<?php echo $cookie2; ?>" class="button" name="button2" value="stop2">button2</button>
							<button id="button3<?php echo $cookie3; ?>" class="button" name="button3" value="stop3">button3</button>
							<button id="button4<?php echo $cookie4; ?>" class="button" name="button4" value="stop4">button4</button>
					</form>
			</div>

	</body>

</html>
<!-- services -->
