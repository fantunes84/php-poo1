<?php

$generica = new stdClass;

$generica->nome = "TreinaWeb";
$generica->curso = "PHP OO";

var_dump($generica);

$array = [
    "nome" => "TreinaWeb",
    "curso" => "PHP OO2"
];

$objeto = (object) $array;

var_dump($objeto);