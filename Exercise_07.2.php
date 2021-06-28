/* Tehtävänäsi on tehdä PHP-skripti, joka tulostaa annetun merkkijonon muotoiltuna valinnan mukaan. Merkkijono
voidaan muotoilla neljällä eri tavalla. Harvana ja pieninä tarkoittaa, että annetun merkkijonon kaikki kirjaimet
muutetaan pieniksi kirjaimiksi ja merkkien väliin tulee välilyönti (k o e). Harvana isoina on muuten sama kuin
edellinen, mutta kirjaimet tulostetaan isoina kirjaimina (K O E). Takaperin pieninä tulostaa merkkijonon takaperin
pieninä kirjaimina (eok) ja takaperin isoina vastaavasti isoina kirjaimina (EOK)

Lomake jolla tiedot lähetetään on seuraavanlainen:

<form action="merkkijonot.php" method="get">
Anna merkkijono: <input TYPE="text" NAME="merkkijono">
<br>
Valitse toiminto:
<select name="mode">
<option value=1 selected>harvana pieninä</option>
<option value=2>harvana isoina</option>
<option value=3>takaperin pieninä</option>
<option value=4>takaperin isoina</option>
</select>
<br>
<input type="submit" value="Lähetä">
</form>

Example output:
!sotiok neniemiiv */

<?php
	$merkkijono = $_GET["merkkijono"];
	$mode = $_GET["mode"];
	$tulostus = "";

	switch ($mode) {
		case "1":
			$temp = strtolower($merkkijono);
			$pituus = strlen($temp);
            		$tulostus = "";
            		for ($i = 0; $i < $pituus; $i++) {
                		if ($i == ($pituus - 1)) {
                    			$tulostus = $tulostus.$temp[$i];
                		} else {
                   			$tulostus = $tulostus.$temp[$i]." ";
                		}
            		}
            		break;
		case "2":
            		$temp = strtoupper($merkkijono);
            		$pituus = strlen($temp);
            		$tulostus = "";
            		for ($i = 0; $i < $pituus; $i++) {
                		if ($i == ($pituus - 1)) {
                    		$tulostus = $tulostus.$temp[$i];
                		} else {
                    			$tulostus = $tulostus.$temp[$i]." ";
                		}
            		}
            		break;
		case "3":
            		$tulostus = strtolower($merkkijono);
            		$tulostus = strrev($tulostus);
            		break;
        	case "4":
            		$tulostus = strtoupper($merkkijono);
            		$tulostus = strrev($tulostus);
            		break;
	}
	echo $tulostus;
?>
