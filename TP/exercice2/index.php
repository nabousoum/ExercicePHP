<!doctype html>
<html>
    <head>
        <title>EXERCICE 2</title>
        <link href="style/style.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 2</h1></marquee>
    <div class="princ">
        <div class="text">
           <?php
            include('fonctions.php');
            define("VAL_MIN",1);
            define("VAL_MAX",10);
            $longueur = rand(VAL_MIN,VAL_MAX);
            $largeur = rand(VAL_MIN,VAL_MAX);
            $perimetre = calcul_perimetre($longueur,$largeur);
            $surface = calcul_surface($longueur,$largeur);
            $diagonale = calcul_diagonale($longueur,$largeur);

            echo " la longueur genere est ".$longueur." et la largeur genere est ".$largeur."<br>";
            echo "le perimetre du rectangle est ".$perimetre."<br> la surface du rectangle est ".$surface."<br> et le diagonale du rectangle est ".$diagonale;
            ?>
        </div>
    </div>
    <div class="boutons">
        <button class="btn1"><a href="../exercice1/index.php">PRECEDENT</a></button>
        <button class="btn2"><a href="../exercice3/index.php">SUIVANT</a></button>
    </div>
</body>
</html>

