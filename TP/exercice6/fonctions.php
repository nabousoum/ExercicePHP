<?php

    include('../exercice3/fonctions.php');

    function estNombre($a):bool{
        return is_numeric($a);
    }
    function estVide($a):bool{
        return empty($a);
    }
    
    function valideNombre($a, string $chaine,array &$tabErreur){
        if (!estNombre($a)){
            $tabErreur[$chaine] = "veuillez saisir un nombre";
        }
        else{
            if(estVide($a)){
                $tabErreur[$chaine] = "le champs ne doit pas etre vide";
            }
        }
    }

    function solution_equation($a,$b,$c){
        if($a==0){
            echo "la solutions est ".$b/$c;
        }
        else{
            $delta = carre($b)-4*produit($a,$c);
            if($delta==0){
                echo "la solution est ".-$b/2*$a;
            }
            elseif($delta<0){
                echo "pas de solutions";
            }
            else{
                $x1 = (-$b-sqrt($delta)) / (2*$a);
                $x2 = (-$b+sqrt($delta)) / (2*$a);
                echo "la premiere solution est ".$x1." et la deuxieme solution est ".$x2;
            }
        }
    }
?>