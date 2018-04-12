<?php

class Produto
{
  // Atributos
  public $idProduto;
  public $idModeloProduto;
  public $idParceiro;
  public $idCor;
  public $idCategoriaProduto;
  public $modelo;
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
    $this->modelo = $modelo;
    $this->preco = $preco;
    $this->conteudoEmbalagem = $conteudoEmbalagem;
    $this->garantia = $garantia;
    $this->descricao = $descricao;
    $this->observacao = $observacao;
  }
  // ###############################################

  static function obterProdutos()
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    $produtos = array();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare('SELECT * FROM view_produto');

    if ($stmt->execute())
    {
      while ($produto = $stmt->fetch(PDO::FETCH_OBJ)) {
        $produtos[] = $produto;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    return $produtos;
  }

}

?>
