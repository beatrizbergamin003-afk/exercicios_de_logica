<?php


// 8. Tabuada de um número: Crie um programa que peça ao usuário para inserir um número e imprima a tabuada desse número.

//O que o programa faz: 
echo "Esse programa exibe a tabuada do número digitado.\n\n";

// Digite o número
$numero = (int) readline("Digite um número: ");


//// Exibir o número escolhido
echo "\nTabuada do {$numero}:\n";

//Mostra a tabuada de 1 a 10
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "{$numero} x {$i} = {$resultado}\n";
}
