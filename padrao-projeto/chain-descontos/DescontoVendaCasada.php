<?php

class DescontoVendaCasada implements Desconto
{

    private $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        $contemLapis = $this->existe('LAPIS', $orcamento);
        $contemCaneta = $this->existe('CANETA', $orcamento);
        if ($contemLapis && $contemCaneta) {
            return $orcamento->getValor() * 0.05;
        }
        return $this->proximoDesconto->desconto($orcamento);
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
        return $this->proximoDesconto;
    }

    private function existe($nomeDoItem, Orcamento $orcamento)
    {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getNome() == $nomeDoItem) {
                return true;
            }
        }
        return false;
    }
}
