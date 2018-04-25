<?php

// Imports
if(file_exists('controller/MySql_class.php'))
{
  require_once('controller/MySql_class.php');
}
elseif(file_exists('../../controller/MySql_class.php'))
{
  require_once('../../controller/MySql_class.php');
}

// @author Caique M. Oliveira
// @data 21/04/2018
// @description Classe ParceiroDAO

class ParceiroDAO
{

  /**
  * Obtém um parceiro da base de dados
  * @param $idParceiro Id do parceiro a ser obtido
  * @return PDO (FETCH_OBJ) Objeto parceiro existente na base de dados
  * @return null Falha ao tentar obter o parceiro na base de dados
  */
  function obterDadosParceiroById($idParceiro)
  {
    // Armazena os dados do cliente
    $dadosCliente = null;

    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare('SELECT * FROM view_parceiro WHERE id_parceiro = ?');
    $stmt->bindParam(1, $idParceiro);

    // Verifica se o select foi executado com êxito
    if($stmt->execute())
    {
      while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
        $dadosCliente = $rs;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    return $dadosCliente;
  }

  /**
  * Atualiza o status (ativo ou não ativo) do parceiro no banco de dados
  * @param $parceiroObj Objeto Parceiro qual será atualizado no banco de dados
  * @return true Parceiro atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o parceiro na base de dados
  */
  function atualizarStatusParceiro($parceiroObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'UPDATE tbl_parceiro SET '.
        'ativo = ?'.
        'WHERE '.
        'id_parceiro = ?'
    );

    $stmt->bindParam(1, $parceiroObj->ativo);
    $stmt->bindParam(2, $parceiroObj->idParceiro);

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
  * Obtém todos os parceiros existentes na base de dados
  * @return Array Contendo todos os parceiros existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  * Obs.: Os objetos Parceiros armazenados no array são objetos PDO (FECTH_OBJ)
  */
  function obterParceiros()
  {

    // Array qual irá armazenas os parceiros existentes
    $parceiros = array('error'=>true);

    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare('SELECT * FROM tbl_parceiro');

    // Verifica se o select foi executado com êxito
    if($stmt->execute())
    {
      // Popula a lista com os objetos clientes advindos do DB
      while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
        $parceiros[] = $rs;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    return $parceiros;
  }

  /**
  * Insere um novo parceiro no banco de dados
  * @param $parceiroObj Objeto Parceiro qual será inserido no banco de dados
  * @return Int Identificação (idParceiro) do novo parceiro inserido no banco de dados
  * @return null Falha ao tentar registrar o parceiro na base de dados
  */
  function inserirParceiro($parceiroObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'INSERT INTO tbl_parceiro ('.
        'id_usuario,'.
        'id_plano_contratacao,'.
        'nome_fantasia,'.
        'razao_social,'.
        'cnpj,'.
        'id_endereco,'.
        'socorrista,'.
        'email,'.
        'foto_perfil,'.
        'celular,'.
        'telefone'.
      ') VALUES(?,?,?,?,?,?,?,?,?,?,?)'
    );

    $stmt->bindParam(1, $parceiroObj->idUsuario);
    $stmt->bindParam(2, $parceiroObj->idPlanoContratacao);
    $stmt->bindParam(3, $parceiroObj->nomeFantasia);
    $stmt->bindParam(4, $parceiroObj->razaoSocial);
    $stmt->bindParam(5, $parceiroObj->cnpj);
    $stmt->bindParam(6, $parceiroObj->idEndereco);
    $stmt->bindParam(7, $parceiroObj->socorrista);
    $stmt->bindParam(8, $parceiroObj->email);
    $stmt->bindParam(9, $parceiroObj->fotoPerfil);
    $stmt->bindParam(10, $parceiroObj->celular);
    $stmt->bindParam(11, $parceiroObj->telefone);

    // Verifica se a inserção do registro ocorreu com sucesso e retorna a resposta adquirida
    $result = $stmt->execute() ? $con->lastInsertId() : null;

    // Fecha a conexão com o db
    $con = null;

    return $result;
  }

  /**
  * Deleta o parceiro da base de dados
  * @param $parceiroObj Objeto parceiro qual será excluído
  * @return true Parceiro excluído com sucesso
  * @return false Falha ao tentar excluir o parceiro
  */
  function deletarParceiro($parceiroObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'DELETE FROM tbl_parceiro '.
      'WHERE id_parceiro = ?'
    );

    // Preenche a statement com o respectivo parâmetro
    $stmt->bindParam(1,$parceiroObj->idParceiro);

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
  * Atualiza o parceiro no banco de dados
  * @param $parceiroObj Objeto Parceiro qual será atualizado no banco de dados
  * @return true Parceiro atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o parceiro na base de dados
  */
  function atualizarParceiro($parceiroObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'UPDATE tbl_parceiro SET '.
        'id_plano_contratacao = ?,'.
        'nome_fantasia = ?,'.
        'razao_social = ?,'.
        'cnpj = ?,'.
        'socorrista = ?,'.
        'email = ?,'.
        'foto_perfil = ?,'.
        'celular = ?,'.
        'telefone = ?'.
        'WHERE id_parceiro = ?'
    );

    $stmt->bindParam(1, $parceiroObj->idPlanoContratacao);
    $stmt->bindParam(2, $parceiroObj->nomeFantasia);
    $stmt->bindParam(3, $parceiroObj->razaoSocial);
    $stmt->bindParam(4, $parceiroObj->cnpj);
    $stmt->bindParam(5, $parceiroObj->socorrista);
    $stmt->bindParam(6, $parceiroObj->email);
    $stmt->bindParam(7, $parceiroObj->fotoPerfil);
    $stmt->bindParam(8, $parceiroObj->celular);
    $stmt->bindParam(9, $parceiroObj->telefone);
    $stmt->bindParam(10, $parceiroObj->idParceiro);

    // Verifica se a atualização do registro ocorreu com sucesso e retorna a resposta adquirida
    $result = $stmt->execute() ? true : false;

    // Fecha a conexão com o db
    $con = null;

    return $result;

  }


}

?>
