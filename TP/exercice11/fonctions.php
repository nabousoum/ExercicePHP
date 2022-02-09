<?php
       function estNombre($a):bool{
        return is_numeric($a);
    }
    function estEntier($a):bool{
      return ctype_digit($a);
    }
    function valeurControl($a):bool{
       if ($a<=10000){
        return false;
       }
       else {
           return true;
       }
    }
    function premier($a):bool{
        if ($a == 1)
        return false;
        for ($i = 2; $i <= $a/2; $i++){
            if ($a % $i == 0)
                return false;
        }
        return true;
    }
    function moyenne($a):float{
        return $moy = $a/2;
    }
    
?>