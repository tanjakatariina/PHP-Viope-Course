/* Tehtävänäsi on täydentää alla olevaa PHP-skriptiä, jonka on tarkoitus tulostaa lomakkeelta lähetyt luvut
järjestettynä. Skriptin tulee järjestää luvut suurimmasta pienimpään sekä pienimmästä suurimpaan ja tulostaa
ne esimerkkitulostuksen mukaisesti. Luvut lähetään skriptille merkkijonona niin, että luvut on eroteltu toisistaan
pilkulla (esim. 4,2,5,2). Luvut erotellaan taulukoksi explode funktiolla. PHP:n valmiin sort-funktion käyttö on
kielletty. Järjestäminen täytyy tehdä for-lauseella.

Täydennettävä ohjelma:

<?php
    $lukujono = $_GET['lukujono'];
    $taulukko = explode(',',$lukujono);

    echo "Järjestys aluksi: $lukujono\n";

    // Sinun koodi tulee tähän

    echo "Suurimmasta pienimpään: $suurin_pienin\n";
    echo "Pienimmästä suurimpaan: $pienin_suurin\n";
?>

Example output:
Järjestys aluksi: 8,65,5,32,76,8,43,32,47,9,34,432,8,9,54,2,54,67,7,332,76,8
Suurimmasta pienimpään: 432,332,76,76,67,65,54,54,47,43,34,32,32,9,9,8,8,8,8,7,5,2
Pienimmästä suurimpaan: 2,5,7,8,8,8,8,9,9,32,32,34,43,47,54,54,65,67,76,76,332,432 */

<?php

   	$lukujono = $_GET['lukujono'];
    	$taulukko = explode(',',$lukujono);

    	echo "Järjestys aluksi: $lukujono\n";


	for ($i = 0; $i < count($taulukko); $i++) {
		for ($j = $i + 1; $j < count($taulukko); $j++) {
			if ($taulukko[$i] < $taulukko[$j]) {
				$temp = $taulukko[$i];
				$taulukko[$i] = $taulukko[$j];
				$taulukko[$j] = $temp;
			}
		}
	}

	$taulukko_toisinpain = array_reverse($taulukko);

   	$suurin_pienin = implode("," , $taulukko);
   	$pienin_suurin = implode("," , $taulukko_toisinpain);

   	echo "Suurimmasta pienimpään: $suurin_pienin\n";
   	echo "Pienimmästä suurimpaan: $pienin_suurin\n";
	
?>
