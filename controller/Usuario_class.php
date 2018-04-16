<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe Usuario

class Usuario
{
  public $idUsuario;
  public $usuario;
  public $senha;
  public $idNivelUsuario;
  public $ativo;
  public $log;

  // Construtor default
  function __construct($idUsuario, $usuario, $senha, $idNivelUsuario, $ativo, $log)
  {
    $this->idUsuario = $idUsuario;
    $this->usuario = $usuario;
    $this->senha = $senha;
    $this->idNivelUsuario = $idNivelUsuario;
    $this->ativo = $ativo;
    $this->log = $log;
  }

  // CRIAR OS METODOS DE ACESSO AOS DAOs
  

}

?>
