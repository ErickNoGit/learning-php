<?php
    // Operador ternario
    $idade = 10;
    $maior_idade = $idade >= 18 ? true : false;

    // bloco condicional
    if ($maior_idade) {
        echo "<br>Ele e maior de Idade, possuindo $idade anos\n";
    } else {
        echo "<br>Ele nao e maior de Idade, possui apenas $idade anos\n";
    }

    // operadores logicos
    // ! not, || or, && and
    if (!$maior_idade) {
        echo "<br>Agora ele e maior de idade, inverti com ! (not)\n";
    }

    if ($maior_idade || !$maior_idade) {
        echo "<br>False || (or) True dara true\n";
    }
    
    if ($maior_idade && !$maior_idade) {
        echo "<br>False && (and) True dara true\n";
    } else {
        echo "<br>False && (and) True dara false\n";
    }

    // verificando valores de objetos
    $string_vazia = "";
    if ($string_vazia) {
        echo "<br>String vazia deu true\n";
    } else {
        echo "<br>String vazia deu false\n";
    }

    $string_cheia = "Jose";
    if ($string_cheia) {
        echo "<br>String cheia deu true\n";
    } else {
        echo "<br>String cheia deu false\n";
    }

    $array_vazio = [];
    if ($array_vazio) {
        echo "<br>Array do objeto -> $-array_vazio = [] deu true\n";
    } else {
        echo "<br>Array do objeto -> $-array_vazio = [] deu false\n";
    }

    $array_com_numero = array(1, 2, 3, 4, 5);
    if ($array_com_numero) {
        echo "<br>Array do objeto -> $-array_com_numero = array(1, 2, 3, 4, 5), deu true\n";
    } else {
        echo "<br>Array do objeto -> $-array_com_numero = array(1, 2, 3, 4, 5), deu false\n";
    }

    $array_string = ["Joao", "Maria", "Daniel"];
    if ($array_string) {
        echo "<br>Array de objeto -> $-array_string = [\"Joao\", \"Maria\", \"Daniel\"] deu true\n";
    } else {
        echo "<br>Array de objeto -> $-array_string = [\"Joao\", \"Maria\", \"Daniel\"] deu false\n";
    }


    // varios fluxos
    $cor = "amarelo";
    // $cor = "laranja";
    if ($cor === "azul") {
        echo "<br>A cor escolhida e azul ?\n";
    } else if ($cor === "rosa") {
        echo "<br>A cor escolhida e rosa ?\n";
    } else if ($cor === "amarelo") {
        echo "<br>A cor escolhida foi o $cor\n";
    } else {
        echo "<br>A cor nao cabe a nenhuma opcao!\n";
    }

    // verificacoes fracas
    $num_zero = 0;
    $str_zero = "0";

    if ($num_zero == $str_zero) {
        echo "<br>Dois igual (==) da true, so checa o valor\n";
    } else {
        echo "<br>Dois igual (==) da false, checa o valor e tipo\n";
    }

    // RECOMENDADO
    if ($num_zero === $str_zero) {
        echo "<br>Tres iguais (===) da true, checa apena o valor, inutil\n";
    } else {
        echo "<br>Tres iguais (===) da false, checa o valor e o tipo\n";
    }

    $checando_ternario = $num_zero >= $str_zero ? "valido" : "invalido";
    echo "<br> A checagem com >= foi de valor: $checando_ternario\n";
