<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
$bdd->exec('DELETE FROM jeux_video WHERE nom="Battlefield 1942"');

echo "Le jeu a bien été supprimé!";

?>