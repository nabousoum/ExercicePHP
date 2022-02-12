<?php
    function valideNombre($a,string $chaine,array &$tabErreur ):void{
            if(estVide($a)){
                $tabErreur[$chaine]="le champs ne doit pas etre vide";
            }
        
             if(!estNombre($a)){
                 $tabErreur[$chaine]="Veuillez saisir un nombre";
             }
        }
        function estNombre($a):bool{
            return is_numeric($a); 
        }
        function estVide($a):bool{
            return empty($a); 
        }
    function nbrj_jour($mois,$an):int{
        if($mois==2){
            if ( ($an%100==0 && $an%400==0) || ($an%4==0 && $an%100!=0) ){
                return 29;
            }
            else {
                return 28;
            }
        }
        if($mois==4 || $mois==6 || $mois==9 || $mois==11){
            return 30;
        }
        if($mois==1 || $mois==3 || $mois==5 || $mois==7 || $mois==8 || $mois==10 || $mois==12){
            return 31;
        } 
    }
    function dateValide($jour,$mois,$an):bool{
        $nj = nbrj_jour($mois,$an);
        if($jour<=1 || $jour<=$nj){
            return true;
            }
            else{
            return false;
            }
    }
   function dateSuivante($jour,$mois,$an){
       if (dateValide($jour,$mois,$an)){
        $nj = nbrj_jour($mois,$an);
        if($jour<$nj){
            $jour = $jour+1;
           
            }
            else {
               if($mois<12){
               $jour=01;
               $mois=$mois+1;
               }
               else{
               $jour=1;
               $mois=1;
               $an=$an+1;
               }
            }
        echo $jour."/".$mois."/".$an;
       }
       else{
           echo "date invalide";
       }
    }
    function datePrecedente($jour,$mois,$an){
       
        if (dateValide($jour,$mois,$an)){
            if($jour==1){
                if($mois==1){
                    $jour=31;
                    $mois=12;
                    $an=$an-1;
                }
                else{
                    if($mois==3){
                        if ( ($an%100==0 && $an%400==0) || ($an%4==0 && $an%100!=0) ){
                            $jour=29;
                        }
                        else {
                            $jour=28;
                        }
                        $mois=2;
                        $an=$an;
                    }
                    else{
                        if($mois==5 || $mois==7 || $mois==10 || $mois==12){
                            $jour=30;
                        }
                        else{
                            $jour=31;
                        }
                        $mois= $mois-1;
                        $annee=$an;
                    }
                   
                    $mois=$mois-1;
                }
            }
            else{
                $jour=$jour-1;
                $mois=$mois;
                $an=$an;
            }
         echo $jour."/".$mois."/".$an;
        }
        else{
            echo "date invalide";
        }
     }
?>