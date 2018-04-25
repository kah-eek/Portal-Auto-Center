<?php

// @author Henrique Otremba dos Santos
// @data 12/04/2018
// @description Classe FaleConoscoDAO

class FaleConoscoDAO
{
  /**
  * Obtém todos os registros existentes na base de dados
  * @return Array Contendo todos os registros existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  function cadastrosFaleConosco()
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Array qual irá armazenas os registros existentes
    $faleConosco = array("error"=>true);

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    // Select dos produtos
    $stmt = $con->prepare('SELECT * FROM tbl_fale_conosco');

    // Verifica se a execução da query ocorreu com sucesso
    if ($stmt->execute()) // Êxito
    {
      // Remove o índice de erro do array
      unset($faleConosco['error']);

      // Preenche o array com os produtos advindos do banco
      while ($registros = $stmt->fetch(PDO::FETCH_OBJ)) {
        $faleConosco[] = $registros;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    // Retorna o array contendo os registros
    return $faleConosco;
  }


  function deletaCadastrosFaleConosco($idFaleConosco)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Array qual irá armazenas os registros existentes
    $faleConosco = array("error"=>true);

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    // Select dos produtos
    $stmt = $con->prepare('DELETE FROM tbl_fale_conosco WHERE id_fale_conosco=?');
    $stmt->bindParam(1,$idFaleConosco);

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

    // Retorna o array contendo os registros
    return $faleConosco;
  }
}
