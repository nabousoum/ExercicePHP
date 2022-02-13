<?php
        session_start();
            include('fonctions.php');
            if(isset($_POST['btn_sub'])){
                $tabErreur=[];
                $N = $_POST['tailleMat'];
                $_SESSION['post'] = $_POST;
                valideNombre($N,"tailleMat",$tabErreur);
                if (count($tabErreur)==0){
                   header('location:index.php');

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