<?php

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
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'INSERT INTO tbl_usuario ('.
        'usuario,'.
        'senha,'.
        'id_nivel_usuario'.
      ') VALUES(?,?,?)'
    );

    $stmt->bindParam(1, $usuarioObj->usuario);
    $stmt->bindParam(2, $usuarioObj->senha);
    $stmt->bindParam(3, $usuarioObj->idNivelUsuario);

    // Verifica se a inserção do registro ocorreu com sucesso e retorna a resposta adquirida
    return $stmt->execute() ? $con->lastInsertId() : null;

    // Fecha a conexão com o db
    $con = null;
  }

}

?>
