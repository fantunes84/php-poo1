<?php

class Produto
{
    public const NORMA = '1050';
    public string $titulo;
    public string $descricao = "Cerveja Brasileira";
    public float $preco;

    public function definirCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }
}