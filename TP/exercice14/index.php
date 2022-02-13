
<?php 
        session_start();
        $color="#ce109e";
        if(isset($_POST['btn_sub'])){
            if (empty($_POST['tels'])){
                $color="red";
           }
        }
?>
<!doctype html>
<html>
    <head>
        <title>EXERCICE 14</title>
        <link href="style/styleE14.css" rel="stylesheet" />
    </head>

    <body>
        <marquee><h1>EXERCICE 14</h1></marquee>
        <?php include('fonctions.php');?>
        <div class="form">
            
            <div class="formG">
                <div class="form1">
                    <form action="index.php" method="post">
                        <div class="champs">
                            <label>saisissez le numero:</label>
                            <textarea rows="10" cols="80" style ="border:3px solid <?= $color ?>" name="tels" ><?= filter_input(INPUT_POST, 'tels') ?></textarea>
                            <button id="btn" name="btn_sub">VALIDER</button>
                        </div>
                    </form>
            </div>
           <?php 
            if (isset($_POST['btn_sub'])){
                $chaine = $_POST['tels'];}
            ?>
            <div class="form2">
                <div class="form2-1">
                <label for="story2">Les numeros valides:</label>
                    <form method="post">
                        <textarea  readonly='yes'  id="telsVal" name="telsVal" rows="10" cols="80"><?php  if (valideNumero($chaine)){ tabNumValide($chaine); }?></textarea>
                    </form>
                </div>
                <div class="form2-2">
                <label for="story3">Les numeros invalides:</label>
                      <form method="post">
                        <textarea  readonly='yes'  id="telsNVals" name="telsNVals" rows="10" cols="80"><?php  if (!valideNumero($chaine)){ tabNumInvalide($chaine);}?></textarea>
                    </form>
                </div>
            </div>
        </div>
        <div class="boutons">
        <button class="btn1" onclick="window.location.href = '../exercice13/index.php';">PRECEDENT</button>
        <button class="btn2"  onclick="window.location.href = '../exercice15/index.php';">SUIVANT</button>
        </div>
    </body>
</html>