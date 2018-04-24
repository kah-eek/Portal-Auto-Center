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
  * Obtém um cliente da base de dados
  * @param $idCliente Id do cliente a ser obtido
  * @return PDO (FETCH_OBJ) Objeto cliente existente na base de dados
  * @return null Falha ao tentar obter o cliente na base de dados
  */
  static function obterDadosClienteById($idCliente)
  {
    $clienteDAO = new ClienteDAO();
    return $clienteDAO->obterDadosClienteById($idCliente);
  }

  /**
  * Obtém todos os clientes existentes na base de dados
  * @return Array Contendo todos os clientes existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  */
  static function obterClientes()
  {
    $clienteDAO = new ClienteDAO();
    return $clienteDAO->obterClientes();
  }

  /**
  * Verifica se o cpf existente na base de dados pertence ao objeto informado
  * @param $clienteObj Objeto Cliente qual terá seu CPF checada
  * @return true Cliente proprietário do cpf contido no objeto Cliente
  * @return false Cliente não proprietário do cpf contido no objeto Cliente
  */
  function proprietarioCpf($clienteObj)
  {
    $clienteDAO = new ClienteDAO();
    return $clienteDAO->proprietarioCpf($clienteObj);
  }

  /**
  * Verifica se já encontra-se cadastrado o cpf na base de dados
  * @param $clienteObj Objeto Cliente qual terá seu CPF verificado
  * @return true CPF existente na base de dados
  * @return false CPF inexistente na base de dados
  */
  function cpfExistente($clienteObj)
  {
    $clienteDAO = new ClienteDAO();
    return $clienteDAO->cpfExistente($clienteObj);
  }

  /**
  * Insere um novo cliente no banco de dados
  * @param $clienteObj Objeto Cliente qual será inserido no banco de dados
  * @return Int Identificação (idCliente) do novo cliente inserido no banco de dados
  * @return null Falha ao tentar registrar o cliente na base de dados
  */
  function cadastrarCliente($clienteObj)
  {
    $clienteDAO = new ClienteDAO();
    return $clienteDAO->cadastrarCliente($clienteObj);
  }

  /**
  * Atualiza o cliente no banco de dados
  * @param $clienteObj Objeto Cliente qual será atualizado no banco de dados
  * @return true Cliente atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o cliente na base de dados
  */
  function atualizarCliente($clienteObj)
  {
    $clienteDAO = new ClienteDAO();
    return $clienteDAO->atualizarCliente($clienteObj);
  }

  /**
  * Deleta o cliente da base de dados
  * @param $clienteObj Objeto cliente qual será excluído
  * @return true Cliente excluído com sucesso
  * @return false Falha ao tentar excluir o cliente
  */
  function deletarCliente($clienteObj)
  {
    $clienteDAO = new ClienteDAO();
    return $clienteDAO->deletarCliente($clienteObj);
  }

}

?>
