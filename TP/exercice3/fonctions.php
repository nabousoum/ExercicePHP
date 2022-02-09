<?php

    function somme($a,$b){
        return $a+$b;
    }
    function exponentiel($a){
        return exp($a);
    }
    function difference($a,$b){
        return $a-$b;
    }
    function produit($a,$b){
        return $a*$b;
    }
    function modulo($a,$b){
        if($b==0){
            return "erreur";
        }
        else{
            return $a%$b;
        }
    }
    function division($a,$b){
        if($b==0){
            return "erreur";
        }
        else{
            return $a/$b;
        }
    }
    function carre($a){
        return $a*$a;
    }
?>