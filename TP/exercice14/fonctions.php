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
    function nbrOperateur(array $tabNums,$n):void{
        $cpt77=0;
        $cpt78=0;
        $cpt76=0;
        $cpt76=0;
        $cpt70=0;
        $cpt75=0;
        for($i=0;$i<$n;$i++){
            if(testStart($tabNums[$i])){
                $test=substr($$tabNums[$i],0,2);
                if ($test=='77'){
                    $cpt77++;
                }
                elseif($test=='78'){
                    $cpt78++;
                }
                elseif($test=='76'){
                    $cpt76++;
                }
                elseif($test=='70'){
                    $cpt70++;
                }
                elseif($test=='75'){
                    $cpt75++;
                }
            }
        }
        echo "le  nombre de 77 est ".$cpt77." le nombre de 78 est ".$cpt78." le nombre de 76 est".$cpt76." le nombre de 70 est ".$cpt70." et le nombre de 75 est ".$cpt75;
        
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
    function tabNumValide($a):void{
        echo $a;
    }
    function tabNumInvalide($a):void{
        echo $a;
    }
?>