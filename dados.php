<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 05/07/18
 * Time: 16:18
 */

$ip1   = $_GET['ip1'];

$ip2   = $_GET['ip2'];

$ip3   = $_GET['ip3'];

$ip4   = $_GET['ip4'];

$masc  = $_GET['masc'];

/////////////////////////////////////////// Bits

function bits($masc){

    $bits = 32 - $masc;

    return $bits;

}

/////////////////////////////////////////// Endereços

function enderecos($bits){

    $enderecos = pow(2, $bits);

    return $enderecos;

}

/////////////////////////////////////////// Subredes

function subredes($enderecos){

    $subredes  = 256 / $enderecos;

    return $subredes;

}

/////////////////////////////////////////// qual_subrede

function qual_subrede($ip4, $enderecos){

    $qual_subrede = (int)($ip4 / $enderecos);

    return $qual_subrede;

}

/////////////////////////////////////////// prim_end

function prim_end($qual_subrede, $enderecos){

    $prim_end = $qual_subrede * $enderecos;

    return $prim_end;

}

/////////////////////////////////////////// prim_host

function prim_host($prim_end){

    $prim_host = $prim_end + 1;

    return $prim_host;

}

/*----------------------------------------------*/

$bits = bits($masc);

echo "Bits: ".$bits;

/*----------------------------------------------*/

$enderecos = enderecos($bits);

echo "Endereços: ".$enderecos;

/*----------------------------------------------*/

$subredes = subredes($enderecos);

echo "SubRedes: ".$subredes;

/*----------------------------------------------*/

$qual_subrede = qual_subrede($enderecos, $ip4);

echo "Qual Rede: ".$qual_subrede;

/*----------------------------------------------*/

$prim_end = prim_end($qual_subrede, $enderecos);

echo "Primeira e ultima rede: ".$prim_end;

/*----------------------------------------------*/

$prim_host = prim_host($prim_end);

echo "Host: ".$prim_host;


/*----------------------------------------------*/