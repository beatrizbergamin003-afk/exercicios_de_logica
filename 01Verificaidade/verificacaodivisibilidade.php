<?php

// 3. Verificação de divisibilidade: Crie um programa que peça ao usuário para inserir dois números e verifique se o primeiro número é divisível pelo segundo.

// Dizer o que o programa faz
echo "Esse programa verifica se o primeiro número é divisível pelo segundo.\n\n";

//Receber o primeiro número digitado pelo usuário
$num1 = (int) readline("Digite o primeiro número: ");

//Receber o segundo número digitado pelo usuário
$num2 = (int) readline("Digite o segundo número: ");

//Vamos verificar se o segundo número não é zero
if ($num2 == 0) {
    echo "Não é possível dividir por zero! Digite um número diferente de zero.\n";
}

//Quando é divisível 
elseif ($num1 % $num2 == 0) {
    echo "O número {$num1} é divisível por {$num2}.\n";
}

// Não é divisível
else {
    echo "O número {$num1} não é divisível por {$num2}. \n";
}



