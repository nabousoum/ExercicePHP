
<!doctype html>
<html>
    <head>
        <title>EXERCICE 3</title>
        <link href="style/styleEx3.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 3</h1></marquee>
    <div class="princ">
        <div class="text">
            <?php

            include('fonctions.php');
            define("VAL_MIN",1);
            define("VAL_MAX",10);
            $a = rand(VAL_MIN,VAL_MAX);
            $b = rand(VAL_MIN,VAL_MAX);
            echo "la valeur de a est ".$a." et la valeur de b est ".$b."<br>";

            $som = somme($a,$b);
            $expA = exponentiel($a);
            $expB = exponentiel($b);
            $diff = difference($a,$b);
            $prod = produit($a,$b); 
            $mod = modulo($a,$b);
            $div = division($a,$b);
            $carA = carre($a);
            $carB = carre($b);

            echo "la somme des deux nombres est ".$som."<br>";
            echo "l exponentiel de a est ".$expA."<br>";
            echo "l exponentiel de b est ".$expB."<br>";
            echo "la difference des deux nombres est ".$diff."<br>";
            echo "le produit des deux nombres est ".$prod."<br>";
            echo "le modulo des deux nombres est ".$mod."<br>";
            echo "la division des deux nombres est ".$div."<br>";
            echo "le carre de a est ".$carA."<br>";
            echo "le carre de b est ".$carB."<br>";
            ?>

        </div>
    </div>
    <div class="boutons">
    <button class="btn1" onclick="window.location.href = '../exercice2/index.php';">PRECEDENT</button>
        <button class="btn2"  onclick="window.location.href = '../exercice4/index.php';">SUIVANT</button>
    </div>
</body>
</html>