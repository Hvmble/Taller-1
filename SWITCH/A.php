<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 20/08/2018
 * Time: 10:16 AM
 */

$letra = "a";

switch ($letra){
    case "a":
    case "e":
    case "i":
    case "o":
    case "u": echo "La vocal es minuscula";
    break;
    case "A":
    case "E":
    case "I":
    case "O":
    case "U": echo "La vocal es mayuscula";
    break;
    default : echo "No es una vocal";
         break;
}