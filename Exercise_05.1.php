/* Muuta taulukon taulu alkioita niin, että ohjelma tulostaa kuten esimerkkitulostus. Tehtävässä array-sanan käyttö
on kielletty eli tehtävänäsi ei ole tehdä uutta taulukkoa, vaan muuttaa olemassa olevan taulukon alkioita.
Tekstikenttään kirjoitetaan vain puuttuvat lauseet, ei koko ohjelmaa!

Täydennettävä ohjelma:

<?php

    $taulu = array("Ville Veikko" => "Koodaajapolku 2",
    "Matti Meikäläinen" => "Opiskelijantie 5",
    "Taneli Teräs" => "Teräskuja 5");

    // Sinun koodi tulee tähän

    print_r($taulu);
?>

Example output:
Array
(
    [Ville Veikko] => Koodaajapolku 10
    [Matti Meikäläinen] => Opiskelijantie 5
    [Taneli Teräs] => Tanelinpolku 5
    [Maija Meikäläinen] => Opiskelijantie 5
) */

<?php
    $taulu = array("Ville Veikko" => "Koodaajapolku 2",
           "Matti Meikäläinen" => "Opiskelijantie 5",
           "Taneli Teräs" => "Teräskuja 5");

    $taulu["Ville Veikko"]  = "Koodaajapolku 10";
    $taulu["Taneli Teräs"] = "Tanelinpolku 5";
    $taulu["Maija Meikäläinen"] = "Opiskelijantie 5";

    print_r($taulu);
?>
