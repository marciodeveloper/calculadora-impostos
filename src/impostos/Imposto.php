<?php

namespace Barthem\DesignPattern\impostos;

use Barthem\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento):float;
}