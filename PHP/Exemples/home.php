<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>
    <h1>Ma page web</h1>
    <p>Aujourd'hui nous sommes le <?php date_default_timezone_set('Europe/Paris');
                                    echo date('d/m/Y h:i:s'); ?>.</p>
</body>

<?php
echo "J'habite en Chine."; // Cette ligne indique où j'habite

// La ligne suivante indique mon âge
echo "J'ai 92 ans.";
?>

<?php
/* La ligne suivante indique mon âge
Si vous ne me croyez pas...
... vous avez raison ;o) */
echo "J'ai 92 ans.";
?>

</html>