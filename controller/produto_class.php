<?php

// Imports

if(file_exists('../../../model/ProdutoDAO.php'))
{
  require_once('../../../model/ProdutoDAO.php');
}
elseif(file_exists('model/ProdutoDAO.php'))
{
  require_once('model/ProdutoDAO.php');
}
elseif(file_exists('../../../controller/MySql_class.php'))
{
  require_once('../../../controller/MySql_class.php');
}
elseif(file_exists('controller/MySql_class.php'))
{
  require_once('controller/MySql_class.php');
}
elseif(file_exists('../../model/ProdutoDAO.php'))
{
  require_once('../../model/ProdutoDAO.php');
}

// require_once('../../controller/MySql_class.php');
// require_once('../../model/ProdutoDAO.php');

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe produto

class Produto
{
  // Atributos
  public $idProduto;
  public $idModeloProduto;
  public $idParceiro;
  public $idCor;
  public $idCategoriaProduto;
  public $preco;
  public $conteudoEmbalagem;
  public $garantia;
  public $descricao;
  public $observacao;
  // ########################

  // Construtor default
  function __construct
  (
    $idProduto,
    $idModeloProduto,
    $idParceiro,
    $idCor,
    $idCategoriaProduto,
    $nome,
    $preco,
    $conteudoEmbalagem,
    $garantia,
    $descricao,
    $observacao
  )
  {
    $this->idProduto = $idProduto;
    $this->idModeloProduto = $idModeloProduto;
    $this->idParceiro = $idParceiro;
    $this->idCor = $idCor;
    $this->idCategoriaProduto = $idCategoriaProduto;
    $this->nome = $nome;
    $this->preco = $preco;
    $this->conteudoEmbalagem = $conteudoEmbalagem;
    $this->garantia = $garantia;
    $this->descricao = $descricao;
    $this->observacao = $observacao;


  }
  // ###############################################

  /**
  * Obtém todos as imagens dos produtos e suas informações entreladas a ela conforme o parceiro informado
  * @return Array Contendo todos as imagens e suas informações entreladas a ela na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  static function getImagensProdutosByNomeParceiro($nomeParceiro)
  {

    $produtoDAO = new ProdutoDAO();
    return $produtoDAO->getImagensProdutosByNomeParceiro($nomeParceiro);
  }

  /**
  * Atualiza o status (ativada ou desativada) da imagem do produto no banco de dados
  * @param $idImagem Id da imagem qual será atualizado no banco de dados
  * @return true Atualização realizada com sucesso na base de dados
  * @return false Falha ao tentar atualizar o status da imagem no banco de dados
  */
  static function atualizarStatusImagem($idImagem, $statusImg)
  {
    $produtoDAO = new ProdutoDAO();
    return $produtoDAO->atualizarStatusImagem($idImagem, $statusImg);
  }

  /**
  * Obtém todos as imagens dos produtos e suas informações entreladas a ela conforme o parceiro informado
  * @return Array Contendo todos as imagens e suas informações entreladas a ela na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  static function getImagensServicosByNomeParceiro($nomeParceiro)
  {
    $produtoDAO = new ProdutoDAO();
    return $produtoDAO->getImagensServicosByNomeParceiro($nomeParceiro);
  }

  /**
  * Obtém todos os produtos existentes na base de dados
  * @return Array Contendo todos os produtos existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  static function obterDetalhesProdutos()
  {
    $produtoDAO = new ProdutoDAO();
    return $produtoDAO->obterDetalhesProdutos();
  }

  /**
  * Deleta a imagem do produto da base de dados
  * @param $idImg Id da imagem qual será excluída
  * @return true Imagem excluída com sucesso
  * @return false Falha ao tentar excluir a imagem
  */
  static function deletarImagemProduto($idImg)
  {
    $produtoDAO = new ProdutoDAO();
    return $produtoDAO->deletarImagemProduto($idImg);
  }

  static function obterDetalhesSimplesProdutos()
  {
    $produtoDAO = new ProdutoDAO();
    return $produtoDAO->obterDetalhesSimplesProdutos();
  }

  static function inserirProduto($produtoObj)
  {
    $produtoDAO = new produtoDAO();
    return $produtoDAO->inserirProduto($produtoObj);
  }

}

?>
