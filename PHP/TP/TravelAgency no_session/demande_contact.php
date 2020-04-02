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