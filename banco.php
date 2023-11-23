<?php

require "./src/Titular.php";
require "./src/Cpf.php";
require "./src/Conta.php";

$ana = new Titular(new Cpf("433.444.222-90"), "Ana Maria");
$primeiraConta = new Conta($ana);
$primeiraConta->depositar(120);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$anderson = new Titular(new Cpf("422.116.078-90"), "Anderson Santos");
$segundaConta = new Conta($anderson);
$segundaConta->depositar(200);
$segundaConta->sacar(50);

echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();