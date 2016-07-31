<?php
$text = utf8_encode('Die schlechte Nachricht erreichte die Hamburger am Donnerstagmorgen bei der Zeitungslektüre: "Haspa erhöht Kontogebühren für 900 000 Kunden", titelte das Hamburger Abendblatt. Für alle, die sich mit den Gepflogenheiten der Elbmetropole nicht so gut auskennen: "Haspa" steht für Hamburger Sparkasse. Es ist die Hausbank der halben Stadt, etwa 50 Prozent aller Hanseaten sind Kunde des Instituts. Für sie verteuert sich das klassische Girokonto von Herbst an um 34 Prozent auf 3,95 Euro monatlich. Und das exklusivere "Joker-Konto" kostet künftig sogar 7,90 Euro - ein Aufschlag von 15 Prozent auf den aktuellen Preis.');
$text = utf8_encode('Hallo,
Auf Anregung zweier Ihrer Leser habe ich sowohl an Sun (re: Star Office open source) als auch an ATI geschrieben (re: Rage 128 drivers). ATIs Antwort war in ihrer Naivität sehr interessant. Ich frage mich, mit wem sie wohl Ärger bekommen, wenn sie OS/2 zu unterstützen scheinen. Micro$oft? IBM? Vielleicht sollte man das Justizministerium oder die EU davon informieren.

Vielleicht wollen sie auch einfach nicht zugeben, dass sie für OS/2 keinen Support mehr anbieten, obwohl das in deutlichem Widerspruch zu ihrer "No New Drivers" Verlautbarung auf der Supportseite steht.

Danke für den großartigen Newsletter. ');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Hack</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,700' rel='stylesheet' type='text/css'>

  <!--<script src="js/vendor/modernizr-2.8.3.min.js"></script>-->
</head>
<body>

<div id="translation"></div>
<div id="content"><?= $text?></div>

<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>