<?php

// Imports
require_once('../../controller/MySql_class.php');
require_once('../../model/FaleConoscoDAO.php');

// @author Henrique Otremba
// @data 24/04/2018
// @description Class Fale Conosco

class FaleConosco
{
  // Atributos
  public $idFaleConosco;
  public $nome;
  public $email;
  public $pergunta_sugestao_critica;

  // ########################

  // Construtor default
  function __construct
  (
    $idFaleConosco,
    $nome,
    $email,
    $pergunta_sugestao_critica

  )
  {
    $this->$idFaleConosco = $idFaleConosco;
    $this->$nome = $nome;
    $this->$email = $email;
    $this->$pergunta_sugestao_critica = $pergunta_sugestao_critica;
  }
  // ###############################################

  /**
  * Obtém todos os produtos existentes na base de dados
  * @return Array Contendo todos os produtos existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  static function cadastrosFaleConosco()
  {
    $FaleConoscoDAO = new FaleConoscoDAO();
    return $FaleConoscoDAO->cadastrosFaleConosco();
  }
  function excluir($faleConoscoObj)
  {
    $FaleConoscoDAO = new FaleConoscoDAO();
    return $FaleConoscoDAO->excluir($faleConoscoObj);
  }

}

?>
