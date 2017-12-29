<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        echo 'Il y a ' . $number . ' jours dans le mois de février de l\'année 2016.'
        ?>
    </body>
</html>
