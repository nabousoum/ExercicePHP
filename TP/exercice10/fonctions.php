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

    function valideNombre($a, string $chaine,array &$tabErreur){
        if (!estNombre($a)){
            $tabErreur[$chaine] = "veuillez saisir un nombre";
        }
        else{
            if(!estPositif($a)){
                $tabErreur[$chaine] = "veuillez saisir un nombre positif";
            }
        }
    }
    function generationChamps($n):void{
        for($i=0;$i<$n;$i++){ ?>
            <label>input:<?php $i+1 ?></label>
            <input class="champs" type="text"> <br> </br>
            <?php }
    }
    

?>