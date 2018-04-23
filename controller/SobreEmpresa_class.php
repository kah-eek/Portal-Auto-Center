<?php
/**
* @author Caique M Oliveira
* @date 22/04/2018
*/

// Imports
require_once('model/SobreEmpresaDAO.php');

class SobreEmpresa
{
  // Atributos
  public $idSobreEmpresa;
  public $idTopicoSobreEmpresa;
  public $imagem;
  public $texto;

  // Construtor default
  function __construct($idSobreEmpresa,$idTopicoSobreEmpresa, $imagem, $texto)
  {
    $this->idSobreEmpresa = $idSobreEmpresa;
    $this->idTopicoSobreEmpresa = $idTopicoSobreEmpresa;
    $this->imagem = $imagem;
    $this->texto = $texto;
  }

  /**
  * Atualiza a tabela responsável pelos registros da tela sobre a empresa
  * @param $sobreEmpresaObj Objeto SobreEmpresa qual será atualizado no banco de dados
  * @return true SobreEmpresa atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o SobreEmpresa na base de dados
  */
  function atualizar($sobreEmpresaObj)
  {
    $sobreEmpresaDAO = new SobreEmpresaDAO();
    return $sobreEmpresaDAO->atualizar($sobreEmpresaObj);
  }


}

?>
