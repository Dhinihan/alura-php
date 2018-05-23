<?php

class Banco
{
    private $nome;
    private $telefone;
    private $contas;

    public function __construct($nome, $telefone)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->contas = [];
    }

    public function adicionaConta(Conta $conta)
    {
        $this->contas[] = $conta;
    }

    public function getContas()
    {
        return $this->contas;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
}
