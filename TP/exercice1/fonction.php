<?php 
    function calcul_perimetre(int $cote):int{
        return $cote*4;
    }
    function calcul_surface(int $cote):int{
        return $cote*$cote;
    }
    function calcul_diagonale(int $cote):int{
        return sqrt(2)*$cote;
    }
    
?>