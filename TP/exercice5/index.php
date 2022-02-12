<!doctype html>
<html>
    <head>
        <title>EXERCICE 5</title>
        <link href="style/styleEx5.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 5</h1></marquee>
    <div class="princ">
        <div class="text">
            <?php
            include('fonctions.php');
            define("VAL_MIN",0);
            define("VAL_MAX",10);
            $Xa = rand(VAL_MIN,VAL_MAX);
            $Xb = rand(VAL_MIN,VAL_MAX);
            $Ya = rand(VAL_MIN,VAL_MAX);
            $Yb = rand(VAL_MIN,VAL_MAX);
            $A = ["xA" => $Xa,"yA" => $Ya];
            $B = ["xB" => $Xb,"yB" => $Yb];
            echo "Point A:";
            foreach($A as $val){
                echo $val." ";
            }
            ?>
            <br>
            <?php
            echo "Point B:";
            foreach($B as $valb){
                echo $valb." ";
            }
            ?>
            <br>
            <?php
            distance($A,$B,$Xa,$Xb,$Ya,$Yb);
        
            ?>
        </div>
    </div>
    <div class="boutons">
    <button class="btn1" onclick="window.location.href = '../exercice4/index.php';">PRECEDENT</button>
    <button class="btn2"  onclick="window.location.href = '../exercice6/index.php';">SUIVANT</button>
    </div>
</body>
</html>

