<?php
$age_du_visiteur = 17; // La variable est créée et vaut 17
$age_du_visiteur = 23; // La variable est modifiée et vaut 23
$age_du_visiteur = 55; // La variable est modifiée et vaut 55

$nom_du_visiteur = "Mateo21";
$nom_du_visiteur = 'Mateo21';

$variable = "Mon \"nom\" est Mateo21";
$variable = 'Je m\'appelle Mateo21';

$poids = 57.3;

$je_suis_un_zero = true;
$je_suis_bon_en_php = false;

$pas_de_valeur = NULL;

echo $age_du_visiteur;

echo "Le visiteur a ";
echo $age_du_visiteur;
echo " ans";

echo "Le visiteur a $age_du_visiteur ans";

echo 'Le visiteur a ' . $age_du_visiteur . ' ans'; //concatenation pointée

$nombre = 10;
$resultat = ($nombre + 5) * $nombre; // $resultat prend la valeur 150

//modulo
$nombre = 10 % 5; // $nombre prend la valeur 0 car la division tombe juste
$nombre = 10 % 3; // $nombre prend la valeur 1 car il reste 1

?>