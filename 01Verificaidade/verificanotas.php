<?php 

// 5. Verificação de notas: Crie um programa que peça ao usuário para inserir sua nota em uma prova e imprima se ele foi aprovado ou reprovado (considerando que a nota mínima para aprovação é 7).

// O que o programa faz:
echo "Esse programa verifica se você foi aprovado ou reprovado.\n";

//Digite a sua senha:
$nota = (float) readline("Digite sua nota aqui:");

// Quando o aluno for aprovado:
    if ($nota >= 7) {
        echo "Você foi aprovado!.\n";
    }

// Quando o aluno for reprovado:
    else {
        echo "Sua nota foi {$nota}, você foi reprovado!.\n";
    }


