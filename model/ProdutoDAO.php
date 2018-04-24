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
  function obterDetalhesProdutos()
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

  /**
  * Obtém todos os dados simples dos produtos existentes na base de dados, como imagem, nome , preco e ativo
  * @return Array Contendo todos os produtos existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  function obterDetalhesSimplesProdutos()
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Array qual irá armazenas os produtos existentes
    $produtosSimples = array("error"=>true);

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    // Select dos produtos
    $stmt = $con->prepare('SELECT  tp.nome, tp.preco, tipp_img.imagem FROM tbl_imagem_produto_parceiro as tipp_img INNER JOIN tbl_produto as tp on tipp_img.id_produto = tp.id_produto;');

    // Verifica se a execução da query ocorreu com sucesso
    if ($stmt->execute()) // Êxito
    {
      // Remove o índice de erro do array
      unset($produtosSimples['error']);

      // Preenche o array com os produtos advindos do banco
      while ($produtoSimples = $stmt->fetch(PDO::FETCH_OBJ)) {
        $produtosSimples[] = $produtoSimples;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    // Retorna o array contendo os produtos
    return $produtosSimples;
  }



}

?>
