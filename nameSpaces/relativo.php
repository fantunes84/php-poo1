<?php

require_once "../src/Email/Envio.php";
require_once "../src/Classes/Cliente.php";
require_once "../src/Email/Adaptadores/Mailgun/Adaptador.php";

$email = new \Email\Envio;
$email->enviar();

var_dump($email);