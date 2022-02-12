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
   function generationPuce($n):void{
        ?>
        <ul>
            <?php
                for($i=0;$i<=$n;$i++){
                    echo "<li>".$i."</li>";
                }
                
            ?>
        </ul>
        <?php  
   }

?>