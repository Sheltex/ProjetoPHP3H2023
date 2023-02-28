<?php 

include_once 'produto.php';

$valor = new Produto();

$valor->Codigo = 4011;

$valor->Descricao = "Washington Brasileiro";

echo $valor->Codigo . " - " . $valor->Descricao;


 ?>