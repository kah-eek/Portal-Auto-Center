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
  * Insere um novo cliente no banco de dados
  * @param $clienteObj Objeto Cliente qual será inserido no banco de dados
  * @return true Cliente registrado com sucesso na base de dados
  * @return false Falha ao registrar o cliente na base de dados
  */
  function cadastrarCliente($clienteObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'INSERT INTO tbl_cliente ('.
        'nome,'.
        'dtNasc,'.
        'cpf,'.
        'email,'.
        'celular,'.
        'id_endereco,'.
        'sexo,'.
        'telefone,'.
        'id_usuario,'.
        'foto_perfil'.
      ') VALUES(?,?,?,?,?,?,?,?,?,?)'
    );

    $stmt->bindParam(1, $clienteObj->nome);
    $stmt->bindParam(2, $clienteObj->dtNasc);
    $stmt->bindParam(3, $clienteObj->cpf);
    $stmt->bindParam(4, $clienteObj->email);
    $stmt->bindParam(5, $clienteObj->celular);
    $stmt->bindParam(6, $clienteObj->idEndereco);
    $stmt->bindParam(7, $clienteObj->sexo);
    $stmt->bindParam(8, $clienteObj->telefone);
    $stmt->bindParam(9, $clienteObj->idUsuario);
    $stmt->bindParam(10, $clienteObj->foto);

    // Verifica se a inserção do registro ocorreu com sucesso e retorna a resposta adquirida
    return $stmt->execute() ? true : false;

    // Fecha a conexão com o db
    $con = null;
  }

  /**
  * Atualiza o cliente no banco de dados
  * @param $clienteObj Objeto Cliente qual será atualizado no banco de dados
  * @return true Cliente atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o cliente na base de dados
  */
  function atualizarCliente($clienteObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'UPDATE tbl_cliente SET '.
        'nome = ?,'.
        'dtNasc = ?,'.
        'cpf = ?,'.
        'email = ?,'.
        'celular = ?,'.
        'id_endereco = ?,'.
        'sexo = ?,'.
        'telefone = ?,'.
        'foto_perfil = ? '.
        'WHERE '.
        'id_cliente = ?'
    );

    $stmt->bindParam(1, $clienteObj->nome);
    $stmt->bindParam(2, $clienteObj->dtNasc);
    $stmt->bindParam(3, $clienteObj->cpf);
    $stmt->bindParam(4, $clienteObj->email);
    $stmt->bindParam(5, $clienteObj->celular);
    $stmt->bindParam(6, $clienteObj->idEndereco);
    $stmt->bindParam(7, $clienteObj->sexo);
    $stmt->bindParam(8, $clienteObj->telefone);
    $stmt->bindParam(9, $clienteObj->foto);
    $stmt->bindParam(9, $clienteObj->idCliente);

    // Verifica se a atualização do registro ocorreu com sucesso e retorna a resposta adquirida
    $result = $stmt->execute() ? true : false;

    // Fecha a conexão com o db
    $con = null;

    return $result;

  }

  /**
  * Verifica se o cliente informado já encontra-se cadastrado na base de dados
  * @param $clienteObj Objeto Cliente qual será verificado sua existência
  * @return true Cliente já existente na base de dados
  * @return false Cliente não existente na base de dados
  */
  function clienteExistente($clienteObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare('SELECT COUNT(*) AS counter FROM tbl_cliente WHERE cpf = ?');
    $stmt->bindParam(1, $clienteObj->cpf);

    // Verifica se o select foi executado com êxito
    if($stmt->execute())
    {
      while ($answer = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result = $answer['counter'] > 0 ? true : false;
      }
    }

    // Fecha a conexão com o db
    $con = null;

    return $result;
  }

}

?>
