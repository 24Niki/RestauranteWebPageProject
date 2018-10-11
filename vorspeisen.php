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
							
							<!-- überschrift der Seite -->
							<div class="row justify-content-center">
							  <img src="Bilder/vorspeisen/vorspeisenText2.png" alt="Home" style="width:600px;" class="float-center">
							</div>
							
							<!-- Sprungmarke ID fÃ¼r Gericht -->
							<br>
							<div class="row" id="salat">
							</div>
							<br>
							<br>
							
							<!-- Bild mit UnterÃ¼berschrift-->
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
                            
                            /* Verbindung aufgebaut -> Anfragen sind möglich
                             // SQL-Befehl: SELECT Spalten FROM Tabelle*/
                            $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'salat'";
                            
                            /*Senden des SQL-Befehls mit $pdo->query() an die Datenbank
                             // Jede Zeile der Tabelle wird in $row abgespeichert
                             // Durchlaufen durch das Array zur Ausgabe*/
                             foreach ($pdo->query($sql) as $row) : 
                             $neue_bestellung = array();
                             // echo $_COOKIE["tischNr"];
                             $cookie = $_COOKIE["tischNr"];
                             $neue_bestellung['tischid'] = $cookie;
                             $neue_bestellung['speisenid'] = $row['id'];
                            
                             // Anzeigen der Speisen 
                             include 'anzeigeDerSpeisen.php';
                             
							 if(isset($_POST['bestellenButton'.$row['id']])){
    							    $statement = $pdo->prepare("INSERT INTO bestellung (tischid, speisenid) VALUES (:tischid, :speisenid)");
    							    $statement->execute($neue_bestellung);
    							    echo '<script type="text/javascript">alert("Bestellung wurde hinzugefügt!")</script>';
    							}
                             
    						endforeach; 
    						
    						?>
							
							
							<!-- Sprungmarke ID fÃ¼r Gericht -->
							<br>
							<div class="row" id="suppe">
							</div>
							<br>
							<br>
							
							<!-- Bild mit UnterÃ¼berschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/vorspeisen/suppe.jpg" alt="Suppe" class="img-thumbnail" width="400" height="400">
								</div>
								<div class="col-5 ">
									<img src="Bilder/vorspeisen/suppeText.jpg" alt="Suppe" >
								</div>
							</div>
							
							<?php
    							$pdo = new PDO('mysql:host=localhost;dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'suppe'";
                                
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
				<div class="container">
					<div class="navbar-text pull-left">
						<p>Â© 2018 </p>
					</div>
					<div class="navbar-text pull-right">
						<a href="#help">Hilfe</a> 
					</div>
				</div>
			</div>
			
		</div> <!-- Ãœbergeordneter Container -->
		
		<!-- Java Script  -->
		<script type="text/javascript">
		
			// Weiterleitung zur Bestellungen-Seite
			function toBestellungen() {
				window.location = "bestellung.php";
			}

			
			
		</script>
	</body>
</html>