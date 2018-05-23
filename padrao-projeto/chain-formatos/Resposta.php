<?php

interface Resposta
{
    public function __construct(Resposta $resposta = null);
    public function responde(Requisicao $req, Conta $conta);
}
