<?php

class Produto
{
    public const NORMA = '1050';
    public $titulo;
    public $descricao = "Cerveja Brasileira";
    public $preco;

    public function definirCodigoBarras($codigo)
    {
        $this->codigoBarras = $codigo;
    }
}