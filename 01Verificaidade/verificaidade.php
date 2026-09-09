<?php

// 1. Verificação de idade: Crie um programa que peça ao usuário para inserir a sua idade e verifique se ele é menor de idade, adulto ou idoso.


//Dizer o que o programa faz: Este programa classifica a faixa etária por idade.

echo "Este é um programa para verificar a idade.";


//Receber do usuário a idade
$idade = readline("\nDigite sua idade aqui:");

//Se a idade for maior que 65 = idoso

if ($idade >= 65) {
      echo " anos, você é um senhor, está na flor da idade.";
}

//Se senao a idade for maior que 21 = adulto

elseif ($idade >= 21) {
    echo "anos, você é um adulto.";
}


//Criança.

elseif ($idade <= 10) {
    echo "anos, você é uma criança.";
}