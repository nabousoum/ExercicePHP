<?php
ini_set('display_errors', 'on');
    $color="#ce109e";
    if(isset($_POST['btn_sub'])){
        if (empty($_POST['tailleMat'])){
            $color="red";
       }
    }
?>
<!doctype html>
<html>
    <head>
        <title>EXERCICE 15</title>
        <link href="style/styleEx15.css" rel="stylesheet" />
    </head>

    <body>
        <marquee><h1>EXERCICE 15</h1></marquee>
        <?php
          session_start();
          include('fonctions.php');
        ?>
        <div class="main">
            <div class="part1">
                <div id="centrer">
                    <form action="index.php" method="post">
                        <div class="champs">
                            <label>Donnez la taille de la matrice: </label>
                            <input type="text" name="tailleMat" style="border : 3px solid <?= $color ?>">
                            <?php if(isset($_SESSION['err']['tailleMat'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['tailleMat'] ?></span>
                    <?php endif?>
                        </div>
                        <div class="select">
                            <label>Choisissez une couleur:</label>
                            <select name="options">
                                <option  value="rouge">Rouge</option>
                                <option value="bleue">Bleue</option>
                            </select>
                        </div>
                        <div class="btnRadio">
                        <label>Donnez la position de la matrice: </label>
                            <input type="radio" id="haut" name="position" value="haut">
                            <label for="haut">HAUT</label>
                            <input type="radio" id="bas" name="position" value="bas">
                            <label for="bas">BAS</label>
                        </div>
                        <div class="btn">
                            <button name="btn_sub">DESSINER</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php 
        if(isset($_SESSION['err'])){
            unset($_SESSION['err']);
        }
            if(isset($_POST['btn_sub'])){
                $mat=$_POST['tailleMat'];
            }
        ?> 
         
            <div class="part2">
                <div class="matrice">
                     <?php genererMatrice($mat); ?>
                </div>
            </div>
        </div>
        <div class="boutons">
                <button class="btn1" onclick="window.location.href = '../exercice14/index.php';">PRECEDENT</button>
                <button class="btn2"  onclick="window.location.href = '../exercice16/index.php';">SUIVANT</button>
            </div>
    </body>
</html>