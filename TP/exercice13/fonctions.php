<?php 
    function estVide(string $a):bool{
        return is_empty($a);
    }
    function caractereSpeciaux(string $a):bool{
        $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$%^&]).*$/";
        if (preg_match($regex, $a)) {
           return true;
        }
        else{
            return false;
        }
    }
    function lettreMajuscule(string $a):bool{
        $ucl = preg_match('/[A-Z]/', $a); 
        if ("^[$ucl]"){
            return true;
        }
        else{
            return false;
        }
    }
    function terminePoint(string $a):bool{
        $pts = preg_match('/[.]/', $a); 
        if ("[$pts]$"){
            return true;
        }
        else{
            return false;
        }
    }
    function countCaractere($a):bool{
        $nbrCar = strlen($a);
        if($nbrCar<=25){
            return true;
        }
        else{
            return false;
        }
    }
?>


