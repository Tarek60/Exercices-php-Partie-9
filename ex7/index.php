<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>
    <body>
        <p><strong>Afficher la date du jour + 20 jours :</strong></p>
        <?php
        echo date('d-m-Y', strtotime('+20 days'))
        ?>
    </body>
</html>
