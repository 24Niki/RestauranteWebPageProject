<?php
header("Content-type:text/html; charset=utf-8");
// Auslesen des Wert des Cookie und Speichern in die Variable Cookie
// Wird benötigt, um die SQL-Abfrage für den gespeicherten Tisch auszuführen
$cookie = $_COOKIE["tischNr"];
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Bestellungen</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="css/bestellung.css" rel="stylesheet">

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container-fluid">

		<!-- Image on Top of the Web Page -->
		<div class="row">
			<img id="img" class="img-fluid" src="Bilder/pizza23.jpg"
				alt="Pizza Top Page">
		</div>
		<div class="row">
				<?php
    include 'navbarHorizontal.php';
    ?>	
			</div>
		<!-- Row-->

		<div>
			<!-- div 1-->
			<div class="row">
				<!-- div 2-->

				<!-- Navigationsleiste vertikal-->
				<div class="col-2">
				  		<?php
        include 'navbarVertikal.php';
        ?>
					</div>
				<!-- col-2 -->



				<!-- Page Content-->
				<div class="col-10">
					<div class="container" id="back">
						<!-- Container 1 -->
						<br>

						<!-- Überschrift der Seite -->
						<div class="row justify-content-center">
							<img class="img-fluid" src="Bilder/bestellungText.png"
								alt="Bestellung" style="width: 600px;" class="float-center">
						</div>



						<div class="row">
							<div class="container">
								<!-- Info: auf der Seite z.B. Bestellung
							eine Verlinkung zum Malprogramm  -->

								<svg height="100" width="300"
									xmlns:xlink="http://www.w3.org/1999/xlink">
									  <a xlink:href="kinderseite.php" target="_blank">
										<text x="0" y="15" fill="red" transform="rotate(-10, 300, 30)">Hier geht's zum Kindermalprogramm!</text>
									  </a>
									 </svg>
								<br>
								<div id="demo">
									<h2>Jetzt neu!</h2>
									<button id="buttoninfo" class="btn btn-default" type="button"
										onclick="loadDoc()">Info</button>
								</div>
								<br>
								<p>
									Liebe Gäste, <br> unten finden Sie Ihre aktuelle Bestellung.
									Wenn Sie fertig sind, dann klicken Sie auf den Button
									"bestellen".
								</p>

						

								
									
									
									<?php
        $pdo = new PDO('mysql:host=localhost;charset=utf8; dbname=restaurantdb', 'root', '');
        $sql = "SELECT bestellung.id, speisen.name, speisen.preis FROM bestellung INNER JOIN speisen ON bestellung.speisenid=speisen.id WHERE bestellung.tischid = $cookie";
        $nr = 0;
        ?>
                              
									
                             		<!-- Tabelle mit Anzeige der Bestellungen -->
								<table class="table">
									<thead>
										<tr>
											<th>Nr.</th>
											<th>Art der Bestellung</th>
											<th>Preis</th>
										</tr>
									</thead>

									<!-- Datensätze aus der Datenbank: Zeige alle Bestellungen für den im Cookie gespeicherten Tisch -->
                                        <?php
                                        foreach ($pdo->query($sql) as $row) :
                                            $nr += 1;
                                            ?>
                                         
    									<tbody>
										<tr>
											<td><?=$nr?></td>
											<td><?=$row['name']?></td>
											<td><?=$row['preis']?></td>
										</tr>
									</tbody>
    									
										<?php endforeach; ?>
									
									  </table>

							</div>
							<!-- /container -->
						</div>
						<!-- /row -->
						<br> <br> <br>
						<div class="row">
							<div class="container">
								<h2>Absenden der Bestellung</h2>
								<!-- Trigger the modal with a button -->
								<button type="button" class="btn btn-info btn-lg"
									data-toggle="modal" data-target="#myModal">Bestellen</button>

								<!-- Modal -->
								<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Ihre Bestellung wurde an die Küche
													versendet</h4>
											</div>
											<div class="modal-body">
												<p>Wir wünschen Ihnen einen guten Appetit</p>
											</div>
											<div class="modal-footer">

												<form method='GET' action='/restaurant/index.jsp'>
													<input type='submit' value='Zur Bewertung'>
												</form>
											</div>
										</div>

									</div>
								</div>
								<!-- /Modal -->

							</div>
							<!-- /container -->
						</div>
						<!-- /row -->

					</div>
					<!-- Container 1-->
				</div>
				<!-- Col-10 -->

			</div>
			<!-- div 2 (Row)-->

		</div>
		<!-- div 1-->



	</div>

	<script>
    function loadDoc() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML =
          this.responseText;
        }
      };
      xhttp.open("GET", "nachricht.txt", true);
      xhttp.send();
    }
    </script>


	<!-- Fixed footer -->
	<div class="navbar navbar-inverse navbar-fixed-bottom"
		role="navigation">
		<?php include 'footer.php'?>
	</div>

	</div>
	<!-- Übergeordneter Container -->

</body>

</html>