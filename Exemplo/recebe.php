<?php

  function soma($a, $b){
  	$soma = $a + $b;
  	return $soma;
  }

  $x = $_GET['primeiro'];
  $y = $_GET['segundo'];

  $resultado = soma($x, $y);

  echo "resultado ".$resultado;

  function divide($c, $d){
      $divide = $c / $d;
      return $divide;
  }

  $x = $_GET['terceiro'];
  $y = $_GET['quarto'];

  $resultado2 = divide($x, $y);

  echo "Resultado da divisão igual ".$resultado2;