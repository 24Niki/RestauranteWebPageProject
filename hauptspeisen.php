<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Hauptspeisen</title>
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
												<button data-toggle="modal" data-target="#modalBHinzu">Bestellen</button>
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
							
							<!-- Liste der Gerichte -->
							<div class="container"> <!-- Container 3 -->
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
							</div> <!--Container 3 -->
							
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
							
							<!-- Liste der Gerichte -->
							<div class="container"> <!-- Container 4 -->
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
							</div><!-- Container 4-->
							
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
							
							<!-- Liste der Gerichte -->
							<div class="container"> <!-- Container 5 -->
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
							</div><!-- Container 5-->
							
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
							
							<!-- Liste der Gerichte -->
							<div class="container"> <!-- Container 6 -->
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
							</div><!-- Container 6-->
							
							
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
							
							<!-- Liste der Gerichte -->
							<div class="container"> <!-- Container 7 -->
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
							</div><!-- Container 7-->
							
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
							
							<!-- Liste der Gerichte -->
							<div class="container"> <!-- Container 8 -->
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
							</div><!-- Container 8-->
							
				
							
						</div><!-- Container 1-->
					</div> <!-- Col-10 -->
					
				</div> <!-- div 2 (Row)-->
	  
			</div><!-- div 1-->
			
			<!-- Modal Bestellbest�tigung-->
			  <div class="modal" id="modalBHinzu">
			    <div class="modal-dialog">
			      <div class="modal-content">
			      
			        <!-- Modal Header -->
			        <div class="modal-header">
			          <h4 class="modal-title">Die Bestellung wurde hinzugef�gt.</h4>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal footer -->
			        <div class="modal-footer">
			        	<div class="col">
			        		<button type="button" class="btn" data-dismiss="modal">Weitere Speisen hinzuf�gen</button>
			        	</div>
			        	<div class="col">
			        		<button type="button" class="btn" data-dismiss="modal" onClick="toBestellungen()">Zu meinen Bestellungen</button>
			        	</div>
			        </div> <!-- /Modal footer -->
			        
			      </div><!-- /Modal Content -->
			    </div>
			  </div>
			
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
			
			<script type="text/javascript">
		
			// Weiterleitung zur Bestellungen-Seite
			function toBestellungen() {
				window.location = "bestellung.php";
			}
		</script>
			
		</div> <!-- Übergeordneter Container -->
	</body>
</html>