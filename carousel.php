<?php
// Sobald auf der index.php Seite eine Tischnummer eingegeben wurde und auf den Submit-Button gedrückt wurde,
// wird der Nutzer auf carousel.php weitergeleitet.
// Es wird ein Cookie erstellt, der die Tischnummer speichert
if(isset($_POST['loginTischNr'])){
   $cookieWert = $_POST["tischNummer"];
   setcookie("tischNr",$cookieWert,0);
}									
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <title>Willkommen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="css/carousel.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
	<div class="container">
	
        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="Bilder/startwochenkarte.jpg" alt="First slide" width ="auto" height="auto" >
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        
                        <button type="button" onClick="towochenkarte()">Zur Wochenkarte</button>
        				
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="Bilder/startspeisekarte.jpg" alt="Second slide" width ="auto" height="auto" >
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3>Speisekarte</h3>
        				<br>
        				<br>
                        <button id="zwei" onClick="tospeisekarte()">Zur Speisekarte</button>
                    </div>
                </div>
                
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        
                
	</div><!-- container -->
	
	
	<script type="text/javascript">
		function towochenkarte() {
			window.location = "wochengericht.php";
		}
		
		function tospeisekarte() {
			window.location = "startseite.php";
		}
	</script>
</body>
</html>