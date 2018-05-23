<?php

class SemDesconto implements Desconto
{
    public function desconto(Orcamento $orcamento)
    {
        return 0;
    }

    public function setProximoDesconto(Desconto $desconto)
    {
        throw new \Exception("Não é possível adicionar mais descontos", 500);

    }
}
