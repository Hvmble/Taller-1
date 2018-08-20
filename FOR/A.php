<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 20/08/2018
 * Time: 8:54 AM
 */

$suma = 0;

for ($i = 1;$i <= 100;$i++){
    $suma = $suma + ($i*$i);
}
echo "la suma de los cuadrados $suma <br>";
