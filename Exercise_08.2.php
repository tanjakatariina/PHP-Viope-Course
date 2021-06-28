/* Tehtävänäsi on tehdä äänestyssovellus, jossa on viisi ehdokasta ja yhtä ehdokasta voi äänestää kerralla.
Annettujen äänien tallentamiseen käytetään tiedostoa tulokset.txt. Kyseisessä tiedostossa on viisi riviä.
Jokaisella rivillä on ehdokkaan äänestysnumero(1-5) ja ehdokkaan saamat äänet. Äänestysnumero ja äänimäärä on
erotettu toisistaan | merkillä. Tiedoston muoto on siis seuraavanlainen:

1|2
2|6
3|8
4|3
5|10

Sinun pitää tehdä PHP-skripti, joka muokkaa tulokset.txt tiedostoa äänestyksen jälkeen niin, että äänestetyn
ehdokkaan äänimäärää on kasvatettu yhdellä. Ohjelman pitää lopuksi tulostaa näytölle annettujen äänien yhteenlaskettu
lukumäärä juuri annettu ääni mukaan lukien.

Lomake, jolla tiedot lähetetään on seuraavanlainen:

<form action="aanestys.php" method="get">
Valitse äänestysnumero:
<select name="ehdokas">
<option value=1 selected>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
</select>
<br>
<input type="submit" value="Lähetä">
</form>

Example output:
Ääniä annettu yhteensä: 15786 kappaletta. */

<?php
    $tulokset = "tulokset.txt";
    if (!file_exists($tulokset)) die("Tiedostoa ei löydy!");

    $tulokset_luku = fopen($tulokset, "r");

    $ehdokas = $_GET["ehdokas"];

    $temp= "";
    $aania = 0;

    while ($rivi = fgets($tulokset_luku, 1024)) {
        $parsitturivi = explode("|", $rivi);
        $aania = $aania + $parsitturivi[1];
        if ($parsitturivi[0] != $ehdokas) {
            $temp = $temp.$rivi;
        } else {
            $temp = $temp.$parsitturivi[0]."|".($parsitturivi[1] + 1)."\n";
        }
    }

    $aania++;

    fclose($tulokset_luku);
    $tulokset_kirjoitus = fopen($tulokset, "w");
    fwrite($tulokset_kirjoitus, $temp);
    fclose($tulokset_kirjoitus);

    echo "Ääniä annettu yhteensä: $aania kappaletta."
?>