/* Kirjoita PHP-skripti, joka tulostaa itseisarvon alla olevaan lomakkeeseen annetusta luvusta.

<form action="itseisarvo.php" method="get">
Luku: <input type="text" name="luku">
<input type="submit" value="Lähetä">
</form>

Example output:
Luvun -3 itseisarvo on 3 */

<?php
	$luku = $_GET["luku"];
    	echo "Luvun " . $luku . " itseisarvo on " . abs($luku);
?>
