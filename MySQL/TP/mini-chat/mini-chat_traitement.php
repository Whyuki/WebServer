<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['pseudo']) and isset($_POST['message'])) {
    $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(?, ?)');
    $req->execute(array(
        $_POST['pseudo'],
        $_POST['message'],
    ));
}

header('Location: mini-chat.php');

?>
