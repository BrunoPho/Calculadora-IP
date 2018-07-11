<?php

  function soma($a, $b){
  	$soma = $a + $b;
  	return $soma;
  }

  $x = $_GET['primeiro'];
  $y = $_GET['segundo'];

  $resultado = soma($x, $y);

  echo "resultado:".$resultado;