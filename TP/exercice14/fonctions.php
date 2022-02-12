<?php
    function testLongueur($a):bool{
        $searchString = " ";
        $replaceString = "";
        $aV=str_replace($searchString,$replaceString,$a);
        if(strlen($aV)==9){
            return true;
        }
        else{
            return false;
        }
    }
    function testStart( $a):bool{
        $searchString = " ";
        $replaceString = "";
        $aV=str_replace($searchString,$replaceString,$a);
        $nb = substr($aV,0,2);
        if ($nb=='77' || $nb=='78' || $nb=='76' || $nb=='70' || $nb=='75'){
            return true;
        }
        else{
            return false;
        }
    }
    function testChiffre($a):bool{
        $searchString = " ";
        $replaceString = "";
        $aV=str_replace($searchString,$replaceString,$a);
        if (!ctype_digit($aV)) {
            return false;
        }
        else{
            return true;
        }
    }
    function valideNumero($a):bool{
        if( testLongueur($a) && testStart($a) && testChiffre($a)  ){
            return true;
        }
        else{
            return false;
        }
    }
?>