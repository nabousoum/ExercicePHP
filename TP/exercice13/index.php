
<?php 
        
    session_start();
    $color="#ce109e";
    if(isset($_POST['btn_sub'])){
        if (empty($_POST['phrases'])){
            $color="red";
            $msg="veuillez entrez un texte";
       }
    }
?>


<!doctype html>
<html>
    <head>
        <title>EXERCICE 13</title>
        <link href="css/styleEx13.css" rel="stylesheet" />
    </head>

    <body>
        <marquee><h1>EXERCICE 13</h1></marquee>
        <div class="form">
        <?php
          session_start();
          include('fonctions.php');
        ?>
            <div class="formG">
                <div class="form1">
                    <label>Entrez des phrases:</label>
                    <form action="index.php" method="post">
                        <textarea style="border : 5px solid <?= $color ?>" id="phrases" name="phrases" rows="30" cols="80"><?= filter_input(INPUT_POST, 'phrases') ?></textarea>
                        <?php if(isset ($_SESSION['err'])){
                        echo "invalide";
                        } ?>
                        <?php if(!isset($_SESSION['err']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['phrases']; else ''  ?>
                        <button id="btn" name="btn_sub">CORRIGER</button>
                        
                    </form>
                </div>
                <?php 
                $chaine = $_POST['phrases'];
                ?>
                <div class="form2">
                <label>Correction:</label>
                    <form method="post">
                        <textarea  readonly='yes'  style="border : 5px solid #ce109e" id="phrases" name="phrases" rows="30" cols="80"><?php  caractereSpeciaux($chaine); ?></textarea>
                    </form>
                </div>
            </div>
         
        </div>
        <div class="boutons">
        <button class="btn1" onclick="window.location.href = '../exercice12/index.php';">PRECEDENT</button>
        <button class="btn2"  onclick="window.location.href = '../exercice14/index.php';">SUIVANT</button>
        </div>
    </body>

</html>