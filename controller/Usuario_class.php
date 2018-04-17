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

}

?>
