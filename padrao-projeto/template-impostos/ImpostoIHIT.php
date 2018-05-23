<?php

class ImpostoIHIT extends TemplateImpostoValorCondicional
{
    public function taxaMaxima(Orcamento $orcamento)
    {
        return 100 + $orcamento->getValor()*0.13;
    }

    public function taxaMinima(Orcamento $orcamento)
    {
        $taxa = 0.01 * count($orcamento->getItens());
        return $orcamento->getValor()*$taxa;
    }

    public function usaTaxaMaxima(Orcamento $orcamento)
    {
        $itens = $orcamento->getItens();
        $totalItems = count($itens);
        for ($i=0; $i < $totalItems - 1; $i++) {
            for ($j=$i+1; $j < $totalItems; $j++) {
                if ($itens[$i]->getNome() === $itens[$j]->getNome()) {
                    return true;
                }
            }
        }
        return false;
    }
}
