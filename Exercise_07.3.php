/* Tehtävänäsi on täydentää alla olevaa ohjelmaa, niin että ohjelma tulostaa kuten esimerkkitulostus. Ohjelmasta
puuttuu vain yksi funktio, joka sinun pitää kirjoittaa. Sinun ei pidä kirjoittaa palautuskenttään siis mitään
muuta koodia kuin tuo puuttuva funktio.


Täydennettävä ohjelma:

<?php

// Sinun koodi tulee tähän

$merkkijono = "aluksi\n";
uusiarvo($merkkijono);
echo "Merkkijono lopuksi: $merkkijono\n";

?>

Example output:
Merkkijono aluksi: aluksi
Merkkijono lopuksi: Uusi merkkijono */

<?php

	function uusiarvo(&$viiteparametri) {
		echo "Merkkijono aluksi: $viiteparametri";
		$viiteparametri = "Uusi merkkijono";
    	}

    	$merkkijono = "aluksi\n";
    	uusiarvo($merkkijono);
    	echo "Merkkijono lopuksi: $merkkijono\n";

?>
