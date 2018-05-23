<?php

class Desconto500Reais implements Desconto
{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.07;
        }
        return $this->proximoDesconto->desconto($orcamento);
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
        return $this->proximoDesconto;
    }
}
