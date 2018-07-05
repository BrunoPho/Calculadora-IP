<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 05/07/18
 * Time: 16:18
 */

/*$_GET['$ip', '$masc'];

 $ip   = $_GET['ip'];
 $masc = $_GET['masc'];*/


 $ip   = '192.168.0.1';
 $masc = '25';

 $bits = 32-$masc;

 $enderecos = pow(2, $bits);

 $subredes  = 256/$enderecos;

 $qual_subrede = (int)($ip4/$enderecos);

 $prim_end = $qual_subrede * $enderecos;

 $prim_host = $prim_end+1;

 print_r($bits);