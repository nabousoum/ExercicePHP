
<!doctype html>
<html>
    <head>
        <title>TABLE DE MULTIPLICATION</title>
        <link href="style/style2.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1> TABLE  DE MULTIPLICATION</h1></marquee>
    <div class="princ">
        <div class="text">
            <?php
            include('fonctions.php');
            if(isset($_POST['btn_sub'])){
                        $N = $_POST['nbr'];
            if(estNombre($N) && estPositif($N)){
                
                echo "table de multiplication de ".$N;
                ?>
                <br>
                <table id="tb" border="1">
                    <?php
                        for($i=0;$i<=$N;$i++){ ?>
                        <tr>
                        <td>  <?php echo $i." * ".$N." = ".$i*$N."<br>";} 
                            
                    ?> </td>
                        </tr>
                </table>
                <?php 
            }
            else{
                echo "veuillez saisir un nombre positif";
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

