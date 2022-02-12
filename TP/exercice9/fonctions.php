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
    function calculMultiplication($n):void{
        echo "table de multiplication de ".$N;
        ?>
        <br>
        <table id="tb" border="1">
            <?php
                for($i=0;$i<=$n;$i++){ ?>
                <tr>
                <td>  <?php echo $i." * ".$n." = ".$i*$n."<br>";} 
                    
            ?> </td>
                </tr>
        </table>
        <?php 
    }

?>