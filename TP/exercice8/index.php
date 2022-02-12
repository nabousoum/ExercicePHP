<!doctype html>
<html>
    <head>
        <title>EXERCICE 8</title>
        <link href="style/styleEx8.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 8</h1></marquee>
    <div class="princ">
    <?php
          session_start();
        ?>
        <form method ="POST" action="controller.php">
            <fieldset class="exercice8_fieldset">
                <legend class="exercice8_legend"> LISTE A PUCE </legend>
                <div class="text2">
                   <div> <input class="exercice8_champs" type="text" placeholder="donnez un nombre positif" name="nbr">
                   <?php if(isset($_SESSION['err']['nbr'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['nbr'] ?></span>
                    <?php endif?>
                </div>
                   <div class="btnStyle">
                        <button class="exercice8_champs" id ="btn" type="submit" name="btn_sub">LISTER!!</button>
                   </div>
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
    <button class="btn1" onclick="window.location.href = '../exercice7/index.php';">PRECEDENT</button>
    <button class="btn2"  onclick="window.location.href = '../exercice9/index.php';">SUIVANT</button>
    </div>
      </body>
  </html>