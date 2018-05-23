<?php

class TemplateRelatorioCabecalhoRodape implements Relatorio
{
    public function gera(Banco $banco)
    {
        echo $this->geraCabecalho($banco);
        echo $this->geraCabecalho($banco);
    }
}
