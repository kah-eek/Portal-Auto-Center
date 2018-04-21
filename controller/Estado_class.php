<?php

// Imports
require_once('../../../model/EstadoDAO.php');

// @author Caique M. Oliveira
// @data 21/04/2018
// @description Classe Estado

class Estado
{

  // Atributos
  public $idEstado;
  public $estado;

  // Construtor default
  function __construct($idEstado, $estado)
  {
    $this->idEstado = $idEstado;
    $this->estado = $estado;
  }

  /**
  * Obtém todos os Estados existentes na base de dados
  * @return Array Contendo todos os Estados existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados, este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  static function getEstados()
  {
    $estadoDAO = new EstadoDAO();
    return $estadoDAO->getEstados();
  }

}

?>
