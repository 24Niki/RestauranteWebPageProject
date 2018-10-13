<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Hauptspeisen</title>
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
			</div><!-- Row-->
			
			<div><!-- div 1-->
				<div class="row"> <!-- div 2-->
					<!-- Navigationsleiste vertikal-->
					<div class="col-2">
				  		<?php 
        				    include 'navbarVertikal.php';
                        ?>
					</div> <!-- col-2 -->
				
					<!-- Page Content-->
					<div class="col-10">
						<div class="container"> <!-- Container 1 -->
							<br>
							
							<!-- Überschrift der Seite -->
							<div class="row justify-content-center">
							  <img src="Bilder/hauptspeisen/hauptspeisenText.png" alt="Hauptspeisen" style="width:600px;" class="float-center">
							</div>
							
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="pizza">
							</div>
							<br>
							<br>
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/hauptspeisen/pizza.jpg" alt="Pizza" class="img-thumbnail" >
								</div>
								<div class="col-5 align-self-center">
									<img src="Bilder/hauptspeisen/pizzaText.jpg" alt="Pizza Text"  width="400" height="400">
								</div>
							</div>
							
							<!-- Anzeige aller Speisen der Kategorie -->
							<!-- Speisen werden aus der Datenbank geholt und als Liste angezeigt -->
							<?php
							    $pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'pizza'";
                                
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
								
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="pastaPfanne">
							</div>
							<br>
							<br>
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/hauptspeisen/pastaPfanne.jpg" alt="Pasta aus der Pfanne" class="img-thumbnail" width="400" height="400">
								</div>
								<div class="col-5 ">
									<img src="Bilder/hauptspeisen/pastaPfanneText.jpg" alt="Pasta aus der Pfanne Text" >
								</div>
							</div>
							
							<!-- Anzeige aller Speisen der Kategorie -->
							<!-- Speisen werden aus der Datenbank geholt und als Liste angezeigt -->
							<?php
							    $pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'pastaPfanne'";
                                
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
							
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="pastaOfen">
							</div>
							<br>
							<br>
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/hauptspeisen/pastaOfen.jpg" alt="Pasta aus dem Ofen" class="img-thumbnail" >
								</div>
								<div class="col-5 align-self-center">
									<img src="Bilder/hauptspeisen/pastaOfenText.jpg" alt="Pasta aus dem Ofen Text"  width="400" height="400">
								</div>
							</div>
							
							<!-- Anzeige aller Speisen der Kategorie -->
							<!-- Speisen werden aus der Datenbank geholt und als Liste angezeigt -->
							<?php
							    $pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'pastaOfen'";
                                
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
							
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="fleischgerichte">
							</div>
							<br>
							<br>
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/hauptspeisen/fleisch.jpg" alt="Fleisch" class="img-thumbnail" >
								</div>
								<div class="col-5 align-self-center">
									<img src="Bilder/hauptspeisen/fleischText.jpg" alt="Fleisch Text"  width="400" height="400">
								</div>
							</div>
							
							<!-- Anzeige aller Speisen der Kategorie -->
							<!-- Speisen werden aus der Datenbank geholt und als Liste angezeigt -->
							<?php
							    $pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'fleisch'";
                                
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
							
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="fischgerichte">
							</div>
							<br>
							<br>
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/hauptspeisen/fisch.jpg" alt="Fisch" class="img-thumbnail" >
								</div>
								<div class="col-5 align-self-center">
									<img src="Bilder/hauptspeisen/fischText.jpg" alt="Fisch Text"  width="400" height="400">
								</div>
							</div>
							
							<!-- Anzeige aller Speisen der Kategorie -->
							<!-- Speisen werden aus der Datenbank geholt und als Liste angezeigt -->
							<?php
							    $pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'fisch'";
                                
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
							
							
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="risotto">
							</div>
							<br>
							<br>
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/hauptspeisen/risotto.jpg" alt="Risotto" class="img-thumbnail" >
								</div>
								<div class="col-5 align-self-center">
									<img src="Bilder/hauptspeisen/risottoText.jpg" alt="Risotto Text"  width="400" height="400">
								</div>
							</div>
							
							<!-- Anzeige aller Speisen der Kategorie -->
							<!-- Speisen werden aus der Datenbank geholt und als Liste angezeigt -->
							<?php
							    $pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'risotto'";
                                
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
							
							<!-- Sprungmarke ID für Gericht -->
							<br>
							<div class="row" id="kleinerHunger">
							</div>
							<br>
							<br>
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/hauptspeisen/kleinerHunger.jpg" alt="Kleiner Hunger" class="img-thumbnail" >
								</div>
								<div class="col-5 align-self-center">
									<img src="Bilder/hauptspeisen/kleinerHungerText.jpg" alt="Kleiner Hunger Text"  width="400" height="400">
								</div>
							</div>
							
							<!-- Anzeige aller Speisen der Kategorie -->
							<!-- Speisen werden aus der Datenbank geholt und als Liste angezeigt -->
							<?php
							    $pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'kleinerHunger'";
                                
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