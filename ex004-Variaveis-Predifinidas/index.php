<?php 


// variavel super global do PHP $_GET = Predifinida
$nome = (int)$_GET["a"]; // Obter e definir string pela url usando a variavel(?) a
/////////////////////////// (int) para converter em number do tipo int

//var_dump($nome); // mostrar detalhes sobre a vriavel nome


// $_SERVER = Variavel super global do PHP
$ip = $_SERVER["SCRIPT_NAME"]; // que contém o endereço IP do cliente que está acessando o script PHP

echo $ip; // mostrar na tela a variavel  $ip


/*

* REMOTE_ADDR = buscar IP do servidor (chave do PHP)
* SCRIPT_NAME = buscar descrição da URL (chave do PHP)

*/ 
?>

