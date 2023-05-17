<?php

namespace Barthem\DesignPattern;

use Barthem\DesignPattern\impostos\Imposto;

class CalculadorDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {

        return $imposto->calculaImposto($orcamento);

    }
}