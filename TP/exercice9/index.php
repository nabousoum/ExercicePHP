<!doctype html>
<html>
    <head>
        <title>EXERCICE 9</title>
        <link href="style/styleEx9.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 9</h1></marquee>
    <div class="princ">
        <?php session_start();?>
        <form action="controller.php" method="POST">
           <fieldset class="exercice9_fieldset">
                <legend class="exercice9_legend"> TABLE DE MULTIPLICATION </legend>
                <div class="text2">
                    <div><input class="exercice9_champs" placeholder="donnez un nombre positif" type = "text" name="nbr">
                    <?php if(isset($_SESSION['err']['nbr'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['nbr'] ?></span>
                    <?php endif?>
                      </div>
                    <div class="btnStyle"><button  class="exercice9_champs" id ="btn" name="btn_sub" type="submit">GENERER !!</button></div>
                </div>
            </fieldset>
         </form>
         <?php 
        if(isset($_SESSION['err'])){
            unset($_SESSION['err']);
        }

        ?> 
    </div>
    <div class="boutons">
    <button class="btn1" onclick="window.location.href = '../exercice8/index.php';">PRECEDENT</button>
    <button class="btn2"  onclick="window.location.href = '../exercice10/index.php';">SUIVANT</button>
    </div>
</body>
</html>



