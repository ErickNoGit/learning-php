<?php

use function PHPSTORM_META\type;

$string = (string) "Essa e uma string muito linear";

// is_string() verifica se um valor e string;
$boleano = is_string($string) ? "true\n": "false\n";
echo "Nossa variavel e string ? $boleano";

// strlen() retorna o tamanho da string
echo "Nossa string tem tamanho: " . strlen($string) . "\n";

echo "\n";

//Converte o primeiro caractere de cada palavra para maiúsculo "Upper Case Words"
echo "String antes: $string,\nString agora: " . ucwords($string) . "\n";

echo "\n";

// Converte o primeiro caracter em maisculo
$nome = "esse e o meu nome: erick";
echo "String antes: $nome,\nString agora: ". ucfirst($nome) . "\n";

echo "\n";

// coloca a string em minuscula
echo strtolower($nome) . "\n";

// transforma toda string em maiuscula
echo strtoupper($nome) . "\n";

echo "\n";

// replace meu amor, retorna a string reescrita com outra string
echo str_replace("erick", "joao", $nome) . "\n";

// sub replace insere na posicao da string uma string
echo substr_replace($nome, " Esse", 6, 0) . "\n";

// porem substr retorna uma parte da string, sub string
echo substr($nome, 7, strlen($nome) - 1) . "\n";

// tira espaco no comeco e fim da string
$string_com_espaco = " Ela tem espaco no inicio, e no fim, agora nao tem mais ";
echo "\n";
echo trim($string_com_espaco);
echo "\n";

// Por fim, troca um valor para tipo string
$idade = 24;
$idade_str = strval($idade);
echo is_string($idade_str) ? "E string\n" : "Nao e string\n";
