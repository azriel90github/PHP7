<?php 
// Variavel com escopo global(Escopa Global)
$nome = "Azriel Armando"; //Vaiavel nome inicializada
$descrição = "Jovem Programador a 8 anos";
$textoAdicional = "Programador Pleno";


//Escopo de Bloco
function teste1() { // Função teste1

    global $nome; // Buscando Variavel nome do escopo global para o escopo de bloco
    echo $nome; // Mostrar variavel nome
    echo '<br>'; // Adicionar espaço com string entre a variavel $nome e $descricao

}

function teste2() { // Função teste2

    global $descrição; // Buscando descrição do escopo global para o escopo de bloco
    echo $descrição; // Mostrar variavel nome
    echo '<br>'; // Adicionar espaço com string entre a variavel $descrição e $textoAdicional
}



function teste3() { // Função teste3

    global $textoAdicional; // Buscando textoAdiciona do escopo global para o escopo de bloco
    echo $textoAdicional." e boas práticas acima de tudo ";

}

teste1(); // Permite mostrar as informações dentro da função teste1 na tela
teste2(); // Permite mostrar as informações dentro da função teste2 na tela
teste3(); // Permite mostrar as informações dentro da função teste3 na tela

?>