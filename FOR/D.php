<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 20/08/2018
 * Time: 9:44 AM
 */

$suma = 0;
$n = 10;
for ($i = 1;$i <= $n;$i++){
    $suma = $suma + ($i*$i);
}
echo "la suma es: $suma <br>";