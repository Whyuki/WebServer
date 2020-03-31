<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['prenom']); // htmlspecialchars()?> !</p>

<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>

<p><?php echo htmlspecialchars($_POST['message']); ?></p>

<p><?php echo htmlspecialchars($_POST['choix']); ?></p>

<p>
<?php
if (isset($_POST["frite"])) {

    echo $_POST['frite'];
}
?>
</p>

<p>
<?php
if (isset($_POST["epinards"])) {

    echo $_POST['epinards'];
}
?>
</p>

<p>
<?php
if (isset($_POST["steak"])) {

    echo $_POST['steak'];
}
?>
</p>

<p><?php echo $_POST['frites']; ?></p>