
<?php 


$nomeCompleto = "Azriel Armando"; //exemplo de declaração de variaveis usando camerCase
$anoNascimento = 2004;
$nome1 = "Hadassa";
$sobreNome = "Rabugenta";


echo $nomeCompleto; //mostrar na tela a variaavel nomeCompleto
echo '<br>';
echo $nome1 . " " . $sobreNome; //concatenar as duas variaveis



exit;

//unset($anoNascimento);// remover variavel do escopo

if (isset($anoNascimento)) { 
    echo $anoNascimento; //mostrar na tela a variavel anoNascimentov
}

/*  A função isset verifica de uma variavel esta declarada e se o seu valor é diferente de null*/


$personEmail = "Hcode";
$email = 'azrielgithub@gmmail.com';
/////////////////////////////////// Variaveis do tipo string(aspas simples, duplas)


$ano = 2004;
$salario = 32.000;
////////////////////////////////// Variaveis do tipo number(float,int)
$bloqueado = false;



$frutas = array("Laranja", "Manga", "Abacaxi");
echo $frutas[2]; // Mostrar valor da posição 2, lembrando que a sequência começa com 0
echo '<br>';
///////////////////////////////// Variavel do tipo array(composto)


$dataNascimento = new DateTime();
//////////////////////////////// Variavel do tipo objecto(composto)

//var_dump($dataNascimento);



$arquivo = fopen("01-azriel-CV.pdf", "r");
//var_dump($arquivo)

$nulo = null; // variavel nula/(não existe)
$vazio = ""; // variavel vazia(existe so não têm valor definido)
 

?>