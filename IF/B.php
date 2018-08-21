<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 20/08/2018
 * Time: 10:37 PM
 */

$numero = 17;
$num = 0;

for ($i = 1; $i <= $numero; $i ++){
    if ($numero%$i == 0){
        $num++;
    }
}
if ($num == 2){
    echo "Es un numero primo";
}else{
    echo "No es un numero primo";
}
