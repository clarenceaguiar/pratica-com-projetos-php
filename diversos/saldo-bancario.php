<?php

$nomeTitular = "Vinícius Dias";
$saldo = 1000.00;

$menu = "************
Escolha uma opção:
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair\n";

do {

    echo $menu;
    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "************
Titular: $nomeTitular
Saldo atual: R$ $saldo\n";
            break;
        case 2:
            echo "Qual o valor do saque?\n";
            $valorSaque = (float) fgets(STDIN);
            if ($valorSaque > $saldo) {
                echo "Saldo insuficiente.\n";
            } else {
                $saldo -= $valorSaque;
            }
            break;
        case 3:
            echo "Qual o valor do depósito?\n";
            $valorDeposito = (float) fgets(STDIN);
            $saldo += $valorDeposito;
            break;
        case 4:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida.\n";
            break;
    }

} while ($opcao != 4);
