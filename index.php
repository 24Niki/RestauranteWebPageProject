<!DOCTYPE html>
<html lang="de">
<head>
  <title>Pizzeria Toskana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="css/index.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
	<section class="login-block">
		<div class="container">
			<div class="row">
			
				<!--Login Bereich-->
				<div class="col-md-4 login-sec">
					<h2 class="text-center">Jetzt Tischnummer registrieren!</h2>
					
					<form class="login-form" method="post" action="carousel.php">
					
						<!-- Eingabefeld für Tischnummer -->
						<div class="form-group">
							<input type="text" class="form-control" name="tischNummer" placeholder="Tischnummer" maxlength="50">
						</div>
						
						<div class="form-check" align="right">
							<input type="submit" value="Starten" onClick="tischnrAbsenden()" name="loginTischNr"></form>
						</div>
						
					<form>	
				
					<div class="banner-text">
						<h3 class="text-center">Herzlich Willkommen</h3>
					</div>	
				</div>
				
				<!--Bilder-->
				<div class="col-md-8 banner-sec">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active" >
								<img class="d-block" src="Bilder/gedecktertischzwei.jpg" alt="First slide" width ="780" >
								<div class="carousel-caption d-none d-md-block">
								</div>
							</div>
							
							<div class="carousel-item" >
								<img class="d-block" src="Bilder/wochenkartezwei.jpg" alt="First slide" width ="780" >
								<div class="carousel-caption d-none d-md-block">
								</div>
							</div>
						</div>
						<div id = "kueche"> 
							<a href ="loginkueche.php">Küche</a>
						</div>	    
					</div>
				</div>
				
			</div><!-- row -->
		</div><!-- container -->
		
	</section>

	<script type="text/javascript">
		function tischnrAbsenden() {
			window.location = "carousel.php";
		}
	</script>
	
</body>
</html>
