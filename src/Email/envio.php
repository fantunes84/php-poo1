<?php

namespace Email;

class Envio
{
    public function enviar(): void
    {
        $adaptador = new Adaptadores\Mailgun\Adaptador;
        var_dump($adaptador);
    }
}

const VERSAO = 1.0;

function validar(string $email): void
{
    echo "O endereço $email é válido.";
}