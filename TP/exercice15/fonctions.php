<?php 
    function estNombre($a):bool{
        return is_numeric($a);
    }
    function estEntier($a):bool{
      return ctype_digit($a);
    }
    function valeurControl($a):bool{
       if ($a<=5){
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
            $tabErreur[$chaine] = "veuillez saisir un nombre superieur a 5";
        }
    }
    function genererMatrice($a){
        $tab=array();
        for($i=0;$i<$a;$i++){
            $tab[$i] = array();
            for($j=0;$j<$a;$j++){
                $tab[$i][$j] = 1;
            }
        }
        for($i=0;$i<$a;$i++){
            for($j=0;$j<$a;$j++){
                echo $tab[$i][$j];
            }
            echo "<br>";
        }
    }
   function colorierDessous($a){
    $tab=array();
        for($i=1;$i<$a;$i++){
            for($j=0;$j<($i-1);$j++){
                $tab[$i][$j]=0;
            }
        }
        var_dump ($tab);
    }
    function colorierDessus($a,array $tab){
        for($i=0;$i<($a-1);$i++){
            for($j=$i+1;$j<$a;$j++){
                $tab[$i][$j]=0;
            }
        }
        var_dump($tab);
    }
?>