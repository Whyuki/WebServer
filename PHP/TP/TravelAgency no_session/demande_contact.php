<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de contact</title>
</head>

<body>

    <p>
        <?php

        if (strstr($_POST["mail"], "@")) {

            if (isset($_POST["name"]) and isset($_POST["mail"])) {

                echo "Mr/Mmme " . $_POST['name'] . ", votre demande a bien été pris en compte. Vous serez contacté à l'adresse : " . $_POST['mail'];

                echo "<p>Retour à l'accueil :" . "<a href='index.php?contact=oui#contact'>Par ici</a></p>";
            }
        } else {
            echo "Veuillez saisir vos coordonnées dans le <a href='index.php?contact=non#contact'>formulaire</a> ";
        }
        ?>
    </p>
</body>

</html>