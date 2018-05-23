<?php

class Requisicao
{
    private $formato;

    public function __construct($formato)
    {
        $this->formato = $formato;
    }

    /**
     * @return mixed
     */
    public function getFormato()
    {
        return $this->formato;
    }
}
