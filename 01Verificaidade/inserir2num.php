<?php

// 2. Comparações de números: Crie um programa que peça ao usuário para inserir dois números e diga qual deles é maior, ou se são iguais.

// Dizer o que o programa vai fazer: Esse programa diz qual dos números que digitou é maior ou se são iguais
echo "Esse programa diz qual número é maior ou se são iguais.\n";

//Insira dois números
$num1 = (float) readline("Digite seu primeiro número: ");
$num2 = (float) readline("Digite seu segundo número: ");

// Se o primeiro número for maior que o segundo 
if ($num1 > $num2) {
    echo "O primeiro número ({$num1}) é maior que o segundo número ({$num2}).\n";
}

// Se o segundo número for maior que o primeiro
elseif ($num2 > $num1) {
    echo "O segundo número ({$num2}) é maior que o primeiro número ({$num1})";
}

// Se senao eles são iguais
else {
    echo "Os dois números são iguais ({$num1}).\n";
}
