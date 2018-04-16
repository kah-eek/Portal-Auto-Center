<?php

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

  // CRIAR OS METODOS DE ACESSO AOS DAOs
  

}

?>
