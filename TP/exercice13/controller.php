<?php 
ini_set('display_errors', 'on');
    session_start();
    include('fonctions.php');
    if( isset($_POST['btn_sub']) ){
        $tabErreur = [];
        $chaine = $_POST['phrases'];
        $_SESSION['phrases']=$_POST['phrases'];
        valideTextarea($chaine,"phrases",$tabErreur);
        if( count($tabErreur)==0 ){
            header('location:index.php');
        }
        else{
            $_SESSION['err']=$tabErreur;
            header('location:index.php');
        }
    }
    else{
        header('location:index.php');
    }
        
?>