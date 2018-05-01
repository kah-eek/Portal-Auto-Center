<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe produtoDAO

class ProdutoDAO
{

  /**
  * Obtém o status da imagem conforme o id da imagem informada
  * @param $idImagem Id da imagem a ter o status recuperado do DB
  * @return Int Contendo o status da imagens (0 = desativada e 1 = ativada)
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um int contendo o número -1
  */
  function getStatusImagemProdutoByIdImg($idImagem)
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
      'FROM view_imagem_produto_parceiro '.
      'WHERE id_imagem_produto_parceiro = ?'
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
  * Atualiza o status (ativada ou desativada) da imagem do produto no banco de dados
  * @param $idImagem Id da imagem qual será atualizado no banco de dados
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

    $stmt = $con->prepare('UPDATE tbl_imagem_produto_parceiro SET ativo = ? WHERE id_imagem_produto_parceiro = ?');

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
  * Obtém todos as imagens dos produtos e suas informações entreladas a ela conforme o parceiro informado
  * @return Array Contendo todos as imagens e suas informações entreladas a ela na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  function getImagensServicosByNomeParceiro($nomeParceiro)
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
      'FROM view_imagem_produto_parceiro '.
      'WHERE '.
      'id_categoria_produto = 2 AND '.
      'nome_fantasia LIKE ?'
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

  /**
  * Deleta a imagem do produto da base de dados
  * @param $idImg Id da imagem qual será excluída
  * @return true Imagem excluída com sucesso
  * @return false Falha ao tentar excluir a imagem
  */
  function deletarImagemProduto($idImg)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'DELETE FROM tbl_imagem_produto_parceiro '.
      'WHERE id_imagem_produto_parceiro = ?'
    );

    // Preenche a statement com o respectivo parâmetro
    $stmt->bindParam(1,$idImg);

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
