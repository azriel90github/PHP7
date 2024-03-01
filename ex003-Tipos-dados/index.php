
<?php 

$nomeCompleto = "Azriel-Armando<br>"; //exemplo de declaração de variaveis usando camerCase
$anoNascimento = 2004;
$nome1 = "Hadassa";
$sobreNome = "Rabugenta";


echo $nome1 . " " . $sobreNome; //concatenar as duas variaveis

exit;

echo $nomeCompleto; //mostrar na tela a variaavel nomeCompleto



//unset($anoNascimento);// remover variavel do escopo

/*  A função isset verifica de uma variavel esta declarada e se o seu valor é diferente de null*/

if (isset($anoNascimento)) {
    echo $anoNascimento; //mostrar na tela a variavel anoNascimento
}

?>