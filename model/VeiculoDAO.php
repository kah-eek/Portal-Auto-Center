<?php

// @author Caique M. Oliveira
// @data 26/04/2018
// @description Classe VeiculoDAO

class VeiculoDAO
{

  /**
  * Obtém todos as imagens dos veícuços e suas informações entreladas a ela conforme o parceiro informado
  * @return Array Contendo todos as imagens e suas informações entreladas a ela na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  function getImagensVeiculoByNomeParceiro($nomeParceiro)
  {

    // Formata o valor informado para o formato like desejado
    $nomeParceiro = '%'.$nomeParceiro.'%';

    // Array qual irá armazenas as imagens existentes
    $imagens = array('error'=>true);

    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'SELECT '.
      '* '.
      'FROM view_imagem_veiculo_parceiro '.
      'WHERE nome_fantasia OR razao_social LIKE ?'
    );

    $stmt->bindParam(1,$nomeParceiro);

    // Verifica se o select foi executado com êxito
    if($stmt->execute())
    {
      // Destrói o índice de erro
      unset($imagens['error']);

      // Popula a lista com os objetos clientes advindos do DB
      while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
        $imagens[] = $rs;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    return $imagens;
  }

}

?>
