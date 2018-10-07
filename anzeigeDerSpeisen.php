
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
							