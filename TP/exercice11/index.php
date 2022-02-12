<!doctype html>
<html>
    <head>
        <title>EXERCICE 11</title>
        <link href="style/styleEx11.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 11</h1></marquee>
    <div class="princ">
    <?php session_start();?>
       <form method="POST" action ="controller.php">
       <fieldset class="exercice11_fieldset">
        <legend class="exercice11_legend"> GENERATION TABLEAU </legend>
        <div class="text2">
            <div><input class="exercice11_champs" placeholder="entrez un nombre positif" type="text" name="nbr">
            <?php if(isset($_SESSION['err']['nbr'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['nbr'] ?></span>
                    <?php endif?>
            </div>
            <div class="btnStyle"><button class="exercice11_champs" id="btn" name ="btn_sub" type="submit">GENERER!!</button></div>
        </div>
        </form>
        <?php 
        if(isset($_SESSION['err'])){
            unset($_SESSION['err']);
        }

        ?> 
    </div>
    <div class="boutons">
    <button class="btn1" onclick="window.location.href = '../exercice10/index.php';">PRECEDENT</button>
    <button class="btn2"  onclick="window.location.href = '../exercice12/index.php';">SUIVANT</button>
    </div>
</body>
</html>