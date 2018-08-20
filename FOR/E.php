<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 20/08/2018
 * Time: 9:53 AM
 */
$suma = 0;
$n = 6;
for ($i = 1;$i <= $n; $i ++){
    if ($i%2 == 0){
        $suma -= $i;
    }else{
        $suma += $i;
    }
}
echo "La suma es $suma <br>";