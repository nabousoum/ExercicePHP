

<!doctype html>
<html>
    <head>
        <title>DATE SUIVANTE-PRECEDENTE</title>
        <link href="css/style2.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>DATE SUIVANTE - PRECEDENTE</h1></marquee>
    <div class="princ">
        <div class="text">
           <?php 
            
            include("fonctions.php");
            session_start();
            if(isset($_POST['btn_sub'])){
                $jour = $_POST['jour'];
                $mois = $_POST['mois'];
                $an = $_POST['an'];
                $_SESSION['post'] = $_POST;
                $tabErreur=[];
                valideNombre($jour,"jour",$tabErreur);
                valideNombre($mois,"mois",$tabErreur);
                valideNombre($an,"an",$tabErreur);
                if(count($tabErreur)==0){
                    $nj = nbrj_jour($mois,$an);
                    echo " Date saisie : ".$jour."/".$mois."/".$an."<br>";
                    echo" Date suivante : ";
                    dateSuivante($jour,$mois,$an);
                    ?>
                    <br>
                    <?php
                    echo "Date precedente : ";
                    datePrecedente($jour,$mois,$an);
                }
                else{
                    $_SESSION['err'] = $tabErreur;
                    header('location:index.php');
                }
            }
            else{
                
                header('location:index.php');
            }

            ?>
        </div>
    </div>
    <button class="btn1"><a href="index.php">PRECEDENT</a></button>
        </body>
        </html>