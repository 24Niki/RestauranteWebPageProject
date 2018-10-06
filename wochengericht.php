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
							  <img src="Bilder/wochengericht/wochengerichtText.png" alt="Wochengericht" style="width:600px;" class="float-center">
							</div>
							
							
							<!-- Liste der Gerichte -->
							<div class="container"> <!-- Container 2 -->
								<br>
								<ul class="list-group">
								
									<li class="list-group-item">
										<div class="row justify-content-start">
											<h4>Pizza Margherita</h4>
										</div>
										<div class="row justify-content-start">
											<div class="col-10">
												<p>mit Tomaten und Käse</p>
											</div>
											<div class="col-2">
												<button>Bestellen</button>
											</div>
										</div>
									</li>
									
									<li class="list-group-item">
										<div class="row justify-content-start">
											<h4>Pizza Tonno</h4>
										</div>
										<div class="row justify-content-start">
											<div class="col-10">
												<p>mit Thunfisch, Oliven und Zwiebeln</p>
											</div>
											<div class="col-2">
												<button>Bestellen</button>
											</div>
										</div>
									</li>
									
									<li class="list-group-item">
										<div class="row justify-content-start">
											<h4>Pizza Salami</h4>
										</div>
										<div class="row justify-content-start">
											<div class="col-10">
												<p>mit Salami</p>
											</div>
											<div class="col-2">
												<button>Bestellen</button>
											</div>
										</div>
									</li>
								</ul>
							</div><!-- Container 2-->
							
							
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
