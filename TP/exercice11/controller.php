<!doctype html>
<html>
    <head>
        <title>TABLEAUX</title>
        <link href="style/style2Ex11.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>TABLEAU</h1></marquee>
    <div class="princ">
        <div class="text">
          <?php
          ini_set('display_errors', 'on');
            session_start();
            include('fonctions.php');
            if(isset($_POST['btn_sub'])){
                $tabErreur=[];
                $N = $_POST['nbr'];
                $_SESSION['post'] = $_POST;
                valideNombre($N,"nbr",$tabErreur);
                if (count($tabErreur)==0){
                    genererTableau($N);

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
    <button class="btn1"  onclick="window.location.href = 'index.php';">PRECEDENT</button>
</body>
</html>