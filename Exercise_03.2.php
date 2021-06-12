/* Kirjoita PHP-skripti, joka tulostaa alla olevaan lomakkeeseen annetut tiedot esimerkkitulostuksen mukaisesti.

<form action="tulostanimi.php" method="get">
Etunimi: <input type="text" name="enimi"><br>
Sukunimi: <input type="text" name="snimi">
<input type="submit" value="Lähetä">
</form>

Example output:
Nimesi on Esa Lehtinen */

<?php
    echo "Nimesi on " . $_GET["enimi"] . " " . $_GET["snimi"];
?>