<?php

class ImpostoICPP extends TemplateImpostoValorCondicional
{

    public function usaTaxaMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() >= 500;
    }

    public function taxaMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.07;
    }

    public function taxaMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}
