/* Tehtävänäsi on kirjoittaa PHP-skripti, joka lukee arvosanoja tiedostosta
arvosanat.txt, korottaa arvosanoja yhdellä, kirjoittaa korotetut arvosanat
tiedostoon tulokset.txt ja lopuksi tulostaa korotetut arvot tiedostosta
tulokset.txt. Jos arvosana on viisi, sitä ei koroteta. Tiedostossa
arvosanat.txt olevat arvosanat ovat jokainen omalla rivillään ja arvosanojen
lukumäärä voi vaihdella. Arvosanat ovat välillä 0-5. Tiedostoon tulokset.txt
kirjoitettavat arvosanat pitää kirjoittaa myös jokainen omalle rivilleen.

Example output:
Uudet arvosanat:
5
4
3
2
2
2
3
4
5
5 */

<?php

	$arvosanat = "arvosanat.txt";
	$tulokset = "tulokset.txt";
	if (!file_exists($arvosanat)) die ("Tiedostoa ei löydy!");

	$arvosanat_viite = fopen($arvosanat, "r");
	$tulokset_viite = fopen($tulokset, "w");

	while ($rivi = fgets($arvosanat_viite, 1024)) {
		if ($rivi == 5) {
			fwrite($tulokset_viite, (int)$rivi);
            		fwrite($tulokset_viite, "\n");
		} else {
			fwrite($tulokset_viite, (int)($rivi + 1));
            		fwrite($tulokset_viite, "\n");
		}
	}

	fclose($arvosanat_viite);
    	fclose($tulokset_viite);

    	$tulokset_viite = fopen($tulokset, 'r');
    	echo "Uudet arvosanat:\n";
    	while ($rivi = fgets($tulokset_viite, 1024)) {
        	echo "$rivi";
    	}
?>
