/*
Tee PHP-skripti, joka tulostaa syötetyt merkkijonot ja niiden yhteenlasketun pituuden esimerkkitulostuksen mukaisesti.
Merkkijonoista pitää poistaa alussa ja lopussa olevat ylimääräiset tyhjät merkit ennen kuin sen merkkien lukumäärä
lasketaan ja se tulostetaan näytölle. Jos käyttäjä ei anna molempia merkkijonoja, tulostetaan vain teksti:
"Et antanut molempia merkkijonoja!". Lomake jolla merkkijonot lähetetään on seuraavanlainen:


<form action="merkkijono.php" method="get">
Ensimmäinen merkkijono: <input TYPE="text" name="merkkijono1"><br>
Toinen merkkijono: <input TYPE="text" name="merkkijono2"><br>
<input type="submit" value="Lähetä">
</form>

Example output:
Antamasi merkkijonot olivat "Ohjelmointi on todella" ja "mukavaa!". Niiden pituus yhteensä on 30 merkkiä! */

<?php
	$merkkijono1 = trim($_GET["merkkijono1"]);
	$merkkijono2 = trim($_GET["merkkijono2"]);

	$merkkijono1 = strip_tags($merkkijono1);
	$merkkijono2 = strip_tags($merkkijono2);

	$mj_pituus1 = strlen($merkkijono1);
	$mj_pituus2 = strlen($merkkijono2);

	$yhdistys = $mj_pituus1 + $mj_pituus2;

	if ($mj_pituus1 == 0 || $mj_pituus2 == 0) {
		echo "Et antanut molempia merkkijonoja!";
	} else {
		echo "Antamasi merkkijonot olivat \"$merkkijono1\" ja \"$merkkijono2\". Niiden pituus yhteensä on $yhdistys merkkiä!";
	}
?>