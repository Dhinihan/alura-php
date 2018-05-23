<?php

class RespostaFinal implements Resposta
{
    public function __construct(Resposta $proxima = null)
    {
    }

    public function responde(Requisicao $req, Conta $conta)
    {
        return '';
    }
}
