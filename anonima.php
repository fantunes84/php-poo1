<?php

require_once "src/classes/fornecedor.php";

$fornecedor = new Fornecedor;

$fornecedor->autorizar(new Class{
    public $nome = "João";
    public $senha = 123456;
});