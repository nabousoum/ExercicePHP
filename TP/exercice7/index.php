
<!doctype html>
<html>
    <head>
        <title>EXERCICE 7</title>
        <link href="css/Style.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 7</h1></marquee>
    <div class="princ">
          <?php
            session_start();
          ?>
          <form action="controller.php" method="POST">
          <fieldset class="exercice7_fieldset">
          <legend class="exercice7_legend">DATE SUIVANTE-PRECEDENTE</legend>
          <div class="text2">

             <div> Veuillez saisir le jour :</div>
              <div> <input class="exercice7_champs" type="text" required="required" name="jour" value="">
              <?php if(isset($_SESSION['err']['jour'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['jour'] ?></span>
              <?php endif?></div>
              <br>

              <div>Veuillez saisir le mois :</div> 
              <div><input class="exercice7_champs" type="text" required="required" name="mois" value="">
              <?php if(isset($_SESSION['err']['mois'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['mois'] ?></span>
              <?php endif?></div>
              <br>

              <div>Veuillez saisir l annee :</div>
              <div> <input class="exercice7_champs" type="text" required="required" name="an" value="">
              <?php if(isset($_SESSION['err']['an'])):?>
                        <span style="color:red"><?php echo $_SESSION['err']['an'] ?></span>
              <?php endif?></div>
              <br>

              <button id="btn" class="exercice7_champs" type="submit" name="btn_sub"> CALCUL!! </button>
            </div>
          </form>

          <?php 
          if(isset($_SESSION['err'])){
              unset($_SESSION['err']);
          }

          ?>
    </div>
    <div class="boutons">
        <button class="btn1"><a href="../exercice6/index.php">PRECEDENT</a></button>
        <button class="btn2"><a href="../exercice8/index.php">SUIVANT</a></button>
    </div>
        </body>
        </html>