<?php 
    ini_set('display_errors', 'on');
    include('fonctions.php');
    if($_POST['btn_sub']){
        $chaine=$_POST['tels'];
        testStart($chaine);
    }
?>