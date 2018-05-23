<?php

class CadeiaDeRespostas
{
    public function responde(Requisicao $req, Conta $conta)
    {
        $resposta = new RespostaXML(new RespostaCSV(new RespostaPorcentagem(new RespostaFinal())));
        return $resposta->responde($req, $conta);
    }
}
