<?php

// Imports
require_once('../../../model/UsuarioDAO.php');

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

  /**
  * Insere um novo usuário no banco de dados
  * @param $usuarioObj Objeto Usuario qual será inserido no banco de dados
  * @return Int Identificação (idUsuario) do novo usuário inserido no banco de dados
  * @return null Falha ao tentar registrar o usuário na base de dados
  */
  function inserirUsuario($usuarioObj)
  {
    $usuarioDAO = new UsuarioDAO();
    return $usuarioDAO->inserirUsuario($usuarioObj);
  }

  /**
  * Atualiza os dados do usuário no banco de dados
  * @param $usuarioObj Objeto Usuario qual será atualizado no banco de dados
  * @return true Atualização realizada com sucesso na base de dados
  * @return false Falha ao tentar atualizar os dados do usuário no banco de dados
  */
  function atualizarUsuario($usuarioObj)
  {
    $usuarioDAO = new UsuarioDAO();
    return $usuarioDAO->atualizarUsuario($usuarioObj);
  }

  /**
  * Deleta o usuário da base de dados
  * @param $usuarioObj Objeto usuário qual será excluído
  * @return true Usuário excluído com sucesso
  * @return false Falha ao tentar excluir o usuário
  */
  function deletarUsuario($usuarioObj)
  {
    $usuarioDAO = new UsuarioDAO();
    return $usuarioDAO->deletarUsuario($usuarioObj);
  }

  /**
  * Obtém as informações de nível de autenticação do usuário informado
  * @return Array Contendo todos os dados do nível de autenticação do usuário informado
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  function obterNivelAutenticacao($usuarioObj)
  {
    $usuarioDAO = new UsuarioDAO();
    return $usuarioDAO->obterNivelAutenticacao($usuarioObj);
  }


}

?>
