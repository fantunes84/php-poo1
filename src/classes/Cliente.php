<?php

class Cliente
{
    // Declarações da classe
    public $nome;
    public $idade;
    public $endereco;
    public $telefone;

    public function comprar()
    {
        echo "O cliente {$this->nome} realizou uma compra.<br>";
    }

    public function definirNome($nome)
    {
        $this->nome = $nome;
    }
}



