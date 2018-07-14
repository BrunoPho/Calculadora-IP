<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 05/07/18
 * Time: 16:18
 */

$ip1  = $_GET['ip1'];

$ip2  = $_GET['ip2'];

$ip3  = $_GET['ip3'];

$ip4  = $_GET['ip4'];

$masc = $_GET['masc'];

$ipJunto = "$ip1"."$ip2"."$ip3"."$ip4";

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

echo " Bits: ".$bits;

/*----------------------------------------------*/

$enderecos = enderecos($bits);

echo " Endereços: ".$enderecos;

/*----------------------------------------------*/

$subredes = subredes($enderecos);

echo " SubRedes: ".$subredes;

/*----------------------------------------------*/

$qual_subrede = qual_subrede($enderecos, $ip4);

echo " Qual Rede: ".$qual_subrede;

/*----------------------------------------------*/

$prim_end = prim_end($qual_subrede, $enderecos);

echo " Prim_end: ".$prim_end;

/*----------------------------------------------*/

$prim_host = prim_host($prim_end);

echo " Host: ".$prim_host;

/*----------------------------------------------*/

/*$decimal = calcula($masc);*/

function calcula($mascara, $decimal){

    switch ($mascara){

        case $mascara == 24:
            $decimal = 000;
            break;

        case $mascara == 25:
            $decimal = 128;
            break;

        case $mascara == 26:
            $decimal = 192;
            break;

        case $mascara == 27:
            $decimal = 224;
            break;

        case $mascara == 28:
            $decimal = 240;
            break;

        case $mascara == 29:
            $decimal = 248;
            break;

        case $mascara == 30:
            $decimal = 252;
            break;

        case $mascara == 31:
            $decimal = 254;
            break;
          }

    return $decimal;
}

/*$decimal = calcula($masc);*/

/*echo " Decimal: ".$decimal;*/

//////////////////////////// Privado ou Publico

function Priv_Pub($ipJunto){

    $reservados = [100008, 172160012, 1921680016, 1270008, 1692540016];

    if ($ipJunto == $reservados){

        echo "Privado";

    }else{

        echo "Público";
    }
}

$Priv_Pub = Priv_Pub($ipJunto);

echo $Priv_Pub;

/*$exe2 = 256 - $decimal;
$exe  = 256 / $exe2;
$ex3  = $exe2 - 2;

$partes = explode(".", $ip1);

for ($i = 0; $i <= $exe; $i++) {
    $x[] = $exe2 * $i;
}
  for ($i = 0; $i <= $exe; $i++) {
       $z = $i + 1;

    if($partes['3'] > $x[$i] AND $partes['3'] < $x[$z]){

        $exe4 = $x[$i] + 1;
        $exe5 = $x[$z] - 2;
        $exe6 = $x[$z] - 1;
    }
}

$exe7 = "255.255.255.". $decimal ;*/

/*echo "$exe, $exe2, $ex3, $exe4, $exe5, $exe6, $exe7, C , faltou privado ou publico";*/