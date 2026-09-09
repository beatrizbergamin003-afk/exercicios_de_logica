<?php

// 4. Verificação de temperatura: Crie um programa que peça ao usuário para inserir uma temperatura e verifique se está frio, agradável ou quente.

//O que o programa faz
echo "Esse programa vai verificar a temperatura, que você digitar aqui: .\n\n";

//Digite a temperatura 
$temperatura = (float) readline("Digite a temperatura em °C: ");

//Vai estar frio quando for menor que 18°C

if ($temperatura <= 18) {
    echo "está " . $temperatura . " c: está frio!";
}

// O clima vai ta agradável quando tiver entre 18°C e 26°C
elseif ($temperatura <=26) {
    echo "está {$temperatura}°C: o clima está agradável. \n";
}

// Quando o clima estiver quente maior que 26°C
else {
    echo "está {$temperatura}°C: o clima está bem quente. \n";
}




