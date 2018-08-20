<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 19/08/2018
 * Time: 9:08 PM
 */
$num1 = 20000;
$num2 = 3300;
$num3 = 400;
$aux = 3;

if($num1 < $num2){
    $aux = $num2;
    $num2 = $num1;
    $num1 = $aux;
}if($num2 < $num3){
    $aux = $num2;
    $num2 = $num3;
    $num3 = $aux;
}if($num1 < $num2){
    $aux = $num1;
    $num1 = $num2;
    $num2 = $aux;
}

echo "Los numeros de mayor a menor <br><br>";
echo"$num1 <br>";
echo" $num2<br>";
echo"$num3 <br>";