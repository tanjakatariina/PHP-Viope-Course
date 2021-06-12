/* Kirjoita PHP-skripti, joka tulostaa kertolaskun ja jakolaskun tuloksen alla olevaan lomakkeeseen annetuista
luvuista. Jakolaskussa ensimmäinen luku toimii jaettavana ja toinen luku jakajana. Jos toinen luku on
nolla, ohjelman pitää tulostaa jakolaskun tulokseksi teksti: Nollalla ei saa jakaa.

<form action="laskutoimituksia.php" method="get">
Ensimmäinen luku: <input type="text" name="ekaluku">
Toinen luku: <input type="text" name="tokaluku">
<input type="submit" value="Lähetä">
</form>

Example output:
Kertolaskun tulos: 448
Jakolaskun tulos: 7 */

<?php
	$ekaluku = trim($_GET["ekaluku"]);
	$tokaluku = trim($_GET["tokaluku"]);

	$ekaluku = strip_tags($ekaluku);
	$tokaluku = strip_tags($tokaluku);

	$kertolasku = $ekaluku * $tokaluku;
	echo "Kertolaskun tulos: $kertolasku\n";

	if ($tokaluku == "0") {
		echo "Jakolaskun tulos: Nollalla ei saa jakaa";
	} else {
		$jakolasku = $ekaluku / $tokaluku;
		echo "Jakolaskun tulos: $jakolasku";
	}
?>