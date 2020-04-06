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

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=travel_agency;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        if (strstr($_POST["mail"], "@")) {

            if (isset($_POST["name"]) and isset($_POST["mail"])) {

                $already_contact = false;
                
                $verif_mail = $bdd->query('SELECT nom, mail, date_contact, contact FROM liste_contact ');
                while ($data = $verif_mail->fetch()) {
                    if ($_POST['mail'] == $data['mail']) {
                        $already_contact = true;
        ?>
                        <p>Mr/Mme
                            <?php echo $data['nom']; ?>
                            , vous avez déjà demandé à être contacté à l'adresse :
                            <?php echo $data['mail']; ?>
                            le
                            <?php echo $data['date_contact']; ?>
                        </p>
                        <?php
                        if ($data['contact'] == "N") {
                        ?>
                            <p>Vous serez contacté dans les plus brefs délais.</p>
                            <a href="index.php?contact=oui#contact">Retour</a>
                        <?php
                        } else {
                        ?>
                            <p>Vous avez déjà été contacté.</p>
                            <a href="index.php?contact=oui#contact">Retour</a>
                    <?php

                        }
                    }
                }
                $verif_mail->closeCursor();

                if (isset($already_contact) and $already_contact == false) {
                    $req_insert_contact = $bdd->prepare('INSERT INTO liste_contact(nom, mail, date_contact, contact) VALUES(?, ?, NOW(), "N")');
                    $req_insert_contact->execute(array(
                        $_POST["name"], $_POST["mail"]
                    ));
                    ?>
                    <p>
                        Mr/Mmme
                        <?php
                        echo htmlspecialchars($_POST['name']);
                        ?>
                        votre demande a bien été pris en compte.
                        </br>
                        Vous serez contacté à l'adresse :
                        <?php
                        echo htmlspecialchars($_POST['mail']);
                        ?>
                    </p>
                    <p>Retour à l'<a href='index.php?contact=oui#contact'>accueil</a></p>
            <?php
                }
            }
        } else {
            ?>
            <p>Veuillez saisir vos coordonnées dans le <a href='index.php?contact=non#contact'>formulaire</a></p>
        <?php

        }
        ?>
    </p>
</body>

</html>