<?php

abstract class TemplateImpostoValorCondicional
{
    public function calcula(Orcamento $orcamento)
    {
        if ($this->usaTaxaMaxima($orcamento)) {
            return $this->taxaMaxima($orcamento);
        }

        return $this->taxaMinima($orcamento);
    }

    abstract public function usaTaxaMaxima(Orcamento $orcamento);
    abstract public function taxaMaxima(Orcamento $orcamento);
    abstract public function taxaMinima(Orcamento $orcamento);
}
