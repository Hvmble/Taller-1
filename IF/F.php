<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 19/08/2018
 * Time: 8:11 PM
 */
$numero = 4;

if($numero%2 == 0 ){
    $cuadrado = ($numero * $numero);
    echo "Es un numero par $cuadrado <br>";
}else{
    $cubo = ($numero * $numero * $numero);
    echo "Es un numero impar $cubo <br>";
}
