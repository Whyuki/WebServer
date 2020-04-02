<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

if (isset ($_GET['possesseur'])AND isset ($_GET['prix_max'])) {
	
	$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
	$req->execute(array($_GET['possesseur'], $_GET['prix_max']));
	
	echo '<ul>';
	while ($donnees = $req->fetch())
	{
		echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
	}
	echo '</ul>';
	
	$req->closeCursor();
}
