<?php

    function calcul_perimetre(int $long,int $larg):int{
        return ($long+$larg)*2;
    }
    function calcul_surface(int $long,int $larg):int{
        return $long*$larg;
    }
    function calcul_diagonale(int $long,int $larg):float{
        return sqrt( ($long*$long) + ($larg*$larg) );
    }

?>