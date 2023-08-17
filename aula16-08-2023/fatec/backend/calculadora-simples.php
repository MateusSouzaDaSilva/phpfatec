<?php
    
    if (!isset($_GET["valorA"]) || !isset($_GET["valorB"])) {
        echo "<center><h1>Requisição inválida</center></h1>";
        return;
    }
    
    $valor1=$_GET["valorA"];
    $valor2=$_GET["valorB"];

    if (empty($valor1) || empty($valor2)) {
        echo "<center><h1>Dados Inválidos</center></h1>";
        return;
    }

    if (!is_numeric($valor1) || !is_numeric($valor2)) {
        echo "<center><h1>Dados Inválidos</center></h1>";
        return;
    }

    $soma=$valor1+$valor2;

    echo "<center><h1>A soma é: $soma</center></h1>";
?>