<?php

// @author Caique M. Oliveira
// @data 26/04/2018
// @description Classe VeiculoDAO

class VeiculoDAO
{

  /**
  * Atualiza o status (ativada ou desativada) da imagem do veículo no banco de dados
  * @param $idImagem Id da imagem qaul será atualizado no banco de dados
  * @return true Atualização realizada com sucesso na base de dados
  * @return false Falha ao tentar atualizar o status da imagem no banco de dados
  */
  function atualizarStatusImagem($idImagem, $statusImg)
  {
    // Verifica se foi passado um parâmetro boolean e então o converte para 0 ou 1
    if ($statusImg) {$statusImg = 1;}
    if (!$statusImg) {$statusImg = 0;}

    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare('UPDATE tbl_imagem_veiculo_parceiro SET ativo = ? WHERE id_imagem_veiculo_parceiro = ?');

    // Preenche a statement com os respectivos parâmetros
    $stmt->bindParam(1, $statusImg);
    $stmt->bindParam(2, $idImagem);

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
  * Obtém o status da imagem conforme o id da imagem informada
  * @param $idImagem Id da imagem a ter o status recuperado do DB
  * @return Int Contendo o status da imagens (0 = desativada e 1 = ativada)
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um int contendo o número -1
  */
  function getStatusImagemVeiculoByIdImg($idImagem)
  {

    // Armazena o status da imagem
    $statusImg = -1;

    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'SELECT '.
      'ativo '.
      'FROM view_imagem_veiculo_parceiro '.
      'WHERE id_imagem_veiculo_parceiro = ?'
    );

    $stmt->bindParam(1,$idImagem);

    // Verifica se o select foi executado com êxito
    if($stmt->execute())
    {
      // Armazena o status da imagem advinda do DB
      while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
        $statusImg = $rs->ativo;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    return $statusImg;
  }

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
