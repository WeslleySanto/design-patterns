<?php

    require "Orcamento.php";
    require "CalculadoraDeImpostos.php";
    require "IImposto.php";
    require "ICMS.php";
    require "ISS.php";
    
    $reforma = new Orcamento(500);
    
    $calculadora = new CalculadoraDeImpostos();
    
    echo( $calculadora->calcula( $reforma, new ICMS() ) );
    echo("<br/>");
    echo( $calculadora->calcula( $reforma, new ISS() ) );
?>