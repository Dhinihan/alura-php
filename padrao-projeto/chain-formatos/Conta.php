<?php

class Conta
{
    private $nomeTitular;
    private $saldo;

    public function __construct($nomeTitular, $saldo)
    {
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldo;
    }

    public function getNomeTitular()
    {
        return $this->nomeTitular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}
