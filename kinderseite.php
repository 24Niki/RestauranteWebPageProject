<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Startseite</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link href="kinderseite.css" rel="stylesheet">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>

	<body  onload="Initialize();">
		<div class="container-fluid">
		
			<!-- Image on Top of the Web Page -->
			<div class="row">
				<img class="img-fluid" src="Bilder/pizza23.jpg" alt="Pizza Top Page" > 
			</div>
			
			<!-- Navigationsleiste horizontal-->
			<div class="row">
					<div class="navbar navbar-expand sticky-top navbar-collapse" id="navColor">
						<div class="col-2">
						</div>
						
						<div class="col-1">
							<a class="navbar-brand" href="index.html">
								<img src="Bilder/pizzeriaToskanaLogo.png" alt="Home" style="width:250px;" class="float-center">
							</a>
						</div>
							
						<div class="col-3">
						</div>
						
						<div class="col-4">
							<form class="form-inline " action="/action_page.php">
								<input class="form-control mr-sm-2" type="text" placeholder="Search">
								<button class="btn" type="submit">Search</button>
							</form>
						</div>
							
						<div class="col-2">
							<ul class="navbar-nav ">
								<li class="nav-item">
									<a class="nav-link" id="navBarText" href="#">Meine Bestellung</a>
								</li>
							</ul>					
						</div>		
						 
					</div><!-- Navbar-->
			</div><!-- Row-->
			
			
			<!-- Navigationsleiste vertikal-->
			
			<div><!-- div 1-->
				<div class="row"> <!-- div 2-->
					<div class="col-2">
				  
						<ul class="nav nav-pills flex-column sticky-top" id="navColor">
							<li class="nav-item">
								<a class="navbar-brand" href="index.html">
									<img src="Bilder/pizzaIcon.png" alt="Home" style="width:80px;" class="float-center">
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="wochengericht.html" id="navBarText">Wochengericht</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="vorspeisen.html"id="navBarText">Vorspeisen</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="vorspeisen.html#salat" id="navBarTextSmall">Salat</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="vorspeisen.html#suppe" id="navBarTextSmall">Suppe</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="hauptspeisen.html" id="navBarText">Hauptspeisen</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="hauptspeisen.html#pizza" id="navBarTextSmall">Pizza</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="hauptspeisen.html#pastaPfanne" id="navBarTextSmall">Pasta aus der Pfanne</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="hauptspeisen.html#pastaOfen" id="navBarTextSmall">Pasta aus dem Backofen</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="hauptspeisen.html#fleischgerichte" id="navBarTextSmall">Fleischgerichte</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="hauptspeisen.html#fischgerichte" id="navBarTextSmall">Fischgerichte</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="hauptspeisen.html#risotto" id="navBarTextSmall">Risotto</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="hauptspeisen.html#kleinerHunger" id="navBarTextSmall">Für den kleinen Hunger</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="nachspeisen.html" id="navBarText">Dessert</a>
							</li>					
							<li class="nav-item">
								<a class="nav-link disabled" href="getraenke.html" id="navBarText">Getränke</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="getraenke.html#alkoholfrei" id="navBarTextSmall">Alkoholfrei</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="getraenke.html#alkoholisch" id="navBarTextSmall">Alkoholisch</a>
							</li>
						</ul>
						
					</div> <!-- col-2 -->
				
				<!-- Page Content-->
				
				
					<div class="col-10" >
						<div class="container" id="back"> <!-- Container 1 -->
							<br>
							
							<!-- Überschrift der Seite -->
							<div class="row justify-content-center">
							  <img class="img-fluid" src="Bilder/willkommenText.png" alt="Startseite" style="width:600px;" class="float-center">
							</div>
							<div class="row">
							<div class="container">
							<div>
							<!-- SVG --> 
							
							<svg height = "100" width = "300">
							<text x = "0" y = "15" fill = "red" transform = "rotate(-30 150, 30)"> Jetzt Neu bei uns! </text>
							</svg>
							</div>
							<!-- Info: auf der Seite z.B. Bestellung
							eine Verlinkung zum Malprogramm  -->
							
							<!--  <svg height="30" width="200" xmlns:xlink="http://www.w3.org/1999/xlink">
									  <a xlink:href="https://www.google.com" target="_blank">
										<text x="0" y="15" fill="red">Zum Kindermalprogramm!</text>
									  </a>
									 </svg>  -->
								
							
							  <h2>Für unsere kleinen Gäste</h2>
							  <br>
							  <p>Gerne könnt ihr hier im Malprogramm euch kreativ austoben. Ihr habt die Wahl zwischen unterschiedlichen Farben und Strichstärken.<br>
							  Viel Spaß!</p>
							  
							   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
								<script type="text/javascript" src="JsCode.js"></script>
								<div align="center">
									<canvas id="myCanvas" width="500" height="200" style="border:2px solid black"></canvas>
									<br /><br />
									<button onclick="javascript:clearArea();return false;">Löschen</button>
									
									<!-- Auswahlmöglichkeit verschiedener Strichstärken. Aktuelle Strichstärke ist 5 -->
									Strichstärke : <select id="auswahlStrich">
										<option value="3">3</option>
										<option value="5" selected="selected">5</option>
										<option value="7">7</option>
										<option value="9" >9</option>
										<option value="11">11</option>
									</select>
									Farbe : <select id="auswahlFarbe">
										
										<!-- Auswahlmöglichkeit verschiedener Farben. Aktuelle Farbe ist blau -->
										
										<option value="blue" selected="selected">blau</option>
										<option value="red">rot</option>
										<option value="green">grün</option>
										<option value="yellow">gelb</option>
										<option value="gray">grau</option>
										<option value="black">schwarz</option>
									</select>
								</div>

							  
							</div>
							</div>
							
							<br>
							<br>
							<br>
							
							
						</div><!-- Container 1-->
					</div> <!-- Col-10 -->
					
				</div> <!-- div 2 (Row)-->
	  
			</div><!-- div 1-->
			
			<!-- Fixed footer -->
			<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
				<div class="container">
					<div class="navbar-text pull-left">
						<p>© 2018 </p>
					</div>
					<div class="navbar-text pull-right">
						<a href="#help">Hilfe</a> 
					</div>
				</div>
			</div>
			
		</div> <!-- Übergeordneter Container -->
	<script> 
	var mousePressed = false;
	var lastX, lastY;
	var dw;
	/* Funktion startet die Mausereignisse */
	function Initialize() {
		dw = document.getElementById('myCanvas').getContext("2d");

		$('#myCanvas').mousedown(function (e) {
			mousePressed = true;
			Draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, false);
		});

		$('#myCanvas').mousemove(function (e) {
			if (mousePressed) {
				Draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, true);
			}
		});

		$('#myCanvas').mouseup(function (e) {
			mousePressed = false;
		});
			$('#myCanvas').mouseleave(function (e) {
			mousePressed = false;
		});
	};
	/*Funktion zeichnet solange die Maus gedrückt wird */
	function Draw(x, y, isDown) {
		if (isDown) {
			dw.beginPath();
			dw.strokeStyle = $('#auswahlFarbe').val();
			dw.lineWidth = $('#auswahlStrich').val();
			dw.lineJoin = "round";
			dw.moveTo(lastX, lastY);
			dw.lineTo(x, y);
			dw.closePath();
			dw.stroke();
		}
		lastX = x; lastY = y;
	};
	/*Funktion ermöglicht das Löschen */	
	function clearArea() {
		dw.setTransform(1, 0, 0, 1, 0, 0);
		dw.clearRect(0, 0, dw.canvas.width, dw.canvas.height);
	};
</script>
</body>
</html>