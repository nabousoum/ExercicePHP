
<!doctype html>
<html>
    <head>
        <title>EXERCICE 10</title>
        <link href="style/styleEx10.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 10</h1></marquee>
    <div class="princ">
    <?php session_start();?>
       <form method="POST" action ="controller.php">
       <fieldset class="exercice10_fieldset">
        <legend class="exercice10_legend"> LISTE DE CHAMPS </legend>
        <div class="text2">
            <div><input class="exercice10_champs" placeholder="entrez un nombre positif" type="text" name="nbr">
            <?php if(isset($_SESSION['err']['nbr'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['nbr'] ?></span>
                    <?php endif?>
            </div>
            <div class="btnStyle"><button class="exercice10_champs" id="btn" name ="btn_sub" type="submit">GENERER!!</button></div>
        </div>
        </form>
        <?php 
        if(isset($_SESSION['err'])){
            unset($_SESSION['err']);
        }

        ?> 
    </div>
    <div class="boutons">
    <button class="btn1" onclick="window.location.href = '../exercice9/index.php';">PRECEDENT</button>
    <button class="btn2"  onclick="window.location.href = '../exercice11/index.php';">SUIVANT</button>
    </div>
</body>
</html>
            


 