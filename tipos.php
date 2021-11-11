<?php

require_once "src/classes/Fornecedor.php";

$fornecedor = new Fornecedor;

$fornecedor->cnpj = "123123123";
$fornecedor->nomeFantasia = "Meu armazem";
$fornecedor->$razaoSocial = "Meu armazem ltda";

$fornecedor->autorizar(new Class {
    public $nome = "João";
    public $senha = 123456;
});

var_dump($fornecedor);