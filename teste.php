<?php

require 'vendor/autoload.php';

$calculadora = new \Barthem\DesignPattern\CalculadorDeImpostos();

$orcamento = new \Barthem\DesignPattern\Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new \Barthem\DesignPattern\impostos\Iss());
