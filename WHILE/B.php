<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 19/08/2018
 * Time: 10:03 PM
 */
$suma = 1;
$conteo =1;

while($conteo <= 100 ){
    echo "la suma es: $suma <br>";
    $conteo++;
    $suma += $conteo;
}
