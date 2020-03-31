<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <p>
        Cette page ne contient que du HTML.<br />
        Veuillez taper votre prénom :
    </p>

    <form action="cible.php" method="post">
        <p>
            <input type="text" name="prenom" />
            <input type="submit" value="Valider" />
        </p>
        <p>
            <textarea name="message" rows="8" cols="45"></textarea>
        </p>
        <p>
            <select name="choix">
                <option value="choix1">Choix 1</option>
                <option value="choix2">Choix 2</option>
                <option value="choix3">Choix 3</option>
                <option value="choix4">Choix 4</option>
            </select>
        </p>

        <p>
            <input type="checkbox" name="frite" id="frites" /> <label for="frites">Frites</label>
            <input type="checkbox" name="epinard" id="epinards" /> <label for="epinards">Epinards</label>
            <input type="checkbox" name="steak" id="steak" /> <label for="steak">Steak</label>
        </p>

        <p>
            Aimez-vous les frites ?
            <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
            <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
        </p>

    </form>


</body>

</html>