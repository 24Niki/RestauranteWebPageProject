<?php

/* Verbindung zur Datenbank mittels Klasse PDO (PHP Data Objects)*/
$pdo = new PDO('mysql:host=localhost;dbname=restaurantdb', 'root', '');

/* Verbindung aufgebaut -> Anfragen sind möglich
 // SQL-Befehl: SELECT Spalten FROM Tabelle*/
$sql = "SELECT name, kategorie, beschreibung, preis FROM speisen WHERE kategorie = 'suppe'";

/*Senden des SQL-Befehls mit $pdo->query() an die Datenbank
 // Jede Zeile der Tabelle wird in $row abgespeichert
 // Durchlaufen durch das Array zur Ausgabe*/
foreach ($pdo->query($sql) as $row) {
    echo $row['name']." ".$row['kategorie']."<br />";
    echo "Beschreibung: ".$row['beschreibung']."<br />";
    echo $row['preis']."<br /><br />";
}

$pdo=null;

?>