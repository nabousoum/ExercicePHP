<!doctype html>
<html>
    <head>
        <title>EXERCICE 9</title>
        <link href="style/style.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 9</h1></marquee>
    <div class="princ">
        <form action="controller.php" method="POST">
           <fieldset class="exercice9_fieldset">
                <legend class="exercice9_legend"> TABLE DE MULTIPLICATION </legend>
                <div class="text2">
                    <div><input class="exercice9_champs" placeholder="donnez un nombre positif" required ="required" type = "text" name="nbr"></div>
                    <div><button  class="exercice9_champs" id ="btn" name="btn_sub" type="submit">GENERER !!</button></div>
                </div>
            </fieldset>
         </form>
    </div>
    <div class="boutons">
        <button class="btn1"><a href="../exercice8/index.php">PRECEDENT</a></button>
        <button class="btn2"><a href="../exercice10/index.php">SUIVANT</a></button>
    </div>
</body>
</html>



