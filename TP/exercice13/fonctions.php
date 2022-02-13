<?php 
    function estVide($a):bool{
        return empty($a);
    }
    
    function testNbrCarac($a):bool{
        if (strlen($a)<25){
            return true;
        }
        else{
            return false;
        }
    }
    
    function caractereSpeciaux($a){
        $cpt=0;
        for($i=0;$i<strlen($a);$i++){
            if($a[$i]=="."){
                $cpt++;
            }
        }
        $tabPhrases = explode(".",$a);
      //  $regex = '/[^a-zA-Z_.-0-9\s\.\'\;\,\?\]/';
        $phrases="";
        for($i=0;$i<$cpt;$i++){
            if (testNbrCarac($tabPhrases[$i]) ){
                unset($tabPhrases[$i]);
            }
             else{
                $tabPhrases[$i][0]=strtoupper($tabPhrases[$i][0]);
                 if($i==0){
                     $phrases=$tabPhrases[$i].".";
                 }
                 else {
                    $phrases = $phrases.$tabPhrases[$i].".";
                 }
             }
        }
        $phr=trim($phrases);
        $str = preg_replace('/\s\s+/', ' ', $phr);
        $str = preg_replace('/[^a-zA-Z_.-0-9\s\,\;\'\?]/', '', $str);
        echo ucfirst($str);
    }

   
   function valideTextarea($a,string $chaine,array &$tabErreur):void{
    if (estVide($a)){
        $tabErreur[$chaine] = "veuillez saisir un texte";
    }
   }
?>


