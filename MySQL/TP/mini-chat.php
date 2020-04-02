<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini chat</title>
</head>

<body>
    <form action="mini-chat_traitement.php" method="POST">
        <p>
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo">

        </p>
<p>
    <label for="message">Message :</label>
    <input type="text" id="message" name="message">
</p>

<input type="submit" value="Envoyer" />

    </form>

</body>

</html>