/* Alla oleva PHP-skripti tulostaa lomakkeelle syötetyistä luvuista suurimman ja pienimmän. Tehtävänäsi on kirjoittaa
ohjelmasta puuttuvat funktiot (suurin ja pienin), jotka saavat parametreina käyttäjän syöttämät kokonaisluvut ja
palauttavat nimensä mukaiset kokonaisluvut.

Täydennettävä ohjelma:

<?php
    $eka = $_GET['eka'];
    $toka = $_GET['toka'];
    $kolmas = $_GET['kolmas'];

    // Sinun kirjoittamsi funktiot tulee tähän

    $suurin_luku = suurin($eka, $toka, $kolmas);
    $pienin_luku = pienin($eka, $toka, $kolmas);

    echo "Syöttämistäsi luvuista suurin oli $suurin_luku";
    echo " ja pienin $pienin_luku";
?>

Example output:
Syöttämistäsi luvuista suurin oli 432 ja pienin 1 */

<?php
	$eka = $_GET['eka'];
	$toka = $_GET['toka'];
	$kolmas = $_GET['kolmas'];

    ### put your code here ###
	function suurin ($eka, $toka, $kolmas) {
		if ($eka > $toka && $eka > $kolmas) {
			return $eka;
		} elseif ($toka > $eka && $toka > $kolmas) {
			return $toka;
		} else {
			return $kolmas;
		}
	}

	function pienin ($eka, $toka, $kolmas) {
		if ($eka < $toka && $eka < $kolmas) {
			return $eka;
		} elseif ($toka < $eka && $toka < $kolmas) {
			return $toka;
		} else {
			return $kolmas;
		}
	}

	$suurin_luku = suurin($eka, $toka, $kolmas);
	$pienin_luku = pienin($eka, $toka, $kolmas);

	echo "Syöttämistäsi luvuista suurin oli $suurin_luku";
	echo " ja pienin $pienin_luku";
?>