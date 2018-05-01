<?php

// Imports
if(file_exists('../../model/VeiculoDAO.php'))
{
  require_once('../../model/VeiculoDAO.php');
}

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
  * Obtém o status da imagem conforme o id da imagem informada
  * @param $idImagem Id da imagem a ter o status recuperado do DB
  * @return Int Contendo o status da imagens (0 = desativada e 1 = ativada)
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um int contendo o número -1
  */
  static function getStatusImagemVeiculoByIdImg($idImagem)
  {
    $veiculoDAO = new VeiculoDAO();
    return $veiculoDAO->getStatusImagemVeiculoByIdImg($idImagem);
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

  /**
  * Atualiza o status (ativada ou desativada) da imagem do veículo no banco de dados
  * @param $idImagem Id da imagem qaul será atualizado no banco de dados
  * @return true Atualização realizada com sucesso na base de dados
  * @return false Falha ao tentar atualizar o status da imagem no banco de dados
  */
  static function atualizarStatusImagem($idImagem, $statusImg)
  {
    $veiculoDAO = new VeiculoDAO();
    return $veiculoDAO->atualizarStatusImagem($idImagem, $statusImg);
  }


}

?>
