<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');

while ($donnees = $reponse->fetch())
{
	echo $donnees['prix_moyen'];
}

$reponse->closeCursor();

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');

$donnees = $reponse->fetch();
echo $donnees['prix_moyen'];

$reponse->closeCursor();



// SELECT UPPER(nom) AS nom_maj FROM jeux_video

// SELECT LOWER(nom) AS nom_min FROM jeux_video

// SELECT LENGTH(nom) AS longueur_nom FROM jeux_video

// SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video

// SELECT AVG(prix) AS prix_moyen FROM jeux_video

// SELECT SUM(prix) AS prix_total FROM jeux_video WHERE possesseur='Patrick'

// SELECT MAX(prix) AS prix_max FROM jeux_video

// SELECT MIN(prix) AS prix_min FROM jeux_video

// SELECT COUNT(*) AS nbjeux FROM jeux_video

// SELECT COUNT(*) AS nbjeux FROM jeux_video WHERE possesseur='Florent'

// SELECT COUNT(nbre_joueurs_max) AS nbjeux FROM jeux_video

// SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video

// SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console

// SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10

// SELECT AVG(prix) AS prix_moyen, console FROM jeux_video WHERE possesseur='Patrick' GROUP BY console HAVING prix_moyen <= 10




?>

