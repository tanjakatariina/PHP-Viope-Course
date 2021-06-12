/* Tee PHP-skripti, joka tarkistaa lomakkeella lähetetyn viestin ja tulostaa tämän jälkeen lähettäjän nimen ja
lähetetyn viestin. Jos lähettäjän nimi tai viesti on tyhjä, tulostetaan teksti: "Et antanut kaikkia tietoja!".
Viestistä ja lähettäjän nimestä pitää ensiksi poistaa alussa ja lopussa olevat ylimääräiset tyhjät merkit.
Viestistä ja nimestä pitää poistaa myös HTML-tagit, jotta viestin lähettäjä ei voi tehdä mitään vahinkoa
vieraskirjalle. Lomake jolla viesti voidaan lähettää on seuraavanlainen:

<form action="vieraskirja.php" method="get">
Lähettäjä: <input TYPE="text" name="nimi"><br>
Viesti: <input type="text" name="viesti"><br>
<input type="submit" value="Lähetä">
</form>

Example output:
Et antanut kaikkia tietoja! */

<?php
	$nimi = trim($_GET["nimi"]);
	$viesti = trim($_GET["viesti"]);

	$nimi = strip_tags($nimi);
	$viesti = strip_tags($viesti);

	if ($nimi == "" || $viesti == "") {
		echo "Et antanut kaikkia tietoja!";
	} else {
		echo $nimi . ": " . $viesti;
	}
?>