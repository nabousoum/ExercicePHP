
<!doctype html>
<html>
    <head>
        <title>TABLE DE MULTIPLICATION</title>
        <link href="style/style2Ex9.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1> TABLE  DE MULTIPLICATION</h1></marquee>
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
                
                    calculMultiplication($N);
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

