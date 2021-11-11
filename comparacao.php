<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";

$prod1 = new Produto;
$prod1->titulo = 'Skol';
$prod1->descricao = 'Cerveja Pilsen';
$prod1->preco = 2.50;

$prod2 = new Produto;
$prod2->titulo = 'Skol';
$prod2->descricao = 'Cerveja Pilsen';
$prod2->preco = 2.50;

var_dump($prod1 == $prod2);

// verifica também se a referência do objeto na memória é a mesma
var_dump($prod1 === $prod2);