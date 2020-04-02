<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Demande de contact</h1>
 
    <p>Demande de contact prise en compte pour <?php echo $_POST["name"]; ?> </p>
    <p>Vous serez contacté à l'adresse communiquée : <?php echo $_POST["email"]; ?> </p>
    <p>
        <a href="index.php?iscontact=y">page d'accueil</a>
    </p>
</body>
</html>