<?php

class Produto {
    private $codigo;
    public $estoque;
    public $preco;
    public $descricao;

    public function setCodigo($c) {
        $this->codigo = (int) $c;
    }
}