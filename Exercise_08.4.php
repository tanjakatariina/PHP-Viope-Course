/* Tehtävänäsi on tehdä PHP-skripti joka tulostaa näytölle opiskelijoiden kokeesta saamat pistemäärät sekä pistemäärien
keskiarvon. Kokeen tulokset on tiedostossa koe.txt. Tiedostossa opiskelijan tiedot on eroteltu putkimerkillä | ja
jokainen opiskelija on omalla rivillään. Tiedostossa voi olla kuinka monta opiskelijaa tahansa. Ensimmäisenä tietona
rivillä on opiskelijanumero ja sen jälkeen on pistemäärät jokaisesta viidestä tehtävästä.
Tiedoston muoto on siis seuraavanlainen:

12345|4|2|1|0|4
45678|1|2|3|4|4
78901|5|5|5|5|4
...

Example output:
Opiskelijoita oli 6:
86421: 11 pistettä
45678: 14 pistettä
44553: 17 pistettä
90070: 13 pistettä
78901: 24 pistettä
33222: 5 pistettä
Opiskelijoiden keskiarvo oli 14 pistettä. */

<?php
    $opiskelijat = "koe.txt";
    if (!file_exists($opiskelijat)) die ("Tiedostoa ei löydy!");

    $opiskelijat_viite = fopen($opiskelijat, "r");

    $opiskelijoita = 0;
    $summa = 0;

    while ($rivi = fgets($opiskelijat_viite, 1024)) {
        $opiskelijoita++;
        $parsitturivi = explode("|", $rivi);
        $opsumma = 0;
        for($i = 1; $i <= 5; $i++) {
            $opsumma = $opsumma + $parsitturivi[$i];
            $summa = $summa + $parsitturivi[$i];
        }
        $tulokset["$parsitturivi[0]"] = $opsumma;
    }
    fclose($opiskelijat_viite);
    $keskiarvo = $summa / $opiskelijoita;
    echo "Opiskelijoita oli $opiskelijoita:\n";

    foreach($tulokset as $avain => $arvo) {
        echo "$avain: $arvo pistettä\n";
    }
    echo "Opiskelijoiden keskiarvo oli $keskiarvo pistettä.";
?>