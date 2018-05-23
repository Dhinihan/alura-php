<?php

require_once 'Item.php';
require_once 'Orcamento.php';
require_once 'Imposto.php';
require_once 'TemplateImpostoValorCondicional.php';
require_once 'ImpostoICPP.php';
require_once 'ImpostoIKCV.php';
require_once 'ImpostoIHIT.php';

$icpp = new ImpostoICPP;
$ikcv = new ImpostoIKCV;
$ihit = new ImpostoIHIT;

$valor = 10000;

$orcamento = new Orcamento($valor);

$orcamento->addItem(new Item('barato', 10));
$orcamento->addItem(new Item('caro', 200));
$orcamento->addItem(new Item('medio', 100));
$orcamento->addItem(new Item('muito caro', 1000));

echo "Orcamento: " . $valor . "<br>";
echo "IHIT: " . $ihit->calcula($orcamento) . "<br>";
echo "<br>";

$orcamento->addItem(new Item('muito caro', 1000));

echo "Orcamento: " . $valor . "<br>";
echo "IHIT: " . $ihit->calcula($orcamento) . "<br>";
echo "<br>";
