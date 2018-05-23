<?php

class RespostaPorcentagem implements Resposta
{
    private $proxima;

    public function __construct(Resposta $proxima = null)
    {
        $this->proxima = $proxima;
    }

    public function responde(Requisicao $req, Conta $conta)
    {
        if ($req->getFormato() !== 'PORCENTAGEM') {
            return $this->proxima->responde($req, $conta);
        }
        return $conta->getNomeTitular().'%'.$conta->getSaldo();
    }
}
