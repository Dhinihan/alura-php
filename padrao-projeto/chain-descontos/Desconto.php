<?php

interface Desconto
{
    public function desconto(Orcamento $orcamento);
    public function setProximoDesconto(Desconto $desconto);
}
