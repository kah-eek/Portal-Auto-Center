<?php

// Imports
// require_once('model/PlanoDAO.php');
require_once('../model/PlanoDAO.php');

/**
* @author Caique M. Oliveira
* @date 21/04/2018
* @description Classe de Planos Mensais do parceiro
*/

class Plano
{

  // Atributos
  public $idPlanoContratacao;
  public $plano;
  public $valor;
  public $descricao;

  // Construtor default
  function __construct($idPlanoContratacao,$plano,$valor,$descricao)
  {
    $this->idPlanoContratacao = $idPlanoContratacao;
    $this->plano = $plano;
    $this->valor = $valor;
    $this->descricao = $descricao;
  }
  // ###############################

  /**
  * Obtém todos os planos existentes na base de dados
  * @return Array Contendo todos os Planos existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados, este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  static function getPlanos()
  {
    $planoDAO = new PlanoDAO();
    return $planoDAO->getPlanos();
  }

}

?>
