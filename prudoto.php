<?php

class produto{

public $nome;
public $preco;
public $quantidade;
public function exibirinformacoes(){
echo  "nome: " . $this->nome. "preco: " . $this->preco, "quantidade: " . $this->quantidade . "<br>";
}
}

$produto1 = new produto();

$p1->nome = "caneta";
$p1->preco = 2.5;
$p1->quantidade = 10;

$produto2 = new produto();

$p2->nome = "Danganronpa";
$p2->preco = 15;
$p2->quantidade = 2;

$produto1->exibirinformacoes();
$produto2->exibirinformacoes();

function mostrarmediaprecos($produto1, $produto2)
{
    $media = ($produto1->preco + $produto2->preco) / 2;
    echo "A média dos preços dos produtos é: " . number_format(num:$media, decimals:2, decimal_separator: '') . "<br>";
    }
?>