<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 19/08/2018
 * Time: 8:27 PM
 */
$num1 = 200;
$num2 = 330;
$num3 = 400;

if($num1 > $num2 && $num3 < $num1){
    echo "$num1 <br>";
}elseif ($num2 > $num1 && $num3 < $num2){
    echo "$num2 <br>";
}else{
    echo " $num3 <br>";
}