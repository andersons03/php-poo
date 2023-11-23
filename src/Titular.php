<?php

class Titular
{
  private Cpf $cpf;
  private string $nome;

  public function __construct(Cpf $cpf, string $nome){
    $this->cpf = $cpf;
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }

  public function recuperaNome(): string
  {
    return $this->nome;
  }

  public function recuperaCpf(): string
  {
    return $this->cpf->recuperaCpf();
  }

  private function validaNomeTitular(string $nomeTitular){
    if(strlen($nomeTitular) < 5){
      echo "O nome do titular deve ter mais de cinco caracteres";
      exit();
    }
  }
}
