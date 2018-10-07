<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Getränke</title>
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
							
							<!-- Bild mit Unterüberschrift-->
							<div class="row">
								<div class="col-5 align-self-start">
									<img src="Bilder/getraenke/alkoholfrei.jpg" alt="Alkoholfrei" class="img-thumbnail" >
								</div>
								<div class="col-5 align-self-center">
									<img src="Bilder/getraenke/alkoholfreiText.jpg" alt="Alkoholfrei Text"  width="400" height="400">
								</div>
							</div>
							
							<?php
    							$pdo = new PDO('mysql:host=localhost;dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'alkoholfrei'";
                                
                                 foreach ($pdo->query($sql) as $row) : 
                                     $neue_bestellung = array();
                                     $cookie = $_COOKIE["tischNr"];
                                     $neue_bestellung['tischid'] = $cookie;
                                     $neue_bestellung['speisenid'] = $row['id'];
                             
                                     include 'anzeigeDerSpeisen.php';
                                     
        							if(isset($_POST['bestellenButton'.$row['id']])){
            							$statement = $pdo->prepare("INSERT INTO bestellung (tischid, speisenid) VALUES (:tischid, :speisenid)");
            							$statement->execute($neue_bestellung);
            							echo '<script type="text/javascript">alert("Bestellung wurde hinzugef�gt!")</script>';
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
							
							<?php
    							$pdo = new PDO('mysql:host=localhost;dbname=restaurantdb', 'root', '');
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
            							echo '<script type="text/javascript">alert("Bestellung wurde hinzugef�gt!")</script>';
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