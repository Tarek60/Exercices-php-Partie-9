<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <p><strong>Timestamp du jour :</strong></p>
        <?php 
        echo time(); //affiche le timestamp du jour
        ?>
        <br>
        <p><strong>Timestamp du mardi 2 août 2016 à 15h00 :</strong></p>
        <?php 
        echo mktime(15,0,0,8,2,2016); //afiche le timestamp du 2 août 2016, à 15h00
        ?>
    </body>
</html>
