<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe cliente

class Cliente
{
  public $idUsuario;
  public $idEndereco;
  public $idCliente;
  public $nome;
  public $email;
  public $dtNasc;
  public $cpf;
  public $celular;
  public $sexo;
  public $telefone;
  public $foto;

  // Construtor default
  function __construct($nome,$email,$dtNasc,$cpf,$celular,$sexo,$telefone,$foto,$idCliente,$idEndereco,$idUsuario)
  {
    $this->nome = $nome;
    $this->email = $email;
    $this->dtNasc = $dtNasc;
    $this->cpf = $cpf;
    $this->celular = $celular;
    $this->sexo = $sexo;
    $this->telefone = $telefone;
    $this->foto = $foto;
    $this->idCliente = $idCliente;
    $this->idEndereco = $idEndereco;
    $this->idUsuario = $idUsuario;
  }

  // CRIAR OS METODOS DE ACESSO AOS DAOs

}

?>
