
<?php include('fonctions.php');?>
<!doctype html>
<html>
    <head>
        <title>EXERCICE 12</title>
        <link href="style/styleEx12.css" rel="stylesheet" />
    </head>

    <body>
        <marquee><h1>EXERCICE 12</h1></marquee>
        <div class="global">
            <form method="post" action="index.php" >
            <div class="test">
                <p>CHOISISSEZ UNE LANGUE:</p>
                <div class="select-style">
                    <select name="langues">
                        <option  value="fr" selected>Français</option>
                        <option value="en">Anglais</option>
                    </select>
                </div>
                <button id="btn" name="btn_sub">OK</button>
             
            </form>
       
        <?php if (isset($_POST['langues'])){ 
            $tabLangues = $_POST['langues'];    
        ?>
            <?php switch($tabLangues) {
                case 'fr':
            ?>
            <table class="tab" border="1">
                <tr>
                    <td>Janvier</td>
                    <td>Avril</td>
                    <td>Juillet</td>
                    <td>Octobre</td>
                </tr>
                <tr>
                    <td>Fevrier</td>
                    <td>Mai</td>
                    <td>Aout</td>
                    <td>Novembre</td>
                </tr>
                <tr>
                    <td>Mars</td>
                    <td>Juin</td>
                    <td>Septembre</td>
                    <td>Decembre</td>
                </tr>
            </table>
            <?php break; ?>
            <?php case 'en':  ?>
            <table class="tab" border="1">
                <tr>
                    <td>January</td>
                    <td>April</td>
                    <td>July</td>
                    <td>October</td>
                </tr>
                <tr>
                    <td>February</td>
                    <td>May</td>
                    <td>August</td>
                    <td>November</td>
                </tr>
                <tr>
                    <td>March</td>
                    <td>June</td>
                    <td>September</td>
                    <td>December</td>
                </tr>
            </table>

            <?php break; ?>
            <?php  }  ?>
    <?php } ?>
    </div>
    </div>
    <div class="boutons">
    <button class="btn1" onclick="window.location.href = '../exercice11/index.php';">PRECEDENT</button>
    <button class="btn2"  onclick="window.location.href = '../exercice13/index.php';">SUIVANT</button>
    </div>
    </body>
</html>