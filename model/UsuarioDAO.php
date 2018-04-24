<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe UsuarioDAO

class UsuarioDAO
{
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

    // Preenche a statement com os respectivos parâmetros
    $stmt->bindParam(1, $usuarioObj->usuario);
    $stmt->bindParam(2, $usuarioObj->senha);
    $stmt->bindParam(3, $usuarioObj->idNivelUsuario);

    // Verifica se a inserção do registro ocorreu com sucesso e retorna a resposta adquirida
    $result = $stmt->execute() ? $con->lastInsertId() : null;

    // Fecha a conexão com o db
    $con = null;

    return $result;
  }

  /**
  * Atualiza os dados do usuário no banco de dados
  * @param $usuarioObj Objeto Usuario qual será atualizado no banco de dados
  * @return true Atualização realizada com sucesso na base de dados
  * @return false Falha ao tentar atualizar os dados do usuário no banco de dados
  */
  function atualizarUsuario($usuarioObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'UPDATE tbl_usuario '.
      'SET '.
      'usuario = ?, '.
      'senha = ?, '.
      'id_nivel_usuario = ?, '.
      'ativo = ? '.
      'WHERE id_usuario = ?'
    );

    // Preenche a statement com os respectivos parâmetros
    $stmt->bindParam(1, $usuarioObj->usuario);
    $stmt->bindParam(2, $usuarioObj->senha);
    $stmt->bindParam(3, $usuarioObj->idNivelUsuario);
    $stmt->bindParam(4, $usuarioObj->ativo);
    $stmt->bindParam(5, $usuarioObj->idUsuario);

    try {
      // Executa a statement e armazena a quantidade de registros que foram modificados
      $result = $stmt->execute() ? $stmt->rowCount() : -1;

      // Verifica se a atualização do registro ocorreu com sucesso
      $result = $result == -1 ? false : true;

    } catch (\Exception $e) {
      $result = false;
    }

    // Fecha a conexão com o db
    $con = null;

    return $result;
  }

  /**
  * Atualiza o status (ativo ou não ativo) do usuário no banco de dados
  * @param $usuarioObj Objeto Usuario qual será atualizado no banco de dados
  * @return true Usuario atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o usuario na base de dados
  */
  function atualizarStatusUsuario($usuarioObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'UPDATE tbl_usuario SET '.
        'ativo = ?'.
        'WHERE '.
        'id_usuario = ?'
    );

    $stmt->bindParam(1, $usuarioObj->ativo);
    $stmt->bindParam(2, $usuarioObj->idUsuario);

    try {
      // Executa a statement e armazena a quantidade de registros que foram modificados
      $result = $stmt->execute() ? $stmt->rowCount() : -1;

      // Verifica se a atualização do registro ocorreu com sucesso
      $result = $result == -1 ? false : true;

    } catch (\Exception $e) {
      $result = false;
    }

    // Fecha a conexão com o db
    $con = null;

    return $result;

  }

  /**
  * Deleta o usuário da base de dados
  * @param $usuarioObj Objeto usuário qual será excluído
  * @return true Usuário excluído com sucesso
  * @return false Falha ao tentar excluir o usuário
  */
  function deletarUsuario($usuarioObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'DELETE FROM tbl_usuario '.
      'WHERE id_usuario = ?'
    );

    // Preenche a statement com o respectivo parâmetro
    $stmt->bindParam(1,$usuarioObj->idUsuario);

    try {

      // Executa a statement e armazena a quantidade de registros que foram deletados
      $result = $stmt->execute() ? $stmt->rowCount() : -1;

      // Verifica se a exclusão do registro ocorreu com sucesso
      $result = $result == -1 ? false : true;

    } catch (\Exception $e) {
      $result = false;
    }

    // Fecha a conexão com o db
    $con = null;

    return $result;

  }

  /**
  * Obtém as informações de nível de autenticação do usuário informado
  * @return Array Contendo todos os dados do nível de autenticação do usuário informado
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  function obterNivelAutenticacao($usuarioObj)
  {

    // Array qual irá armazenas o nivel do usuário
    $response = array("error"=>true);

    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'SELECT '.
      'usu.id_nivel_usuario AS id, '.
      'nvl_usu.nivel '.
      'FROM tbl_usuario AS usu '.
      'INNER JOIN tbl_nivel_usuario AS nvl_usu '.
      'ON nvl_usu.id_nivel_usuario = usu.id_nivel_usuario '.
      'WHERE '.
      'usuario = ? AND '.
      'senha = ?'
    );

    // Preenche a statement com os respectivos parâmetros
    $stmt->bindParam(1, $usuarioObj->usuario);
    $stmt->bindParam(2, $usuarioObj->senha);

    // Verifica se a execução da query ocorreu com sucesso
    if ($stmt->execute()) // Êxito
    {
      // Remove o índice de erro do array
      unset($response['error']);

      // Preenche o array com os produtos advindos do banco
      while ($nivelUsuario = $stmt->fetch(PDO::FETCH_OBJ)) {
        $response[] = $nivelUsuario;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    return $response;
  }

}

?>
