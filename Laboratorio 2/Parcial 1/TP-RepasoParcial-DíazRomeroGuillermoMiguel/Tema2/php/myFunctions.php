<?php
    const tarifa = 1.76; 
    function calcularTarifa($plan) {
        $planes = ["basico"=>1649, "estandar"=>2799, "premium"=>3999];
        return $planes[$plan]*tarifa;
    }
?>