<!doctype html>
<html>
    <head>
        <title>LISTE A PUCE</title>
        <link href="style/style2.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>LISTE A PUCE</h1></marquee>
    <div class="princ">
        <div class="text">
          <?php
            session_start();
            include('fonctions.php');
            if (isset($_POST['btn_sub'])){
                    
                    $N = $_POST['nbr'];
                    if(estNombre($N) && estPositif($N)){
                        ?>
                        <ul>
                            <?php
                                for($i=0;$i<=$N;$i++){
                                    echo "<li>".$i."</li>";
                                }
                                
                            ?>
                        </ul>
                        <?php  
                    }
                    else{
                        echo "entrez un nombre valide";
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