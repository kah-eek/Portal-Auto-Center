<?php

/**
* @author Henrique Otremba dos Santos
* @date 22/04/2018
*/

// Imports
require_once('controller/MySql_class.php');

class ClienteParceiroDAO
{

  /**
  * Atualiza a tabela responsável pelos registros da tela sobre a empresa
  * @param $sobreEmpresaObj Objeto SobreEmpresa qual será atualizado no banco de dados
  * @return true SobreEmpresa atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o SobreEmpresa na base de dados
  */
  function atualizar($clienteParceiroObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare(
      'UPDATE tbl_sobre_cliente_parceiro SET '.
        'imagem = ?,'.
        'descricao = ? '.
        'WHERE '.
        'id_sobre_cliente_parceiro = ?'
    );

    $stmt->bindParam(1, $clienteParceiroObj->imagem);
    $stmt->bindParam(2, $clienteParceiroObj->descricao);
    $stmt->bindParam(3, $clienteParceiroObj->idSobreClienteParceiro);

    // Verifica se a atualização do registro ocorreu com sucesso e retorna a resposta adquirida
    $result = $stmt->execute() ? true : false;

    // Fecha a conexão com o db
    $con = null;

    return $result;

  }

}

?>
