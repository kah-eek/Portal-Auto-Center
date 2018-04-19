<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe endereco

class EnderecoDAO
{
  /**
  * Insere um novo endereço no banco de dados
  * @param $enderecoObj Objeto Endereco qual será inserido no banco de dados
  * @return Int Identificação (idEndereco) do novo endereço inserido no banco de dados
  * @return null Falha ao tentar registrar o endereço na base de dados
  */
  function registrarEndereco($enderecoObj)
  {

    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'INSERT INTO tbl_endereco ('.
        'logradouro,'.
        'numero,'.
        'cidade,'.
        'id_estado,'.
        'cep,'.
        'bairro,'.
        'complemento'.
      ') VALUES(?,?,?,?,?,?,?)'
    );

    $stmt->bindParam(1, $enderecoObj->logradouro);
    $stmt->bindParam(2, $enderecoObj->numero);
    $stmt->bindParam(3, $enderecoObj->cidade);
    $stmt->bindParam(4, $enderecoObj->idEstado);
    $stmt->bindParam(5, $enderecoObj->cep);
    $stmt->bindParam(6, $enderecoObj->bairro);
    $stmt->bindParam(7, $enderecoObj->complemento);

    // Verifica se a inserção do registro ocorreu com sucesso e retorna a resposta adquirida
    $result = $stmt->execute() ? $con->lastInsertId() : null;

    // Fecha a conexão com o db
    $con = null;

    return $result;
  }

  /**
  * Deleta o endereço da base de dados
  * @param $enderecoObj Objeto endereço qual será excluído
  * @return true Endereço excluído com sucesso
  * @return false Falha ao tentar excluir o endereço
  */
  function deletarEndereco($enderecoObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'DELETE FROM tbl_endereco '.
      'WHERE id_endereco = ?'
    );

    // Preenche a statement com o respectivo parâmetro
    $stmt->bindParam(1,$enderecoObj->idEndereco);

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
  * Atualiza o endereço no banco de dados
  * @param $enderecoObj Objeto Endereco qual será atualizado no banco de dados
  * @return true Endereço atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o endereço na base de dados
  */
  function atualizarEndereco($enderecoObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'UPDATE tbl_endereco SET '.
        'logradouro = ?,'.
        'numero = ?,'.
        'cidade = ?,'.
        'id_estado = ?,'.
        'cep = ?,'.
        'bairro = ?,'.
        'complemento = ?'.
        'WHERE id_endereco = ?'
    );

    $stmt->bindParam(1, $enderecoObj->logradouro);
    $stmt->bindParam(2, $enderecoObj->numero);
    $stmt->bindParam(3, $enderecoObj->cidade);
    $stmt->bindParam(4, $enderecoObj->idEstado);
    $stmt->bindParam(5, $enderecoObj->cep);
    $stmt->bindParam(6, $enderecoObj->bairro);
    $stmt->bindParam(7, $enderecoObj->complemento);
    $stmt->bindParam(8, $enderecoObj->idEndereco);

    // Verifica se a atualização do registro ocorreu com sucesso e retorna a resposta adquirida
    $result = $stmt->execute() ? true : false;

    // Fecha a conexão com o db
    $con = null;

    return $result;

  }

}

?>
