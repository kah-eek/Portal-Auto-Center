<?php

// Imports
require_once('../../model/VeiculoDAO.php');

// @author Caique M. Oliveira
// @data 26/04/2018
// @description Classe Veiculo

class Veiculo
{

  // Atributos
  public $idVeiculo;
  public $anoFabricacao;
  public $placa;
  public $idCor;
  public $idModelo;
  public $qtdPortas;
  public $quilometroRodado;
  public $idTipoVeiculo;
  public $idModeloVeiculo;

  // Construtor default
  function __construct
  (
    $idVeiculo,
    $anoFabricacao,
    $placa,
    $idCor,
    $idModelo,
    $qtdPortas,
    $quilometroRodado,
    $idTipoVeiculo,
    $idModeloVeiculo
  )
  {
    $this->idVeiculo = $idVeiculo;
    $this->anoFabricacao = $anoFabricacao;
    $this->placa = $placa;
    $this->idCor = $idCor;
    $this->idModelo = $idModelo;
    $this->qtdPortas = $qtdPortas;
    $this->quilometroRodado = $quilometroRodado;
    $this->idTipoVeiculo = $idTipoVeiculo;
    $this->idModeloVeiculo = $idModeloVeiculo;
  }

  /**
  * Obtém todos as imagens dos veícuços vinculados ao parceiro informado
  * @return Array Contendo todos as imagens existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  static function getImagensVeiculoByNomeParceiro($nomeParceiro)
  {
    $veiculoDAO = new VeiculoDAO();
    return $veiculoDAO->getImagensVeiculoByNomeParceiro($nomeParceiro);
  }

}

?>
