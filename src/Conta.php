<?php

class Conta{
  private Titular $titular;
  private float $saldo;
  private static $numeroDeContas = 0;

  public function __construct(Titular $titular)
  {
    $this->titular = $titular;
    $this->saldo = 0;

    self::$numeroDeContas++;
  }

  public function sacar(float $valorASacar): void
  {
    if($valorASacar > $this->saldo){
      echo "Saldo indisponível";
      return;
    }

    $this->saldo -= $valorASacar;
  }

  public function depositar(float $valorADepositar): void
  {
    if($valorADepositar < 0){
      echo "Valor precisa ser positivo";
      return;
    }

    $this->saldo += $valorADepositar;
  }

  public function transferir(float $valorATRansferir, Conta $contaDestino) : void 
  {
    if($valorATRansferir > $this->saldo){
      echo "Saldo indisponivel";
      return;
    }

    $this->sacar($valorATRansferir);
    $contaDestino->depositar($valorATRansferir);
  }

  public function recuperaSaldo(): float
  {
    return $this->saldo;
  }

  public function recuperaNomeTitular(): string
  {
    return $this->titular->recuperaNome();
  }

  public function recuperaCpfTitular(): string
  {
    return $this->titular->recuperaCpf();
  }

  // public function definiNome(string $nome): void
  // {
  //   $this->nomeTitular = $nome;
  // }


  // public function definiCpf(string $cpf): void
  // {
  //   $this->cpfTitular = $cpf;
  // }

  public static function recuperaNumeroDeContas(): int
  {
    return self::$numeroDeContas;
  }

}

// function criaConta(string $cpf, string $nomeTitular, float $saldo): array
// {
//   return[
//     $cpf => [
//       'titular' => $nomeTitular,
//       'saldo' => $saldo,
//     ]
//   ];
// }
