<?php session_start();

if (isset($_SESSION['connect']) AND $_SESSION['connect']==true){
    header('Location: list_contact.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
    <style>
        * {
            text-align: center;
        }

        form {
            width: 10%;
            border: 2px solid plum;
            margin: auto;
        }
        input {
            margin-top: 3%;
        }

        #bouton-ok {
            background-color: plum;
            border: none;
            font-weight: bold;
            height: 30px;
            width: 100px;
        }
    </style>
</head>

<body>
    <h2>Espace administrateur</h2>

    <form action="list_contact.php" method="POST">
        <p>
            <label for="id">Identifiant :</label>
            <br>
            <input type="text" name="id">
        </p>
        <p>
            <label for="mdp">Mot de passe :</label>
            <br>
            <input type="password" name="mdp">
        </p>

        <p>
            <input type="submit" value="Valider" id="bouton-ok" />
        </p>



    </form>
</body>

</html>