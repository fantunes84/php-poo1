<?php

class Fornecedor
{
    const PAIS = "Brasil";
    public $razaoSocial;
    public $nomeFantazia;
    public $cnpj;

    public function autorizar($usuario)
    {
        if ($usuario->nome == "João" && $usuario->senha = 123456) {
            echo "<br> Está autorizado";
        }else {
            echo "<br> Está bloqueado";
        }
    }
}
