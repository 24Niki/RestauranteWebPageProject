<!DOCTYPE html>

<html lang="de">
	<head>
		<title>Startseite</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link href="css/kontakt.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>

	<body>
	
		<div class="container-fluid">
		
			<!-- Image on Top of the Web Page -->
			<div class="row">
				<img id="img" class="img-fluid" src="Bilder/pizza23.jpg" alt="Pizza Top Page" > 
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
							<div class="row"><p></p></div>
							<div class="row"><p></p></div>
							<div class="row">
								<div class="col-5"></div>
								<p></p>
								<h3>Kontakt</h3>
								<br><br>
							</div>
							<div class="row"><p></p></div>
							<div class="row">
								<div class="col-3"></div>
								<div class="col-6">
								
									<!-- Aufruf der vom Server generierten Grafik -->
    								<img src="visitenkarte.php">
    							</div>
							</div>
							<div class="row"><p></p></div>
							<div class="row">
    								<img src="Bilder/restaurantvA.jpg">
							</div>
							
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