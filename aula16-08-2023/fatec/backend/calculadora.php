<?php
    
    if (!isset($_GET["valorA"]) || !isset($_GET["valorB"]) || !isset($_GET["operacao"])) {
        echo "<center><h1>Requisição inválida</center></h1>";
        return;
    }

    
    $valor1=$_GET["valorA"];
    $valor2=$_GET["valorB"];
    $operacao=$_GET["operacao"];

    if (empty($valor1) || empty($valor2) || empty($operacao)) {
        echo "<center><h1>Dados Inválidos</center></h1>";
        return;
    }

    if (!is_numeric($valor1) || !is_numeric($valor2)) {
        echo "<center><h1>Dados Inválidos</center></h1>";
        return;
    }

    if ($valor2 == 0 && $operacao == "/") {
        echo "<center><h1>Não é permitido divisão por zero</center></h1>";
        return;
    }

    $soma = 0;

  switch($operacao) {
    case '+':
        $soma=$valor1+$valor2;
        break;
    case '-':
        $soma=$valor1-$valor2;
        break;
    case '*':
        $soma=$valor1*$valor2;
        break;
    case '/':
        $soma=$valor1/$valor2;
        break;
  }
   

    

    

    


    
?>