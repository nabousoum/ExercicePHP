<!doctype html>
<html>
    <head>
        <title>EXERCICE 11</title>
        <link href="style/style.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>EXERCICE 11</h1></marquee>
    <div class="princ">
       <form method="POST" action ="controller.php">
       <fieldset class="exercice11_fieldset">
        <legend class="exercice11_legend"> GENERATION TABLEAU </legend>
        <div class="text2">
            <div><input class="exercice11_champs" placeholder="entrez un nombre positif" required="required" type="text" name="nbr"></div>
            <div><button class="exercice11_champs" id="btn" name ="btn_sub" type="submit">GENERER!!</button></div>
        </div>
        </form>
    </div>
    <div class="boutons">
        <button class="btn1"><a href="../exercice10/index.php">PRECEDENT</a></button>
        <button class="btn2"><a href="../exercice12/index.php">SUIVANT</a></button>
    </div>
</body>
</html>