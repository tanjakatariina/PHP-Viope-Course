/* Tee PHP-skripti joka tulostaa luvut lomakkeella annetusta luvusta nollaan saakka. Luvut pitää erotella toisistaan
välilyönneillä, mutta viimeisen luvun eli nollan perään ei saa tulla välilyöntiä. Jos käyttäjän syöttämä luku on
pienempi kuin nolla, tulostetaan teksti: "Luvun pitää olla vähintään nolla!". Lomake jolla luku lähetetään on
seuraavanlainen:

<form action="luvut.php" method="get">
Luku: <input TYPE="text" name="luku"><br>
<input type="submit" value="Lähetä">
</form>

Example output:
Luvun pitää olla vähintään nolla! */

<?php
	$luku = trim($_GET["luku"]);
	$luku = strip_tags($luku);

	if ($luku < 0) {
		echo "Luvun pitää olla vähintään nolla!";
	} else {
		while ($luku >= 0) {
			if ($luku == 0) {
                		echo "$luku";
            		} else {
                		echo "$luku ";
            		}
           		$luku--;
		}
	}
?>
