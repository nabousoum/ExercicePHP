<?php
       function estNombre($a):bool{
        return is_numeric($a);
    }
    function estEntier($a):bool{
      return ctype_digit($a);
    }
    function valeurControl($a):bool{
       if ($a<=200){
        return false;
       }
       else {
           return true;
       }
    }
    function valideNombre($a, string $chaine,array &$tabErreur){
        if (!estNombre($a)){
            $tabErreur[$chaine] = "veuillez saisir un nombre";
        }
        elseif(!estEntier($a)){
                $tabErreur[$chaine] = "veuillez saisir un nombre entier";
        }
        elseif(!valeurControl($a)){
            $tabErreur[$chaine] = "veuillez saisir un nombre superieur a 10000";
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
    function moyenne($n,array $tab):float{
        $som=0;
        for($i=1;$i<=$n;$i++){
           $som=$som+$tab[$i];
        }
        return $som/$n;
    }
    function genererTableau($N):void{
        $nbr3=0;
        $nbr2=0;
        $nbr=0;
        $tab2 = [];
        $tab3 = [];
        for($i=1;$i<=$N;$i++){
            if (premier($i)){
                $nbr++;
                $tab1[$nbr]=$i;
            }
        }
        
        ?>
        <br><br>
        <?php
        $moyenne = moyenne($nbr,$tab1);
        for($i=1;$i<=$nbr;$i++){
            if ($tab1[$i]<$moyenne){
                $nbr2++;
                $tab2[$nbr2]=$tab1[$i];
            }
        }
        for($i=1;$i<=$nbr;$i++){
            if ($tab1[$i]>$moyenne){
                $nbr3++;
                $tab3[$nbr3]=$tab1[$i];
            }
        }
       
        ?>
        

        <table border="1">
           <tr>
               <th>NOMBRES PREMIERS INFERIEURS</th>
               <th>NOMBRES PREMIERS SUPERIEURS</th>
            </tr>
            <tr>
                        <td>
                        <?php  for($i=1;$i<=$nbr2;$i++){ ?>
                    
                        <?php
                        
                            echo $tab2[$i];
                        
                    ?>
                    
        
                        <?php } ?>
                </td>
                <td>
                        <?php  for($i=1;$i<=$nbr3;$i++){ ?>
                    
                        
                        <?php
                        
                            echo $tab3[$i];
                        
                        ?>
        
                        <?php } ?>
                </td>
            </tr>
        </table>
        <?php
       // $T = ['premier' => $pre, 'inferieur' => $inf, 'superieur' => $sup ];
         //foreach ($T as $clef => $valeur){
           // echo $clef." a ".$valeur;
        // }
    }
?>