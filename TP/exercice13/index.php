
<?php include ('fonctions.php')?>
<!doctype html>
<html>
    <head>
        <title>EXERCICE 13</title>
        <link href="style/style.css" rel="stylesheet" />
    </head>

    <body>
        <marquee><h1>EXERCICE 13</h1></marquee>
        <div class="form">
            <label for="story">Entrez des phrases:</label>
            <form action="index.php" method="post">
                <textarea  id="phrases" name="phrases"
                        rows="30" cols="50">
                </textarea>
            
                <button name="btn_sub">CORRIGER</button>
                
            </form>
        </div>
        <div class="boutons">
        <button class="btn1"><a href="../exercice12/index.php">PRECEDENT</a></button>
        <button class="btn2"><a href="../exercice14/index.php">SUIVANT</a></button>
        </div>
    </body>

</html>