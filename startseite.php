
<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Startseite</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link href="index.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>

	<body>
	<!-- Wert des Cookies ausgeben zum Test! -->
		<?php 
          //  echo $_COOKIE["tischNr"];
        ?>
		
		<div class="container-fluid">
		
			<!-- Image on Top of the Web Page -->
			<div class="row">
				<img class="img-fluid" src="Bilder/pizza23.jpg" alt="Pizza Top Page" > 
			</div>
			
			<!-- Navigationsleiste horizontal-->
			<div class="row">
				<?php 
				    include 'navbarHorizontal.php';
                ?>	
			</div><!-- Row-->
			
			<!-- Navigationsleiste vertikal-->
			<div><!-- div 1-->
				<div class="row"> <!-- div 2-->
					<div class="col-2">
				  		<?php 
        				    include 'navbarVertikal.php';
                        ?>
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
								<p id="pStart"> Frisch schmeckt's am besten! Daher wird bei uns jede Portion Pasta einzeln frisch zubereitet.
									Unsere Pizzen bereiten wir mit hausgemachter Tomatensauce und nur mit echten Mozzarella zu. 
									Und durch den Holzofen erhalten unsere Pizzen den unvergleichbaren Geschmack - so muss Pizza schmecken!
								</p>
							</div>
							<br>
							<br>
							<br>
							<div class="row">
								<img src="Bilder/gedecktertischzwei.jpg" alt="Tisch">
							</div>
							
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
	</body>
</html>