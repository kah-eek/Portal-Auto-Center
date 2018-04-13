<?php

// Imports
require_once('../controller/MySql.php');
// #############################

// @author Caique M. Oliveira
// @data 12/04/2018
// @description Classe autenticacaoDAO

class AutenticacaoDAO
{
  /**
  * verifica as credencias do usuário
  * @param $autenticacaoObj Objeto contendo os dados da autenticação do usuário a ser verificado
  * @return true Credencial confirmada com sucesso
  * @return false Credencial não existente ou ocorra alguma falha ao tentar buscar o registro no banco de dados
  */
  function credencialExistente($autenticacaoObj)
  {
    // Instância de acesso ao db
    $mySql = new MySql();

    // Abre uma nova conexão com o db
    $con = $mySql->getConnection();

    $stmt = $con->prepare('SELECT COUNT(*) AS rows FROM tbl_usuario WHERE usuario= ? AND senha= ?');
    $stmt->bindParam(1,$autenticacaoObj->usuario);
    $stmt->bindParam(2,$autenticacaoObj->senha);
    $stmt->execute();

    // Fecha a conexão com o db
    $con = null;

    if ($stmt->rowCount() > 0) {
      while($response = $stmt->fetch(PDO::FETCH_ASSOC))
      {
        return $response['rows'] > 0 ? true : false;
      }
    }

    return false;
  }

}

?>
