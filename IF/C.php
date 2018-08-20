<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 19/08/2018
 * Time: 7:26 PM
 */
$numero = -5;

if($numero > 0 && $numero < 100){
    echo "Es un numero positivo y menor a 100 ";
} elseif($numero < 0){
    echo "Es numero negativo";
} else {
    echo " Es numero incorrecto";
}