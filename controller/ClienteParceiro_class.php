<?php
/**
* @author Caique M Oliveira
* @date 22/04/2018
*/

// Imports
require_once('model/ClienteParceiroDAO.php');

class ClienteParceiro
{
  // Atributos
  public $idSobreClienteParceiro;
  public $idTipoDescricao;
  public $imagem;
  public $descricao;


  // Construtor default
  function __construct($idSobreClienteParceiro,$idTipoDescricao, $imagem, $descricao)
  {
    $this->$idSobreClienteParceiro = $idSobreClienteParceiro;
    $this->$idTipoDescricao = $idTipoDescricao;
    $this->imagem = $imagem;
    $this->$descricao = $descricao;
  }

  /**
  * Atualiza a tabela responsável pelos registros da tela sobre a empresa
  * @param $sobreEmpresaObj Objeto SobreEmpresa qual será atualizado no banco de dados
  * @return true SobreEmpresa atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o SobreEmpresa na base de dados
  */
  function atualizar($clienteParceiroObj)
  {
    $clienteParceiroDAO = new ClienteParceiroDAO();
    return $clienteParceiroDAO->atualizar($clienteParceiroObj);
  }


}

?>
