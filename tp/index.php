<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tp : Calendrier</title>
    </head>
    <body>
        <h1>Mon calendrier</h1>
        <form action="index.php" method="post">
            <!-- Choix du mois -->
            <select name="month">
                <option value="janvier">Janvier</option>
                <option value="fevrier">Février</option>
                <option value="mars">Mars</option>
                <option value="avril">Avril</option>
                <option value="mai">Mai</option>
                <option value="juin">Juin</option>
                <option value="juillet">Juillet</option>
                <option value="aout">Août</option>
                <option value="septembre">Septembre</option>
                <option value="octobre">Octobre</option>
                <option value="novembre">Novembre</option>
                <option value="decembre">Décembre</option>
            </select>
            <!-- Choix de l'année -->
            <select name="year">
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
            </select>
        </form>
        <?php
        include 'function.php';
        
        ?>
    </body>
</html>
