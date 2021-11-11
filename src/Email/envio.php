<?php

namespace Email;

class Envio
{
    public function enviar(): void
    {
        $adaptador = new Adaptadores\Mailgun\Adaptador;

        $obj = new \stdClass;
        $cli = new \Cliente;

        var_dump($adaptador, $obj, $cli);
    }
}

const VERSAO = 1.0;

function validar(string $email): void
{
    echo "O endereço $email é válido.";
}