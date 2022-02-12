<!doctype html>
<html>
    <head>
        <title>SOLUTIONS</title>
        <link href="css/style2Ex6.css" rel="stylesheet" />
    </head>

<body>
    <marquee><h1>SOLUTIONS !!</h1></marquee>
    <div class="princ">
        <div class="text">
            <?php
            session_start();
            include ('fonctions.php');
        
            if( isset($_POST['btn_sub']) )
            {
                $tabErreur=[];
            
                $a = ($_POST['a']);
                $b = ($_POST['b']);
                $c = ($_POST['c']);
                $_SESSION['post'] = $_POST;
                valideNombre($a,"a",$tabErreur);
                valideNombre($b,"b",$tabErreur);
                valideNombre($c,"c",$tabErreur);
                if (count($tabErreur)==0){
                    echo "a = ".$a.", b = ".$b.", c = ".$c."<br>";
                    solution_equation($a,$b,$c);
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