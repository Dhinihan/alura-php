<?php

require_once "Conta.php";
require_once "Banco.php";
require_once "Relatorio.php";


$banco = new Banco('Banco Nacional', '(01) 2345-6789');
$banco->adicionaConta(new Conta('Augusta', 235));
$banco->adicionaConta(new Conta('Bárbara', 678.9));
$banco->adicionaConta(new Conta('Carla', 1234.56));

echo $banco->getNome() . "\n";
echo $banco->getTelefone() . "\n";
echo "\n";
foreach ($banco->getContas() as $conta) {
    echo $conta->getNomeTitular() . ', ' . $conta->getSaldo();
    echo "\n";
}
