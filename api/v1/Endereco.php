<?php

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
  * Insere um novo endereço no banco de dados
  * @param $enderecoObj Objeto Endereco qual será inserido no banco de dados
  * @return Int Identificação (idEndereco) do novo endereço inserido no banco de dados
  * @return null Falha ao tentar registrar o endereço na base de dados
  */
  function registrarEndereco($enderecoObj)
  {

    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'INSERT INTO tbl_endereco ('.
        'logradouro,'.
        'numero,'.
        'cidade,'.
        'id_estado,'.
        'cep,'.
        'bairro,'.
        'complemento'.
      ') VALUES(?,?,?,?,?,?,?)'
    );

    $stmt->bindParam(1, $enderecoObj->logradouro);
    $stmt->bindParam(2, $enderecoObj->numero);
    $stmt->bindParam(3, $enderecoObj->cidade);
    $stmt->bindParam(4, $enderecoObj->idEstado);
    $stmt->bindParam(5, $enderecoObj->cep);
    $stmt->bindParam(6, $enderecoObj->bairro);
    $stmt->bindParam(7, $enderecoObj->complemento);

    // Verifica se a inserção do registro ocorreu com sucesso e retorna a resposta adquirida
    return $stmt->execute() ? $con->lastInsertId() : null;

    // Fecha a conexão com o db
    $con = null;
  }

}

?>
