
<!doctype html>
<html>
    <head>
        <title>EXERCICE 4</title>
        <link href="style/style.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 4</h1></marquee>
    <div class="princ">
        <div class="text">
            <?php
                include('fonctions.php');
                define("VAL_MIN",1);
                define("VAL_MAX",10);
                $a = rand(VAL_MIN,VAL_MAX);
                $b = rand(VAL_MIN,VAL_MAX);
                echo " Avant echange nous avons les valeurs : a = ".$a." et b = ".$b."<br>"; 
                permutation($a,$b);
            
            ?>
        </div>
    </div>
    <div class="boutons">
        <button class="btn1"><a href="../exercice3/index.php">PRECEDENT</a></button>
        <button class="btn2"><a href="../exercice5/index.php">SUIVANT</a></button>
    </div>
</body>
</html>