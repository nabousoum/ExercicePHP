<?php
    function distance(array $a ,array $b,$Xa,$Xb,$Ya,$Yb):void{
         $dist = sqrt( pow(($Xa-$Xb),2) + pow(($Ya-$Yb),2) );
         echo "la distance entre les points a et b est ".$dist;
    }
?>