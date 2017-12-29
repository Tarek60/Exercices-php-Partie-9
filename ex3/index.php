<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <h1>Date du jour</h1>
        <?php
        setlocale(LC_TIME, 'fr_FR.UTF8');
        echo strftime('%A %d %B %Y');
        ?>
    </body>
</html>
