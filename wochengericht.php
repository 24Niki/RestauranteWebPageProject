<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Wochengericht</title>
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
							
							<!-- Ãœberschrift der Seite -->
							<div class="row justify-content-center">
							  <img src="Bilder/wochengericht/wochengerichtText.png" alt="Wochengericht" style="width:600px;" class="float-center">
							</div>
							
							
							<?php
							    $pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
                                $sql = "SELECT id, name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'wochengerichte'";
                                
                                 foreach ($pdo->query($sql) as $row) : 
                                     $neue_bestellung = array();
                                     $cookie = $_COOKIE["tischNr"];
                                     $neue_bestellung['tischid'] = $cookie;
                                     $neue_bestellung['speisenid'] = $row['id'];
                             ?>
                                     <!-- Liste der Gerichte -->
                                     <div class="container"> <!-- Container 2 -->
                                     <br>
                                     <ul class="list-group">
                                     
                                     <li class="list-group-item">
                                     <div class="row justify-content-start">
                                     <h4>  <?=$row['name']?> </h4>
        										</div>
        										<div class="row justify-content-start">
        											<div class="col-10">
        												<p><?=$row['beschreibung']?> </p>
        											</div>
        											<div class="col-2">
        												<form method="post" action="">
        													<button name=<?="bestellenButton".$row['id'] ?>>Bestellen</button>
        												</form>
        											</div>
        										</div>
        										<div class="row justify-content-start">
        											<pre >  <?=$row['preis']?> Euro </pre>
        										</div>
        									</li>
        								</ul>
        							</div><!-- Container 2-->
							
                               <?php       
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
	</body>
</html>
