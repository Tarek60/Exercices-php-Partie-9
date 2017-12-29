<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <p><strong>Nombre de jour qui sépare la date du jour avec le 16 mai 2016 :</strong></p>
        <?php
        $date1 = date_create("2017-12-19");
        $date2 = date_create("2016-05-16");
        $diff = date_diff($date1, $date2);
        echo $diff->format("%a jours");
        ?>
    </body>
</html>
