/* Tee ohjelma joka suorittaa valitun laskutoimituksen kahdelle annetulle luvulle. PHP-skriptin täytyy tulostaa
suoritettu laskutoimitus ja laskun tulos. Jos molempia lukuja ei anneta tulostetaan teksti: "Et antanut molempia
lukuja!". Lomake, jolla tiedot lähetetään on seuraavanlainen:

<form action="laskukone.php" method="get">
<input TYPE="text" name="ekaluku">
<select name="operator">
<option value=1 selected>+</option>
<option value=2>-</option>
<option value=3>*</option>
<option value=4>/</option>
</select>
<input TYPE="text" name="tokaluku">
<input type="submit" value="Lähetä">
</form>

Example output:
54754 + 233 = 54987 */

<?php

	$operator = trim($_GET["operator"]);
	$operator = strip_tags($operator);

	$ekaluku = trim($_GET["ekaluku"]);
	$ekaluku = strip_tags($ekaluku);

	$tokaluku = trim($_GET["tokaluku"]);
	$tokaluku = strip_tags($tokaluku);

	$merkki = "";

	if ($ekaluku != 0 && $tokaluku != 0) {
		switch ($operator) {
			case "1":
				$tulos = $ekaluku + $tokaluku;
				$merkki = "+";
				break;
			case "2":
				$tulos = $ekaluku - $tokaluku;
				$merkki = "-";
				break;
			case "3":
				$tulos = $ekaluku * $tokaluku;
				$merkki = "*";
				break;
			case "4":
				$tulos = $ekaluku / $tokaluku;
				$merkki = "/";
				break;
		}
		echo "$ekaluku $merkki $tokaluku = $tulos";
	} else {
		echo "Et antanut molempia lukuja!";
	}

?>