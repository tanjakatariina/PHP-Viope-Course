/* Tee PHP-skripti, joka tulostaa työntekijän saaman bruttopalkan, veron osuuden palkasta sekä nettopalkan.
Lomake jolla tarvittavat tiedot lähetetään on seuraavanlainen:

<form action="palkanlaskenta.php" method="get">
Tehtyjen työtuntien määrä: <input type="text" name="tunnit">
Tuntipalkka: <input type="text" name="tuntipalkka">
Veroprosentti: <input type="text" name="veroprosentti">
<input type="submit" value="Lähetä">
</form>

Jos kaikkia kolmea tietoa ei annettu, ohjelman pitää tulostaa teksti: "Et antanut kaikkia tietoja!".
Vihje: Veron osuus palkasta saadaan laskettua kaavalla: tunnit*tuntipalkka*veroprosentti/100
Huom! Käytä rivinvaihtona \n (ei <br>)

Example output:
Palkka ilman veroja:  624
Veron osuus palkasta: 143.52
Palkka verojen jälkeen: 480.48 */

<?php
	$tunnit = trim($_GET["tunnit"]);
	$tuntipalkka = trim($_GET["tuntipalkka"]);
	$veroprosentti = trim($_GET["veroprosentti"]);

	$tunnit = strip_tags($tunnit);
	$tuntipalkka = strip_tags($tuntipalkka);
	$veroprosentti = strip_tags($veroprosentti);

	if (($tunnit && $tuntipalkka && $veroprosentti) == "") {
		echo "Et antanut kaikkia tietoja!";
	} else {
		$brutto = $tunnit * $tuntipalkka;
		echo "Palkka ilman veroja: $brutto\n";

		$veron_osuus = $brutto * $veroprosentti / 100;
		echo "Veron osuus palkasta: $veron_osuus\n";

		$netto = $brutto - $veron_osuus;
		echo "Palkka verojen jälkeen: $netto";
	}
?>