/* Tehtävänäsi on täydentää alla olevaa ohjelmaa määrittelemällä puuttuvat muuttujat niin, että ohjelman tulostus
vastaa esimerkkitulostusta. Tekstikenttään kirjoitetaan siis vain puuttuvat lauseet, ei koko ohjelmaa.

Täydennettävä ohjelma:

<?php

    // Sinun koodi tulee tähän

    $tulostus = implode(",",$a);
    echo $teksti;
    echo "Ostin $lkm {$elain}a.\n";
    echo "Taulukon sisältö: $tulostus";
?>

Example output:
Lainausmerkkien(" ja ") sisällä voi käyttää kenoviivalla(\) merkittyjä erikoiskoodeja.
Ostin 3 kissaa.
Taulukon sisältö: 9,7,5 */

<?php

	### put your code here ###
	$teksti = "Lainausmerkkien(\" ja \") sisällä voi käyttää kenoviivalla(\\) merkittyjä erikoiskoodeja.\n";
    	$a = array(9, 7, 5);
    	$elain = "kissa";
    	$lkm = 3;

   	$tulostus = implode(",",$a);
    	echo $teksti;
    	echo "Ostin $lkm {$elain}a.\n";
   	echo "taulukon sisätlö: $tulostus";

?>
