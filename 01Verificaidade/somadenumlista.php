<?php

// 9. Soma dos números em uma lista: Crie um programa que some todos os números em uma lista.

//O que o programa faz:
echo "Este programa soma todos os números de uma lista.\n\n";

//Lista dos números
$numeros = [10, 20, 30, 40, 50];

//variavel para a soma
$soma = 0;

//Soma dos números
foreach ($numeros as $numero) {
    $soma += $numero;
}

// Mostrar o resultado
echo "A soma dos números da lista é: {$soma}\n";



