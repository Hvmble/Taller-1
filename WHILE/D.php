<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 19/08/2018
 * Time: 10:38 PM
 */
$suma = 0;
$conteo =1;

while($conteo <= 52) {
    if ($conteo % 2 != 0) {
        echo "La suma es $suma <br>";
        $suma += $conteo;
    }else {
    }
    $conteo++;
}