<?php
$ueberschrift = "Hier erreichen Sie uns:";
$name = "Pizzeria Toskana";
$strasse = "Olivenstrasse 1";
$ort = "12345 Pizzhausen";
$email="pizzeriaToskana@example.com";
$breite = 1400;
$hoehe = 1400;
$mailBild = imagecreatetruecolor($breite, $hoehe); // neues Bild mit definierter Größe erstellen
$hintergrundfarbe = imagecolorallocate($mailBild, 200, 200, 200);//Bild in dem Farbe angewendet werden soll, Rot-Wert, Blau-Wert, Grün-Wert



imagefill($mailBild, 0, 0, $hintergrundfarbe);
$text_farbe        = imagecolorallocate ($mailBild, 0, 0, 0);
$text_farbe2       = imagecolorallocate ($mailBild, 0, 0, 160);

$pizza = imagecreatefrompng("Bilder/pizzaIcon.png");
imagecopy($mailBild, $pizza, 0, 0, 0, 0, 300, 300);

imagestring ($mailBild, 5, 50, 50, $ueberschrift, $text_farbe);
imagestring ($mailBild, 4, 50, 80, $name, $text_farbe); // Arbeitsfläche, Schriftgröße, X,Y (Startpunkt des String), String, Frabe
imagestring ($mailBild, 4, 50, 100, $strasse, $text_farbe);
imagestring ($mailBild, 4, 50, 120, $ort, $text_farbe);
imagestring ($mailBild, 4, 50, 150, $email, $text_farbe2);
imagepng($mailBild); // $kerze = Variable, in der Bild gespeichert, 2. Wert = Dateiname

?>