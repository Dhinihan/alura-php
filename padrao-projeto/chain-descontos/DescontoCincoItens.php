<?php

class DescontoCincoItens implements Desconto
{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        if (count($orcamento->getItens()) >= 5) {
            return $orcamento->getValor() * 0.1;
        }
        return $this->proximoDesconto->desconto($orcamento);
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
        return $this->proximoDesconto;
    }
}
