/* Tee PHP-skripti, joka tarkistaa, onko luku syötetty luku parillinen vai pariton. Jos syötetty luku on
parillinen, tulostuu näytölle "Luku X on parillinen.". Jos luku on pariton, tulostuu näytölle "Luku X on pariton.".
X-kirjaimen paikalle tulee siis käyttäjältä syötteenä saatava luku. Jos käyttäjä antaa syötteenä nollan tai
negatiivisen luvun, tulostaa ohjelma näytölle ilmoituksen "Antamasi syöte ei ollut kelvollinen!".

ihje: Luku on parillinen, jos sen jakojäännös kahdella jaettaessa on 0.

Lomake jolla luku lähetetään on seuraavanlainen:
<form action="parillisuus.php" method="get">
Luku: <input TYPE="text" name="luku"><br>
<input type="submit" value="Lähetä">
</form>

Example output:
Luku 3 on pariton. */

<?php

	$luku = trim($_GET["luku"]);
	$luku = strip_tags($luku);

	if ($luku > 0) {
		if ($luku % 2 == 0) {
			echo "Luku $luku on parillinen.";
		} else {
			echo "Luku $luku on pariton.";
		}
	} else {
		echo "Antamasi syöte ei ollut kelvollinen!";
	}

?>