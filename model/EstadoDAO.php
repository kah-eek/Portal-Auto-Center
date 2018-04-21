<?php

// @author Caique M. Oliveira
// @data 21/04/2018
// @description Classe EstadoDAO

// Imports
require_once('../../../controller/MySql_class.php');

class EstadoDAO
{

  /**
  * Obtém todos os Estados existentes na base de dados
  * @return Array Contendo todos os Estados existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados, este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  function getEstados()
  {
    // Array qual irá armazenas os Estados existentes
    $estados = array('error'=>true);

    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare('SELECT * FROM tbl_estado');

    // Verifica se o select foi executado com sucesso
    if ($stmt->execute())// Executado com sucesso
    {
      // Remove o índice de erro do array
      unset($estados['error']);

      // Popula a lista de Estados com os Estados advindos do DB
      while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
        // Renomeia o campo 'id_estado' para 'id'
        $estado = array(
          'id'=>$rs->id_estado,
          'estado'=>$rs->estado
        );
        
        $estados[] = $estado;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    // Retorna o array contendo os Estados
    return $estados;
  }



}

?>
