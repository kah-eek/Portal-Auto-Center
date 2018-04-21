<?php

// @author Caique M. Oliveira
// @data 21/04/2018
// @description Classe de planos mensais do parceiro com acesso ao DB

// Imports
// require_once('controller/MySql_class.php');
require_once('../controller/MySql_class.php');
// file_exists('../controller/MySql_class.php') ? require_once('../controller/MySql_class.php') : require_once('../controller/MySql_class.php');

class PlanoDAO
{

  /**
  * Obtém todos os planos existentes na base de dados
  * @return Array Contendo todos os Planos existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados, este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  function getPlanos()
  {
    // Array qual irá armazenas os Estados existentes
    $planos = array('error'=>true);

    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare('SELECT * FROM tbl_plano_contratacao');

    // Verifica se o select foi executado com sucesso
    if ($stmt->execute())// Executado com sucesso
    {
      // Remove o índice de erro do array
      unset($planos['error']);

      // Popula a lista de Planos com os planos advindos do DB
      while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {

        // Armazena os dados do plano advindo do DB
        $idPlanoContratacao = $rs['id_plano_contratacao'];
        $planoContratacao = $rs['plano'];
        $valor = $rs['valor'];
        $descricao = $rs['descricao'];

        // Intância um novo objeto Plano e o popula com os dados advindos do DB
        $plano = new Plano($idPlanoContratacao, $planoContratacao, $valor, $descricao);

        // Preenche o array com o plano recém-criado
        $planos[] = $plano;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    // Retorna o array contendo os Planos
    return $planos;
  }

}

?>
