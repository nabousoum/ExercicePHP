<!doctype html>
<html>
    <head>
        <title>EXERCICE 1</title>
        <link href="style/styleR.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 1</h1></marquee>
    <div class="princ">
           <div class="text">
                <?php

                include('fonction.php');
                $cote = rand(1,10);
                $perimetre = calcul_perimetre($cote);
                $surface = calcul_surface($cote);
                $diagonale = calcul_diagonale($cote);
                echo "le cote genere est ".$cote."<br>";
                echo "le perimetre du carre est ".$perimetre."<br> la surface du carre est ".$surface."<br> et la diagonale du carrre est ".$diagonale;

                ?>
            </div>
    </div>
    <div class="boutons">
        <button class="btn1" onclick="window.location.href = 'http://127.0.0.1/TP_PHP/';">PRECEDENT</button>
        <button class="btn2"  onclick="window.location.href = '../exercice2/index.php';">SUIVANT</button>
    </div>
</body>

</html>
