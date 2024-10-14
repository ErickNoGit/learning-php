<?php
    // Operador ternario
    $idade = 10;
    $maior_idade = $idade >= 18 ? true : false;

    // bloco condicional
    if ($maior_idade) {
        echo "<br>Ele e maior de Idade, possuindo $idade anos";
    } else {
        echo "<br>Ele nao e maior de Idade, possui apenas $idade anos";
    }

    // operadores logicos
    // ! not, || or, && and
    if (!$maior_idade) {
        echo "<br>Agora ele e maior de idade, inverti com ! (not)";
    }

    if ($maior_idade || !$maior_idade) {
        echo "<br>False || (or) True dara true";
    }
    
    if ($maior_idade && !$maior_idade) {
        echo "<br>False && (and) True dara true";
    } else {
        echo "<br>False && (and) True dara false";
    }

    // verificando valores de objetos
    $string_vazia = "";
    if ($string_vazia) {
        echo "<br>String vazia deu true";
    } else {
        echo "<br>String vazia deu false";
    }

    $string_cheia = "Jose";
    if ($string_cheia) {
        echo "<br>String cheia deu true";
    } else {
        echo "<br>String cheia deu false";
    }

    $array_vazio = [];
    if ($array_vazio) {
        echo "<br>Array do objeto -> $array_vazio = [] deu true";
    } else {
        echo "<br>Array do objeto -> $array_vazio = [] deu false";
    }

    $array_com_numero = array(1, 2, 3, 4, 5);
    if ($array_com_numero) {
        echo "<br>Array do objeto -> $array_com_numero = array(1, 2, 3, 4, 5), deu true";
    } else {
        echo "<br>Array do objeto -> $array_com_numero = array(1, 2, 3, 4, 5), deu false";
    }

    $array_string = ["Joao", "Maria", "Daniel"];
    if ($array_string) {
        echo "<br>Array de objeto -> $array_string = [\"Joao\", \"Maria\", \"Daniel\"] deu true";
    } else {
        echo "<br>Array de objeto -> $array_string = [\"Joao\", \"Maria\", \"Daniel\"] deu false";
    }


    // varios fluxos
    $cor = "amarelo";
    // $cor = "laranja";
    if ($cor === "azul") {
        echo "<br>A cor escolhida e azul ?";
    } else if ($cor === "rosa") {
        echo "<br>A cor escolhida e rosa ?";
    } else if ($cor === "amarelo") {
        echo "<br>A cor escolhida foi o $cor";
    } else {
        echo "<br>A cor nao cabe a nenhuma opcao!";
    }

    // verificacoes fracas
    $num_zero = 0;
    $str_zero = "0";

    if ($num_zero == $str_zero) {
        echo "<br>Dois igual (==) da true, so checa o valor";
    } else {
        echo "<br>Dois igual (==) da false, checa o valor e tipo";
    }

    // RECOMENDADO
    if ($num_zero === $str_zero) {
        echo "<br>Tres iguais (===) da true, checa apena o valor, inutil";
    } else {
        echo "<br>Tres iguais (===) da false, checa o valor e o tipo";
    }

    $checando_ternario = $num_zero >= $str_zero ? "valido" : "invalido";
    echo "<br> A checagem com >= foi de valor: $checando_ternario";
?>