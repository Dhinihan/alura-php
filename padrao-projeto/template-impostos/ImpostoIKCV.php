<?php

class ImpostoIKCV extends TemplateImpostoValorCondicional
{

    public function usaTaxaMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500 && $this->haItemComValorMaiorQue(100, $orcamento);
    }

    public function taxaMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }

    public function taxaMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }

    private function haItemComValorMaiorQue($valor, Orcamento $orcamento)
    {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getValor() > 100) {
                return true;
            }
        }

        return false;
    }
}
