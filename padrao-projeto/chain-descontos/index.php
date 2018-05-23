<?php

require_once 'Item.php';
require_once 'Orcamento.php';
require_once 'Desconto.php';
require_once 'DescontoCincoItens.php';
require_once 'SemDesconto.php';
require_once 'Desconto500Reais.php';
require_once 'DescontoVendaCasada.php';
require_once 'CalculadoraDeDesconto.php';

$calculadora = new CalculadoraDeDesconto();
$orcamento = new Orcamento(400);
$desconto = $calculadora->calculaDesconto($orcamento);

echo 'Valor do desconto (0 itens, R$ 400): <br>';
echo $desconto;
echo '<br>';

$orcamento->addItem(new Item('LAPIS', 200));
$orcamento->addItem(new Item('CANETA', 200));
$desconto = $calculadora->calculaDesconto($orcamento);

echo 'Valor do desconto (2 itens: lápis e caneta, R$ 400): <br>';
echo $desconto;
echo '<br>';

$orcamento = new Orcamento(1000);
$orcamento->addItem(new Item('Item 1', 250));
$orcamento->addItem(new Item('Item 2', 250));
$orcamento->addItem(new Item('Item 3', 250));
$orcamento->addItem(new Item('Item 4', 250));
$desconto = $calculadora->calculaDesconto($orcamento);

echo 'Valor do desconto (4 itens, R$ 1000): <br>';
echo $desconto;
echo '<br>';

$orcamento->addItem(new Item('Item 1', 250));
$desconto = $calculadora->calculaDesconto($orcamento);

echo 'Valor do desconto (5 itens, R$ 1000): <br>';
echo $desconto;
echo '<br>';
