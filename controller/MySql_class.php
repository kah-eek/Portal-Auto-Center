<?php

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe MySql

class MySql
{
  // Atributos
  private $HOST = 'localhost';
  private $USERNAME = 'root';
  private $SENHA = 'bcd127';
  private $DB = 'dbautofast';

  /**
  * Obtém uma conexão com banco de dados
  * @return PDO Conexão estabelecida com o banco de dados
  * @return json Objeto JSON contendo a mensagem de erro devido a falha ao tentar estabelecer conexão com o db
  */
  public function getConnection()
  {
    try {

      // Cria uma nova conexão com o db
      $conn = new PDO('mysql:host='.$this->HOST.';dbname='.$this->DB, $this->USERNAME,$this->SENHA);

      // Define os atributos da conexao para a exibição de possíveis error
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $conn;

    } catch (PDOException $e) {
      echo json_encode(array(
        'error'=>$e->getMessage()
      ));
    }

  }




}

?>
