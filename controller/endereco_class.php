<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe endereco

class Endereco
{
  public $idEstado;
  public $idEndereco;
  public $logradouro;
  public $numero;
  public $cidade;
  public $cep;
  public $bairro;
  public $complemento;

  // Construtor default
  function __construct($numero,$cidade,$cep,$bairro,$complemento,$logradouro,$idEstado,$idEndereco)
  {
    $this->numero = $numero;
    $this->cidade = $cidade;
    $this->cep = $cep;
    $this->bairro = $bairro;
    $this->complemento = $complemento;
    $this->logradouro = $logradouro;
    $this->idEstado = $idEstado;
    $this->idEndereco = $idEndereco;
  }

  /**
  * Deleta o endereço da base de dados
  * @param $enderecoObj Objeto endereço qual será excluído
  * @return true Endereço excluído com sucesso
  * @return false Falha ao tentar excluir o endereço
  */
  function deletarEndereco($enderecoObj)
  {
    $enderecoDAO = new EnderecoDAO();
    return $enderecoDAO->deletarEndereco($enderecoObj);
  }

  /**
  * Atualiza o endereço no banco de dados
  * @param $enderecoObj Objeto Endereco qual será atualizado no banco de dados
  * @return true Endereço atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o endereço na base de dados
  */
  function atualizarEndereco($enderecoObj)
  {
    $enderecoDAO = new EnderecoDAO();
    return $enderecoDAO->atualizarEndereco($enderecoObj);
  }

}

?>
