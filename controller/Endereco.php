<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe endereco

class Endereco
{
  public $idEstado;
  public $idEndereco;
  public $logradouro;
  public $numero;
  public $cidade;
  public $cep;
  public $bairro;
  public $complemento;

  // Construtor default
  function __construct($numero,$cidade,$cep,$bairro,$complemento,$logradouro,$idEstado,$idEndereco)
  {
    $this->numero = $numero;
    $this->cidade = $cidade;
    $this->cep = $cep;
    $this->bairro = $bairro;
    $this->complemento = $complemento;
    $this->logradouro = $logradouro;
    $this->idEstado = $idEstado;
    $this->idEndereco = $idEndereco;
  }

  // CRIAR OS METODOS DE ACESSO AOS DAOs

}

?>
