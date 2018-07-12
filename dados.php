<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 05/07/18
 * Time: 16:18
 */

$_GET['$ip1'];

$_GET['$ip2'];

$_GET['$ip3'];

$_GET['$ip4'];

$_GET['$masc'];

$ip   = $_GET['ip'];
$masc = $_GET['masc'];

function bits($masc){

    $bits = 32 - $masc;

    return $bits;

    $x = $_GET['masc'];

    $resultado = bits($x);

}

function enderecos($bits){

}

function subredes($enderecos){

}

function qual_subrede($ip4, $enderecos){

}

function prim_end($qual_subrede, $enderecos){

}

function prim_host($prim_end){

}

/*----------------------------------------------------------------------------------------------------------------*/



/*$ip   = '192.168.0.1';
$masc = '25';*/

 $bits = 32 - $masc;

 $enderecos = pow(2, $bits);

 $subredes  = 256 / $enderecos;

 $qual_subrede = (int)($ip4 / $enderecos);

 $prim_end = $qual_subrede * $enderecos;

 $prim_host = $prim_end + 1;

 /*print_r($bits);*/


