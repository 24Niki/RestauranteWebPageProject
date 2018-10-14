<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Getränke</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link href="css/speisen.css" rel="stylesheet">
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
                ?>	
			</div><!-- End Row-->
			
			<div><!-- div 1-->
				<div class="row"> <!-- div 2-->
				
				    <!-- Navigationsleiste vertikal-->
					<div class="col-2">
				  		<?php 
        				    include 'navbarVertikal.php';
                        ?>
					</div> <!-- End col-2 -->
				
				    <!-- Page Content-->
					<div class="col-10">
						<div class="container"> <!-- Container 1 -->
							<br>
							
							<!-- Überschrift der Seite -->
							<div class="row justify-content-center">
							  <img src="Bilder/getraenke/getraenkeText.png" alt="Getränke" style="width:600px;" class="float-center">
							</div>
							
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="alkoholfrei">
							</div>
							<br>
							<br>
							
							<!-- Bild der Speisenkategorie mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/getraenke/alkoholfrei.jpg" alt="Alkoholfrei" class="img-thumbnail" >
								</div>
								<div class="col-5 align-self-center">
									<img src="Bilder/getraenke/alkoholfreiText.jpg" alt="Alkoholfrei Text"  width="400" height="400">
								</div>
							</div>
							
							<!-- Anzeige aller Speisen den Kategorie -->
							<!-- Speisen werden aus der Datenbank geholt und als Liste angezeigt -->
							<?php
							    // Aufbau der Verbindung zur Datenbank
							    $pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
							    
							    // Definition der SQL-Abfrage
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'alkoholfrei'";
                                
                                 foreach ($pdo->query($sql) as $row) : 
                                     $neue_bestellung = array();
                                     $cookie = $_COOKIE["tischNr"];
                                     $neue_bestellung['tischid'] = $cookie;
                                     $neue_bestellung['speisenid'] = $row['id'];
                             
                                     //Ausgabe der Speisen als Liste
                                     include 'anzeigeDerSpeisen.php';
                                     
                                     // Falls auf den Button "Bestellen" geklickt wird
                                     // Neue Bestellung für die ausgewählte Speise wird in die Datenbank eingefügt
        							if(isset($_POST['bestellenButton'.$row['id']])){
            							$statement = $pdo->prepare("INSERT INTO bestellung (tischid, speisenid) VALUES (:tischid, :speisenid)");
            							$statement->execute($neue_bestellung);
            							
            							// Ausgabe an Nutzer, dass Bestellung hinzugefügt wurde
            							// Kann nun unter "Meine Bestellungen" gesehen werden
            							echo '<script type="text/javascript">alert("Bestellung wurde hinzugefügt!")</script>';
            					    }
        					    endforeach; 
        					 ?>
								
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="alkoholisch">
							</div>
							<br>
							<br>
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/getraenke/alkoholisch.jpg" alt="Alkoholisch" class="img-thumbnail" width="400" height="400">
								</div>
								<div class="col-5 ">
									<img src="Bilder/getraenke/alkoholischText.jpg" alt="Alkoholisch Text" >
								</div>
							</div>
							
							<!-- Anzeige aller Speisen den Kategorie -->
							<!-- Speisen werden aus der Datenbank geholt und als Liste angezeigt -->
							<?php
						    	$pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'alkoholisch'";
                                
                                 foreach ($pdo->query($sql) as $row) : 
                                     $neue_bestellung = array();
                                     $cookie = $_COOKIE["tischNr"];
                                     $neue_bestellung['tischid'] = $cookie;
                                     $neue_bestellung['speisenid'] = $row['id'];
                             
                                     include 'anzeigeDerSpeisen.php';
                                     
        							if(isset($_POST['bestellenButton'.$row['id']])){
            							$statement = $pdo->prepare("INSERT INTO bestellung (tischid, speisenid) VALUES (:tischid, :speisenid)");
            							$statement->execute($neue_bestellung);
            							echo '<script type="text/javascript">alert("Bestellung wurde hinzugefügt!")</script>';
            					    }
        					    endforeach; 
        					 ?>
							
						</div><!-- Container 1-->
					</div> <!-- Col-10 -->
					
				</div> <!-- div 2 (Row)-->
	  
			</div><!-- div 1-->
			
			<!-- Fixed footer -->
			<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
				<?php include 'footer.php'?>
			</div>
			
		</div> <!-- Übergeordneter Container -->
	</body>
</html>