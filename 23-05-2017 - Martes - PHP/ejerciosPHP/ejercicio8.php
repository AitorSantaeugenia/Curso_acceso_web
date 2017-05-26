<!DOCTYPE html5>
<html>
    <head>
	</head>
	<style>
					/* ------------------------------ FOOTER ------------------------------- */
			.footer{
				width:100%;
				height:100%;
				border:1px solid transparent;
				-webkit-flex-direction: column;
				 -webkit-flex-wrap: wrap;
				 font-family:"Courier New", Courier, monospace;
				 
			}
			
			.text_footer_div{
				float:left;
				border:1px solid transparent;
				width:100%;
				background-color: #afefa5;
			}
			
			.text_footer_div_contenido {
				float:left;
				border:1px solid transparent;
				width:100%;
				background-color: #afefa5;
			}
			
			.text_footer{
				font-family:"Courier New", Courier, monospace;
				color:black;
				margin-left:1.3%;
				text-align:center;
				float:left;
				border:1px solid transparent;
				margin-top:2%;
				margin-left:20%;
				
			}
			
			.text_footer2{
				font-family:"Courier New", Courier, monospace;
				color:black;
				border:1px solid transparent;
				margin-left:20%;
				text-align:center;
				float:left;
				border-left:1px solid green;
				width:30%;
				
				
			}
			
			.text_footer3{
				font-family:"Courier New", Courier, monospace;
				color:transparent;
				margin-left:1.3%;

			}
			
			.lp_footer{
				border:1px solid transparent;
				width:100%;
				float:left;
				background-color: #434444;
			}
			
			.lp_footer a{
				text-decoration:none;
				color:white;
			}
			
			.lp_footer a:hover{
				text-decoration:none;
				color:#afefa5;;
			}
			
			.testing_raton{
				margin-left:17%;
				float:left;
				
			}
			.testing_raton img:first-child{
				margin-left:10%;
			}
			/* ------------------------------ FOOTER ------------------------------- */
			
			/* ------------------------------- CONTENIDO --------------------------- */
			.latest_projects2_contenido{
				 border:1px solid transparent;
				 flex:2;
				 -webkit-flex-direction: column;
				 display: flex;
				 -webkit-flex-wrap: wrap;
				 float:left;
				 height:100%;
			}
			
			.latest_projects2_contenido_2_column{
				 border:1px solid transparent;
				 flex:2;
				 -webkit-flex-direction: column;
				 display: flex;
				 -webkit-flex-wrap: wrap;
				 float:left;
				 height:100%;
			}
	</style>
	<body>
		<h1 style="text-align:Center"> Exercici#8 Función enlaces footer y imagenes</h1><br/>
          <?php	
			function miParrafo(){
				echo "<div class=\"footer\">
					<!-- SOCIALISE -->
					<div class=\"lp_footer\">
						<br/>
						<div class=\"centraos_hostia\">
								<!-- ICONO LINKEDIN -->
								<div class=\"testing_raton\">
									<a href=\"#\"><img src=\"img/icons/linkedin.png\" onmouseover=\"this.src='img/icons/linkedin_hower.png'\" onmouseout=\"this.src='img/icons/linkedin.png'\" alt=\"Linkedin\" width=\"50px\" height=\"50px\";>
									<p>Linkedin</p> </img> </a><br/>
								</div>
								
								<!-- ICONO LINKEDIN -->
								<div class=\"testing_raton\">
									<a href=\"#\"><img id=\"twitter_ico\" src=\"img/icons/twitter.png\" onmouseover=\"this.src='img/icons/twitter_hower.png'\" onmouseout=\"this.src='img/icons/twitter.png'\" alt=\"Twitter\" width=\"50px\" height=\"50px\";> 
									<p>Twitter</p> </img> </a><br/>
								</div>	
								
								<div class=\"testing_raton\">
									<!-- ICONO LINKEDIN -->
									<a href=\"#\"><img id=\"pinterest_ico\" src=\"img/icons/pinterest.png\" onmouseover=\"this.src='img/icons/pinterest_hower.png'\" onmouseout=\"this.src='img/icons/pinterest.png'\" alt=\"Pinterest\" width=\"50px\" height=\"50px\";> 
									<p>Pinterest</p> </img> </a><br/>
								</div>
								
								<div class=\"testing_raton\">	
									<!-- ICONO LINKEDIN -->
									<a href=\"#\"><img id=\"rssfeed_ico\" src=\"img/icons/rss.png\" onmouseover=\"this.src='img/icons/rss_hower.png'\" onmouseout=\"this.src='img/icons/rss.png'\" alt=\"RSS Feed\" width=\"50px\" height=\"50px\";> 
									<p>RSS Feed</p> </img> </a><br/>
								</div>	
						</div>
							
					</div>
					
					<div class=\"text_footer_div\">
							<p class=\"text_footer\">Copyright @ 2013 www.comidasana.com - All Rights Reserved</p>
							<p class=\"text_footer2\"> 21, Alaior, La Trotxa <br/>
							+971 35 25 98 | 698 569 325<br/>
							support@comidasana.com
							
							
							
							</p>
					</div> 
					
					
				</div>";
			}
			
			
			 echo miParrafo();
		
			?>
			
			 
			
			
			
			
		  
		  
        
	</body>
	

</html>