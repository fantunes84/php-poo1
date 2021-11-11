<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";

$cli = new Cliente;
$cli->nome = "João";
$cli->idade = 40;
$cli->endereco = "São Paulo";
$cli->telefone = "(11) 99999-9999";

$cli->comprar();

$cli->definirNome("Maria");

echo "Novo nome: {$cli->nome}";
