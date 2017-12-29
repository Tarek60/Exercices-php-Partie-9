<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 8</title>
    </head>
    <body>
        <p><strong>Afficher la date du jour - 22 jours :</strong></p>
        <?php
        echo date('d-m-Y', strtotime('-22 days'))
        ?>
    </body>
</html>
