<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 20/08/2018
 * Time: 12:00 AM
 */

$n1 = 0;
$n2 = 1;

for($i = 1;$i < 7;$i++){
    $suma = ($n1 + $n2);
    $n1 = $n2;
    $n2 = $suma;
    $aux[$i] = $suma;
}
echo "$suma <br> ";

