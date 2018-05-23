<?php

class CalculadoraDeDesconto
{
    public function calculaDesconto(Orcamento $orcamento)
    {
        $desconto = new DescontoCincoItens();
        $desconto->setProximoDesconto(new Desconto500Reais())
                 ->setProximoDesconto(new DescontoVendaCasada())
                 ->setProximoDesconto(new SemDesconto());
        return $desconto->desconto($orcamento);
    }
}
