
<!doctype html>
<html>
    <head>
        <title>EXERCICE 6</title>
        <link href="css/styleEx6.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 6</h1></marquee>
    <div class="princ">
            <?php
          session_start();
        ?>
        <form action="controller.php" method="POST">
          <fieldset class="exercice6_fieldset">
          <legend class="exercice6_legend">EQUATION SECOND DEGRES</legend>
          <div class="text2">
              <div>Veuillez saisir le nombre a :</div>
              <div> <input class="exercice6_champs" type="text" name="a" value="<?php if(!isset($_SESSION['err']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else ''  ?>">
              <?php if(isset($_SESSION['err']['a'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['a'] ?></span>
              <?php endif?></div>
              <br>

              <div>Veuillez saisir le nombre b : </div>
              <div><input class="exercice6_champs" type="text"  name="b" value="<?php if(!isset($_SESSION['err']['b']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['b']; else ''  ?>">
              <?php if(isset($_SESSION['err']['b'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['b'] ?></span>
              <?php endif?></div>
              <br>

             <div> Veuillez saisir le nombre c :</div>
               <div><input class="exercice6_champs" type="text"  name="c" value="<?php if(!isset($_SESSION['err']['c']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['c']; else ''  ?>">
              <?php if(isset($_SESSION['err']['c'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['c'] ?></span>
              <?php endif?></div>
              <br>

             <div> <button id="btn" class="exercice6_champs" type="submit" name="btn_sub"> SOLUTION!!</button></div>
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
    <button class="btn1" onclick="window.location.href = '../exercice5/index.php';">PRECEDENT</button>
        <button class="btn2"  onclick="window.location.href = '../exercice7/index.php';">SUIVANT</button>
    </div>
      </body>
  </html>