<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 19/08/2018
 * Time: 10:41 PM
 */
$numero = 7;
$factorial = 1;


for($i = 1;$i <= $numero;$i++){
    $factorial = ($factorial * $i);
}

echo "El factorial del numero $numero es: $factorial <br>";