<?php

require_once "../src/Email/Envio.php";
require_once "../src/SMS/Envio.php";

use const email\VERSAO;
use function Email\validar;

$email = new \Email\Envio;
$sms = new \SMS\Envio;

var_dump($email);
var_dump($sms);

echo VERSAO . "<br>";

validar("teste@mail.com");