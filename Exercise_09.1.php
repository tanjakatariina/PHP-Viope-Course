/* Tehtävänäsi on tehdä vieraskirja. Skriptin pitää pystyä tallentamaan lähetetyt viestit tiedostoon vieraskirja.txt,
silloin kun piilokenttänä lähetettävän mode-parametrin arvo on save. Lähetetystä viestistä ja lähettäjän
nimestä pitää ottaa pois alussa ja lopussa olevat turhat tyhjät merkit sekä poistaa HTML-tagit. Jos mode-parametrin
arvo on jokin muu, tulostetaan vain vieraskirjan sisältö esimerkkitulostuksen mukaisesti. Tiedostossa vieraskirja.txt
lähettäjän nimi ja viesti on eroteltu putkimerkillä | ja jokainen viesti on omalla rivillään.
Tiedoston vieraskirja.txt malli on siis seuraavanlainen:

Ensimmäinen lähettäjä|ensimmäinen viesti
toinenlähettäjä|toinenviesti
...

Lomake-jolla viesti lähetetään on seuraavanlainen:
<form action="vieraskirja.php" method="get">
Lähettäjä: <input TYPE="text" name="lahettaja"><br>
Viesti: <input TYPE="text" name="viesti"><br>
<input type="hidden" name="mode" value="save">
<input type="submit" value="Lähetä">
</form>

Example output:
Timo Silakka: Moi!
Tiina Testaaja: Hei!
Taneli Teräs: Heipä-hei, mitäs kuuluu?
Hannu Hanhi: Morjes, komea vieraskirja sinulla!
Esko Esimerkki: Terve vaan! */

<?php

    $tiedosto = "vieraskirja.txt";
    if (!file_exists($tiedosto)) die('Tiedostoa ei löydy!');

    $mode = $_GET["mode"];

    if ($mode == "save") {
        $lahettaja = trim($_GET['lahettaja']);
	$lahettaja = strip_tags($lahettaja);

        $viesti = trim($_GET['viesti']);
        $viesti = strip_tags($viesti);

        $viite = fopen($tiedosto, "a");

        if ($viite) {
                fwrite($viite, $lahettaja. "|");
                fwrite($viite, $viesti);
            	fwrite($viite, "\n");
                fclose($viite);
        }

    } else {
        $viite = fopen($tiedosto, "r");
        while ($rivi = fgets($viite, 1024)) {
            $rivi = explode("|", $rivi);
            echo "$rivi[0]: $rivi[1]";
        }
    }

?>
