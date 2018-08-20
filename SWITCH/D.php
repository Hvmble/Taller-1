<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 20/08/2018
 * Time: 10:51 AM
 */

$saldoInicial = 1000000;
$consignar = 300000;
$retirar = 1000000;
$saldoTotal = $saldoInicial + $consignar;
$retiro= $saldoTotal - $retirar;
$opcion = 3;

switch ($opcion){
    case 1: echo "Ha seleccionado realizar una consignacion ";
    break;
    case 2: echo "Ha seleccionado realizar un retiro <br> su retiro fue de : $retiro";
    break;
    case 3: echo "Ha seleccionado realizar una consulta de saldo <br>su saldo es: $saldoTotal <br>";
    break;
    default: echo "Opcion incorrecta";
    break;
}
