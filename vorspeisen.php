
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Vorspeisen</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link href="index.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>

	<body>
	
		
		<div class="container-fluid">
		
			<!-- Image on Top of the Web Page -->
			<div class="row">
				<img class="img-fluid" src="Bilder/pizza23.jpg" alt="Pizza Top Page" > 
			</div>
			
			<!-- Navigationsleiste horizontal-->
			<div class="row">
				<?php 
				    include 'navbarHorizontal.php';
				    include 'modalBHinzu.php';
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
					<div class="col-10">
						<div class="container"> <!-- Container 1 -->
							<br>
							
							<!-- �berschrift der Seite -->
							<div class="row justify-content-center">
							  <img src="Bilder/vorspeisen/vorspeisenText2.png" alt="Home" style="width:600px;" class="float-center">
							</div>
							
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="salat">
							</div>
							<br>
							<br>
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/vorspeisen/salat.jpg" alt="Salat" class="img-thumbnail" >
								</div>
								<div class="col-5 align-self-center">
									<img src="Bilder/vorspeisen/salatText.jpg" alt="Salat"  width="400" height="400">
								</div>
							</div>
							
							<?php

                            /* Verbindung zur Datenbank mittels Klasse PDO (PHP Data Objects)*/
                            $pdo = new PDO('mysql:host=localhost;dbname=restaurantdb', 'root', '');
                            
                            /* Verbindung aufgebaut -> Anfragen sind m�glich
                             // SQL-Befehl: SELECT Spalten FROM Tabelle*/
                            $sql = "SELECT name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'salat'";
                            
                            ?>
                            <?php
                            /*Senden des SQL-Befehls mit $pdo->query() an die Datenbank
                             // Jede Zeile der Tabelle wird in $row abgespeichert
                             // Durchlaufen durch das Array zur Ausgabe*/
                             foreach ($pdo->query($sql) as $row) : ?>
							
							<!-- Liste der Gerichte -->
							<div class="container"> <!-- Container 2 -->
								<br>
								<ul class="list-group">
								
									<li class="list-group-item">
										<div class="row justify-content-start">
											<h4>  <?=$row['name']?>  </h4>
										</div>
										<div class="row justify-content-start">
											<div class="col-10">
												<p><?=$row['beschreibung']?> </p>
											</div>
											<div class="col-2">
												<button data-toggle="modal" data-target="#modalBHinzu">Bestellen</button>
											</div>
										</div>
										<div class="row justify-content-start">
											<pre>  <?=$row['preis']?> Euro </pre>
										</div>
									</li>
								</ul>
							</div><!-- Container 2-->
							<?php endforeach; ?>
							
							
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="suppe">
							</div>
							<br>
							<br>
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/vorspeisen/suppe.jpg" alt="Suppe" class="img-thumbnail" width="400" height="400">
								</div>
								<div class="col-5 ">
									<img src="Bilder/vorspeisen/suppeText.jpg" alt="Suppe" >
								</div>
							</div>
							
							<?php

                            /* Verbindung zur Datenbank mittels Klasse PDO (PHP Data Objects)*/
                            $pdo = new PDO('mysql:host=localhost;dbname=restaurantdb', 'root', '');
                            
                            /* Verbindung aufgebaut -> Anfragen sind m�glich
                             // SQL-Befehl: SELECT Spalten FROM Tabelle*/
                            $sql = "SELECT name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'suppe'";
                            
                            ?>
                            <?php
                            /*Senden des SQL-Befehls mit $pdo->query() an die Datenbank
                             // Jede Zeile der Tabelle wird in $row abgespeichert
                             // Durchlaufen durch das Array zur Ausgabe*/
                             foreach ($pdo->query($sql) as $row) : ?>
							
							<!-- Liste der Gerichte -->
							<div class="container"> <!-- Container 2 -->
								<br>
								<ul class="list-group">
								
									<li class="list-group-item">
										<div class="row justify-content-start">
											<h4>  <?=$row['name']?>  </h4>
										</div>
										<div class="row justify-content-start">
											<div class="col-10">
												<p><?=$row['beschreibung']?> </p>
											</div>
											<div class="col-2">
												<button data-toggle="modal" data-target="#modalBHinzu">Bestellen</button>
											</div>
										</div>
										<div class="row justify-content-start">
											<pre>  <?=$row['preis']?> Euro </pre>
										</div>
									</li>
								</ul>
							</div><!-- Container 2-->
							<?php endforeach; ?>
							
							
						</div><!-- Container 1-->
					</div> <!-- Col-10 -->
					
				</div> <!-- div 2 (Row)-->
	  
			</div><!-- div 1-->
			
			<?php 
		       	include 'modalBHinzu.php';
			?>
			
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
		
		<!-- Java Script  -->
		<script type="text/javascript">
		
			// Weiterleitung zur Bestellungen-Seite
			function toBestellungen() {
				window.location = "bestellung.php";
			}
		</script>
	</body>
</html>