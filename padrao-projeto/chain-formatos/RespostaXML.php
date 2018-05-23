<?php

class RespostaXML implements Resposta
{
    private $proxima;

    public function __construct(Resposta $proxima = null)
    {
        $this->proxima = $proxima;
    }

    public function responde(Requisicao $req, Conta $conta)
    {
        if ($req->getFormato() !== 'XML') {
            return $this->proxima->responde($req, $conta);
        }
        return '<conta><titular>'.$conta->getNomeTitular().'</titular><saldo>'.$conta->getSaldo().'</saldo></conta>';
    }
}
