
<!doctype html>
<html>
    <head>
        <title>LISTE DE CHAMPS</title>
        <link href="style/style2Ex10.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>LISTE DE CHAMPS</h1></marquee>
    <div class="princ">
        <div class="text">
          <?php
            session_start();
            include('fonctions.php');
            if(isset($_POST['btn_sub'])){
                $tabErreur=[];
                $N = $_POST['nbr'];
                $_SESSION['post'] = $_POST;
                valideNombre($N,"nbr",$tabErreur);
                if (count($tabErreur)==0){
                    generationChamps($N);
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