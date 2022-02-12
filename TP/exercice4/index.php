
<!doctype html>
<html>
    <head>
        <title>EXERCICE 4</title>
        <link href="style/styleEx4.css" rel="stylesheet" />
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
    <button class="btn1" onclick="window.location.href = '../exercice3/index.php';">PRECEDENT</button>
    <button class="btn2"  onclick="window.location.href = '../exercice5/index.php';">SUIVANT</button>
    </div>
</body>
</html>