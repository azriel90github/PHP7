<?php 

    $valorTotal = 0; // valor inicial(0)
    $valorTotal += 100; // auto incrementar valor 100 no 0
    $valorTotal += 25; // auto incrementar valor 25 no 100


    $valorTotal *= .9; // Apenas 90% desse valor

    echo $valorTotal;


    exit();

    /**
     * Operadores de Atribuição
     * = atribuição(=)
     * . concatenação(.)
    */

    $nome = "Azriel Armando";
    echo $nome . " - Contéudo Adicional <br>"; // mostrar na tela a variavel $nome

    $nome .= " - Treinamentos";
    echo $nome;

    /** Operadores de Atribuição
     * 
     *  +=: Adição
        -=: Subtração
        *=: Multiplicação
        /=: Divisão
        %=: Módulo (resto da divisão)
        ??=: // Atribui um valor valor adicional caso a variavel principal seja nula
        .=: Concatenação
    */

?>