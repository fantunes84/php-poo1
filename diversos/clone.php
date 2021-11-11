<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";

$prod1 = new Produto;
$prod1->titulo = 'Skol';
$prod1->descricao = 'Cerveja Pilsen';
$prod1->preco = 2.50;

// Cria um novo objeto
$prod2 = clone $prod1;
$prod2->preco = 3.40;

var_dump($prod1);
var_dump($prod2);