/* Tehtävänäsi on tehdä PHP-skripti, joka hakee halutun opiskelijan tiedot tiedostosta opiskelijat.txt ja tulostaa
ne näytölle esimerkkitulostuksen mukaisesti. Opiskelijan tiedot haetaan opiskelijanumeron perusteella. Jos
tiedostosta ei löydy opiskelijaa, ohjelman pitää tulostaa teksti: "Opiskelijanumerolla ei löytynyt ketään!".
Tiedosto opiskelijat.txt sisältää opiskelijanumeron, opiskelijan nimen sekä tiedon siitä onko opiskelija
ilmoittautunut läsnä olevaksi kuluvalle lukukaudelle. Tiedot on eroteltu toisistaan putkimerkillä | ja jokaisen
oppilaan tiedot on omalla rivillään. Jos opiskelija on ilmoittautunut läsnä olevaksi, niin rivin viimeinen numero
on 1 ja muuten se on nolla.

Tiedoston muoto on siis seuraavanlainen:
1234|Olli Oppilas|1
4321|Outi Opiskelija|0
7364|Antti Ahkera|1

Lomake jolla tiedot lähetetään on seuraavanlainen:

<form action="opiskelijat.php" method="get">
Anna opiskelijanumero: <input TYPE="text" NAME="opiskelija">
<br>
<input type="submit" value="Lähetä">
</form>

Example output:
Opiskelijanumerolla ei löytynyt ketään! */

<?php

    $opiskelijat = "opiskelijat.txt";
    if (!file_exists($opiskelijat)) die('Tiedostoa ei löydy!');

    $opiskelijat_viite = fopen($opiskelijat, "r");
    $opiskelija = $_GET['opiskelija'];
    $find = false;

    while ($rivi = fgets($opiskelijat_viite, 1024)) {
        $parsitturivi = explode("|", $rivi);
        if ($parsitturivi[0] == $opiskelija) {
            $find = true;
            if ($parsitturivi[2] == 1) {
                echo $parsitturivi[1]."($parsitturivi[0]): ilmoittautunut";

            } else {
                echo $parsitturivi[1]."($parsitturivi[0]): ei ole ilmoittautunut";
            }
        }
    }

    if (!$find) {
        echo "Opiskelijanumerolla ei löytynyt ketään!";
    }

    fclose($opiskelijat_viite);

?>