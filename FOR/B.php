<?php
/**
 * Created by PhpStorm.
 * User: Montoya Abadia
 * Date: 20/08/2018
 * Time: 9:16 AM
 */
$temperatura = 100;
$tempAlta = 0;
$tempBaja = 0;
$tempMedia = 0;

for ($i = 0;$i < 6;$i++){
    $tempMedia = $temperatura;

    if ($temperatura > $tempAlta){
        $tempAlta = $temperatura;
    }
    if ($temperatura < $tempBaja ){
        $tempBaja = $temperatura;
    }
}
 $tempMedia /= 6;
echo  "Temperatura Alta $tempAlta <br>";
echo  "Temperatura Media $tempMedia <br>";
echo  "Temperatura Baja $tempBaja <br>";