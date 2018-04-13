<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe autenticacao

class Autenticacao
{
  // Atributos
  public $usuario;
  public $senha;

  // Construtor default
  function __construct($usuario, $senha)
  {
    $this->usuario = $usuario;
    $this->senha = $senha;
  }

}

?>
