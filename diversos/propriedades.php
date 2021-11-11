<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";

$prod1 = new Produto;
$prod1->titulo = 'Skol';
$prod1->descricao = 'Cerveja Pilsen';
$prod1->preco = 2.50;
$prod1->desconto = 0.1;

// Não é recomendado pq o atributo não existe na classe, mas é possível pq o PHP é assíncrono
$prod1->definirCodigoBarras("99999995846");

var_dump($prod1);