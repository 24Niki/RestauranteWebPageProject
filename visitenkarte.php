<?php

// Text, der auf die Visitenkarte soll
$ueberschrift = "Hier erreichen Sie uns:";
$name = "Pizzeria Toskana";
$strasse = "Olivenstrasse 1";
$ort = "12345 Pizzhausen";
$email="pizzeriaToskana@example.com";

//Größe der Visitenkarte
$breite = 500;
$hoehe = 210;
$mailBild = imagecreatetruecolor($breite, $hoehe); // neues Bild mit definierter Größe erstellen

// Farbe von Visitenkarte und Schrift
$hintergrundfarbe = imagecolorallocate($mailBild, 200, 200, 200);//Bild in dem Farbe angewendet werden soll, Rot-Wert, Grün-Wert, Blau-Wert
imagefill($mailBild, 0, 0, $hintergrundfarbe);
$text_farbe        = imagecolorallocate ($mailBild, 0, 0, 0);
$text_farbe2       = imagecolorallocate ($mailBild, 0, 0, 160);

// Icon in die Visitenkarte einbinden
$pizza = imagecreatefrompng("Bilder/pizzaIconK.png");
imagecopy($mailBild, $pizza, 300, 60, 0, 0, 138, 111);

// Anzeige der Visitenkarte
imagestring ($mailBild, 5, 50, 50, $ueberschrift, $text_farbe);
imagestring ($mailBild, 4, 50, 80, $name, $text_farbe); // Arbeitsfläche, Schriftgröße, X,Y (Startpunkt des String), String, Frabe
imagestring ($mailBild, 4, 50, 100, $strasse, $text_farbe);
imagestring ($mailBild, 4, 50, 120, $ort, $text_farbe);
imagestring ($mailBild, 4, 50, 150, $email, $text_farbe2);
imagepng($mailBild);

?>