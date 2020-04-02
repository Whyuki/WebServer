<?php
try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM jeux_video');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()) {
?>
    <p>
        <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
        Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
        Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
        <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

$reponse = $bdd->query('SELECT nom FROM jeux_video');

while ($donnees = $reponse->fetch()) {
    echo $donnees['nom'] . '<br />';
}

$reponse->closeCursor();

//where

$reponse = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\'');

while ($donnees = $reponse->fetch()) {
    echo $donnees['nom'] . ' appartient à ' . $donnees['possesseur'] . '<br />';
}

$reponse->closeCursor();

//order by

$reponse = $bdd->query('SELECT nom, prix FROM jeux_video ORDER BY prix');
//par prix decroissant :
// SELECT * FROM jeux_video ORDER BY prix DESC 

while ($donnees = $reponse->fetch()) {
    echo $donnees['nom'] . ' coûte ' . $donnees['prix'] . ' EUR<br />';
}

$reponse->closeCursor();

//limit

$reponse = $bdd->query('SELECT nom FROM jeux_video LIMIT 0, 10');

echo '<p>Voici les 10 premières entrées de la table jeux_video :</p>';
while ($donnees = $reponse->fetch()) {
    echo $donnees['nom'] . '<br />';
}

$reponse->closeCursor();

//
$reponse = $bdd->query("SELECT nom, possesseur, console, prix FROM jeux_video WHERE console='Xbox' OR console='PS2' ORDER BY prix DESC LIMIT 0,10");

echo '<p>Voici les 10 premières entrées de la table jeux_video par prix décroissant (+indication possesseur) :</p>';
while ($donnees = $reponse->fetch()) {
    echo $donnees['nom'] . ' coûte ' . $donnees['prix'] . ' EUR . '.' appartient à ' . $donnees['possesseur'] .'<br />';
}

$reponse->closeCursor();


?>