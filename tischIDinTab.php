<?php

$cookie = $_COOKIE["tischNr"];
$pdo = new PDO('mysql:host=localhost;dbname=restaurantdb', 'root', '');
$statement = $pdo->prepare("INSERT INTO tische (id, name) VALUES (?,?)");
$statement->execute(array($cookie, 'Tisch'));

?>
	