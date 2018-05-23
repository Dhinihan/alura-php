<?php

require_once 'Requisicao.php';
require_once 'Conta.php';
require_once 'Resposta.php';
require_once 'RespostaXML.php';
require_once 'RespostaCSV.php';
require_once 'RespostaPorcentagem.php';
require_once 'RespostaFinal.php';
require_once 'CadeiaDeRespostas.php';

$requisicao = new Requisicao('XML');
$conta = new Conta('AABRAO', 98.77);
mostraResultado($requisicao, $conta);
$requisicao = new Requisicao('CSV');
mostraResultado($requisicao, $conta);
$requisicao = new Requisicao('PORCENTAGEM');
mostraResultado($requisicao, $conta);
$requisicao = new Requisicao('OUTRA');
mostraResultado($requisicao, $conta);

function mostraResultado(Requisicao $requisicao, Conta $conta)
{
    $cadeia = new CadeiaDeRespostas();
    $formato = $requisicao->getFormato();
    echo "Requição $formato<br>";
    echo '<xmp>';
    echo $cadeia->responde($requisicao, $conta);
    echo '</xmp>';
    echo '<br>';
}
