<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 20/08/2018
 * Time: 9:32 AM
 */

$suma = 0;
$n= 5;

for ($i = 1; $i <= $n;$i ++ ){
    $conteo++;
    $suma += $conteo;
}

echo "la suma es: $suma <br>";