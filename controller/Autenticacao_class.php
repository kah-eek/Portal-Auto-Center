<?php

// Imports
require_once('../model/AutenticacaoDAO.php');


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

  /**
  * verifica as credencias do usuário
  * @param $autenticacaoObj Objeto contendo os dados da autenticação do usuário a ser verificado
  * @return true Credencial confirmada com sucesso
  * @return false Credencial não existente ou ocorra alguma falha ao tentar buscar o registro no banco de dados
  */
  function credencialExistente($autenticacaoObj)
  {
    $autenticacaoDAO = new AutenticacaoDAO();
    return $autenticacaoDAO->credencialExistente($autenticacaoObj);
  }


}

?>
