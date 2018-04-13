<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe produtoDAO

class ProdutoDAO
{
  /**
  * Obtém todos os produtos existentes na base de dados
  * @return Array Contendo todos os produtos existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  static function obterDetalhesProdutos()
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Array qual irá armazenas os produtos existentes
    $produtos = array("error"=>true);

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    // Select dos produtos
    $stmt = $con->prepare('SELECT * FROM view_produto');

    // Verifica se a execução da query ocorreu com sucesso
    if ($stmt->execute()) // Êxito
    {
      // Remove o índice de erro do array
      unset($produtos['error']);

      // Preenche o array com os produtos advindos do banco
      while ($produto = $stmt->fetch(PDO::FETCH_OBJ)) {
        $produtos[] = $produto;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    // Retorna o array contendo os produtos
    return $produtos;
  }

}

?>
