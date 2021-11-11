<?php

declare(strict_types=1);

class Fornecedor
{
    const PAIS = "Brasil";
    public string $razaoSocial;
    public string $nomeFantazia;
    public string $cnpj;

    public function autorizar(object $usuario): void
    {
        if ($usuario->nome == "João" && $usuario->senha = 123456) {
            echo "<br> Está autorizado";
        }else {
            echo "<br> Está bloqueado";
        }
    }
}
