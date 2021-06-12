/* Tee PHP-skripti, joka tulostaa lomakkeella annettujen tietojen perusteella jonkin lausahduksen
seuraavan ohjeen mukaisesti:
mies 0-55 vuotta: "Olet mies parhaassa iässä!"
mies yli 55 vuotta: "Olet viisas mies!"
nainen 0-55 vuotta: "Olet neito kauneimmillaan!"
nainen yli 55 vuotta: "Näytät nuorelta ikäiseksesi!".

Lomake jolla tarvittavat tiedot lähetetään on seuraavanlainen:

<form action="tulostatiedot.php" method="get">
Valitse sukupuolesi: <input type="radio" value="mies" name="sukupuoli" checked>mies
<input type="radio" value="nainen" name="sukupuoli">nainen
<br>
Valitse ikäsi:
<select name="ika">
<option value=1 selected>0-55</option>
<option value=2>Yli 55</option>
</select>
<br>
<input type="submit" value="Lähetä">
</form>

Example output:
Näytät nuorelta ikäiseksesi! */

<?php
	$sukupuoli = $_GET["sukupuoli"];
	$ika = $_GET["ika"];

	if ($sukupuoli == "mies") {
		if ($ika == "1") {
			echo "Olet mies parhaassa iässä!";
		} else {
			echo "Olet viisas mies!";
		}
	} else {
		if ($ika == "1") {
			echo "Olet neito kauneimmillaan!";
		} else {
			echo "Näytät nuorelta ikäiseksesi!";
		}
	}
?>