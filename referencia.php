<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";

$prod1 = new Produto;
$prod1->titulo = 'Skol';
$prod1->descricao = 'Cerveja Pilsen';
$prod1->preco = 2.50;

// Copia o endereço de memória
$prod2 = $prod1;
$prod2->titulo = Itaipava;

var_dump($prod1);
var_dump($prod2);

$prod2 = 10;
var_dump(prod2);

// Faz uma referência do $prod3 ao $prod1
$prod3 = &$prod1;
$prod3->titulo = "Skol fininha";
$prod3 = 20;

var_dump($prod1);
var_dump($prod3);