<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe cliente

class Cliente
{
  public $idUsuario;
  public $idEndereco;
  public $idCliente;
  public $nome;
  public $email;
  public $dtNasc;
  public $cpf;
  public $celular;
  public $sexo;
  public $telefone;
  public $foto;

  // Construtor default
  function __construct($nome,$email,$dtNasc,$cpf,$celular,$sexo,$telefone,$foto,$idCliente,$idEndereco,$idUsuario)
  {
    $this->nome = $nome;
    $this->email = $email;
    $this->dtNasc = $dtNasc;
    $this->cpf = $cpf;
    $this->celular = $celular;
    $this->sexo = $sexo;
    $this->telefone = $telefone;
    $this->foto = $foto;
    $this->idCliente = $idCliente;
    $this->idEndereco = $idEndereco;
    $this->idUsuario = $idUsuario;
  }

  /**
  * Verifica se o cliente informado já encontra-se cadastrado na base de dados
  * @param $clienteObj Objeto Cliente qual será verificado sua existência
  * @return true Cliente já existente na base de dados
  * @return false Cliente não existente na base de dados
  */
  function clienteExistente($clienteObj)
  {
    $clienteDAO = new ClienteDAO();
    return $clienteDAO->clienteExistente($clienteObj);
  }

  /**
  * Insere um novo cliente no banco de dados
  * @param $clienteObj Objeto Cliente qual será inserido no banco de dados
  * @return true Cliente registrado com sucesso na base de dados
  * @return false Falha ao registrar o cliente na base de dados
  */
  function cadastrarCliente($clienteObj)
  {
    $clienteDAO = new ClienteDAO();
    return $clienteDAO->cadastrarCliente($clienteObj);
  }

}

?>
