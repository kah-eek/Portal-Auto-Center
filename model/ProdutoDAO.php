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

  /**
  * Insere um novo produto no banco de dados
  * @param $produtoObj Objeto qual será inserido no banco de dados
  * @return Int Identificação (idProduto) do novo produto inserido no banco de dados
  * @return null Falha ao tentar registrar o produto na base de dados
  */

  function inserirProduto($produtoObj)
  {
    // Instância de acesso ao db
    $mySql = new Mysql();

    // abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'INSERT INTO tbl_produto ('.
      'id_modelo_produto,'.
      'id_parceiro'.
      'id_cor,'.
      'id_categoria_produto,'.
      'nome,'.
      'preco,'.
      'conteudo_embalagem,'.
      'garantia,'.
      'descricao,'.
      'observacao'.
      ') VALUES(?,?,?,?,?,?,?,?,?,?)'
    );

    // Preenche a statement com os parâmetros
    $stmt->bindParam(1, $produtoObj->id_modelo_produto);
    $stmt->bindParam(2, $produtoObj->id_parceiro);
    $stmt->bindParam(3, $produtoObj->id_cor);
    $stmt->bindParam(4, $produtoObj->id_categoria_produto);
    $stmt->bindParam(5, $produtoObj->nome);
    $stmt->bindParam(6, $produtoObj->preco);
    $stmt->bindParam(7, $produtoObj->conteudo_embalagem);
    $stmt->bindParam(8, $produtoObj->garantia);
    $stmt->bindParam(9, $produtoObj->descricao);
    $stmt->bindParam(10, $produtoObj->observacao);

    // Verifica se a inserção ocorreu com sucesso e retorna a resposta adquirida
    $result = $stmt->execute() ? $con->lastInsertId() : null;

    // Fecha a conexão com o db
    $con = null;

    return $result;
  }


}

?>
