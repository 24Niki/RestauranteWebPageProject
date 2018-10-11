<!DOCTYPE html>
<html lang="en">
<head>
<title>Startseite</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="kinderseite.css" rel="stylesheet">

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body onload="Initialize();">
	<div class="container-fluid">

		<!-- Image on Top of the Web Page -->
		<div class="row">
			<img class="img-fluid" src="Bilder/pizza23.jpg" alt="Pizza Top Page">
		</div>

		<!-- Navigationsleiste horizontal-->
		<div class="row">
				<?php
    include 'navbarHorizontal.php';
    ?>	
			</div>
		<!-- Row-->

		<!-- Navigationsleiste vertikal-->
		<div>
			<!-- div 1-->
			<div class="row">
				<!-- div 2-->
				<div class="col-2">
				  		<?php
        include 'navbarVertikal.php';
        ?>
					</div>
				<!-- col-2 -->

				<!-- Page Content-->


				<div class="col-10">
					<div class="container" id="back">
						<!-- Container 1 -->
						<br>

						<!-- Überschrift der Seite -->
						<div class="row justify-content-center">
							<img class="img-fluid" src="Bilder/willkommenText.png"
								alt="Startseite" style="width: 600px;" class="float-center">
						</div>
						<div class="row">
							<div class="container">
								<div>
									<!-- SVG -->

									<svg height="100" width="300">
							<text x="0" y="15" fill="red" transform="rotate(-30 150, 30)"> Jetzt Neu bei uns! </text>
							</svg>
								</div>
								<!-- Info: auf der Seite z.B. Bestellung
							eine Verlinkung zum Malprogramm  -->




								<h2>Für unsere kleinen Gäste</h2>
								<br>
								<h3>
									Gerne könnt ihr hier im Malprogramm euch kreativ austoben. Ihr
									habt die Wahl zwischen unterschiedlichen Farben und
									Strichstärken.
									<p>Viel Spaß!</p>
								</h3>

								<script
									src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"
									type="text/javascript"></script>
								<script type="text/javascript" src="JsCode.js"></script>
								<div align="center">
									<canvas id="myCanvas" width="500" height="200"
										style="border: 2px solid black"></canvas>
									<br />
									<br />
									<button onclick="javascript:clearArea();return false;">Löschen</button>

									<!-- Auswahlmöglichkeit verschiedener Strichstärken. Aktuelle Strichstärke ist 5 -->
									Strichstärke : <select id="auswahlStrich">
										<option value="3">3</option>
										<option value="5" selected="selected">5</option>
										<option value="7">7</option>
										<option value="9">9</option>
										<option value="11">11</option>
									</select> Farbe : <select id="auswahlFarbe">

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

						<br> <br> <br>


					</div>
					<!-- Container 1-->
				</div>
				<!-- Col-10 -->

			</div>
			<!-- div 2 (Row)-->

		</div>
		<!-- div 1-->

		<!-- Fixed footer -->
		<div class="navbar navbar-inverse navbar-fixed-bottom"
			role="navigation">
			<div class="container">
				<div class="navbar-text pull-left">
					<p>© 2018</p>
				</div>
				<div class="navbar-text pull-right">
					<a href="#help">Hilfe</a>
				</div>
			</div>
		</div>

	</div>
	<!-- Übergeordneter Container -->
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