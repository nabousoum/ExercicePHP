
<!doctype html>
<html>
    <head>
        <title>LISTE DE CHAMPS</title>
        <link href="style/style2.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>LISTE DE CHAMPS</h1></marquee>
    <div class="princ">
        <div class="text">
          <?php
            include('fonctions.php');
            if (isset($_POST['btn_sub'])){
                    $N = $_POST['nbr'] ;
                    if(estNombre($N) && estPositif($N)){
                    for($i=0;$i<$N;$i++){?>
                    <input class="champs" type="text"> <br> 
                    <?php }
                    }
                    else{
                        echo "veuillez donner un nombre positif";
                    }
            }
            else{
                header('location:index.php');
            }
            ?>
   
        </div>
    </div>
    <button class="btn1"><a href="index.php">PRECEDENT</a></button>
</body>
</html>