
<?php 

$mensagem = "Estou em Casa"; // Variavel Mensagem

/** 
 * strtoupper() = Tornar uma string Maiúscula
 * strtolower() = Tornasr uma string Menúscula
*/


$mensagemGrande = strtoupper($mensagem);
echo $mensagemGrande;
echo '<br>';

$mensagemPequena = strtolower($mensagem);
echo $mensagemPequena;



?>
