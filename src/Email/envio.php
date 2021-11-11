<?php

namespace Email;

use Email\Adaptadores\Mailgun\Adaptador as Mailgun;
use Email\Adaptadores\Mailgun\Adaptador as SES;

class Envio
{
    public function enviar(): void
    {
        $adaptador = new Adaptadores\Mailgun\Adaptador;

        $obj = new \stdClass;
        $cli = new \Cliente;

        var_dump($adaptador, $obj, $cli);
    }

    public function m1()
    {
        $adaptador = new Mailgun;
    }

    public function m2()
    {
        $adaptador = new SES;
    }
}

const VERSAO = 1.0;

function validar(string $email): void
{
    echo "O endereço $email é válido.";
}