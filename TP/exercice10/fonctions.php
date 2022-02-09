<?php
    function estNombre($a):bool{
        return is_numeric($a);
    }
    function estPositif($a):bool{
        if ($a>0){
            return true;
        }
        else{
            return false;
        }
    }
    

?>