/* Tehtävänäsi on täydentää alla olevaa PHP-skriptiä, jonka on tarkoitus tulostaa summa ja keskiarvo annetuista
pisteistä. Pisteet lähetään skriptille merkkijonona niin, että pisteet on eroteltu toisistaan pilkulla
(esim. 4,2,5,2). Pisteet erotellaan taulukoksi explode-funktiolla. Skriptin on tarkoitus myös tulostaa annetut
pisteet välilyönnillä erotettuna. Tekstikenttään kirjoitetaan vain puuttuvat lauseet, ei koko ohjelmaa!

Täydennettävä ohjelma:

<?php

    $lukujono = $_GET['lukujono'];
    $lukutaulukko = explode(',',$lukujono);

    // Sinun koodi tulee tähän

    echo "Pisteet olivat: $pisteet\n";
    echo "Pisteiden summa: $summa\n";
    echo "Pisteiden keskiarvo: $keskiarvo";
?>

Example output:
Pisteet olivat: 5 7 3 23 56 85 2
Pisteiden summa: 181
Pisteiden keskiarvo: 25.857142857143 */

<?php
    	$lukujono = $_GET['lukujono'];
    	$lukutaulukko = explode(',',$lukujono);

	$pisteet = implode(" " , $lukutaulukko);

	$summa = 0;

	foreach ($lukutaulukko as $arvo) {
		$summa = $summa + $arvo;
	}

	$keskiarvo = $summa / count($lukutaulukko);

	echo "Pisteet olivat: $pisteet\n";
	echo "Pisteiden summa: $summa\n";
	echo "Pisteiden keskiarvo: $keskiarvo" ;
?>
