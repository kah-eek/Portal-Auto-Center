<?php

// Imports
if(file_exists('model/ParceiroDAO.php'))
{
  require_once('model/ParceiroDAO.php');
}
elseif(file_exists('../../model/ParceiroDAO.php'))
{
  require_once('../../model/ParceiroDAO.php');
}

/**
* @author Caique M. Oliveira
* @date 20/04/2018
* @description Classe Parceiro
*/

class Parceiro
{

  // Atributos
  public $idParceiro;
  public $idEndereco;
  public $idUsuario;
  public $idPlanoContratacao;
  public $nomeFantasia;
  public $razaoSocial;
  public $cnpj;
  public $ativo;
  public $socorrista;
  public $email;
  public $telefone;
  public $celular;
  public $fotoPerfil;
  public $logParceiro;

  // Construtor default
  function __construct
  (
    $idParceiro,
    $idEndereco,
    $idUsuario,
    $idPlanoContratacao,
    $nomeFantasia,
    $razaoSocial,
    $cnpj,
    $ativo,
    $socorrista,
    $email,
    $telefone,
    $celular,
    $fotoPerfil,
    $logParceiro
  )
  {
    $this->idParceiro = $idParceiro;
    $this->idEndereco = $idEndereco;
    $this->idUsuario = $idUsuario;
    $this->idPlanoContratacao = $idPlanoContratacao;
    $this->nomeFantasia = $nomeFantasia;
    $this->razaoSocial = $razaoSocial;
    $this->cnpj = $cnpj;
    $this->ativo = $ativo;
    $this->socorrista = $socorrista;
    $this->email = $email;
    $this->telefone = $telefone;
    $this->celular = $celular;
    $this->fotoPerfil = $fotoPerfil;
    $this->logParceiro = $logParceiro;
  }
  // ###############################

  /**
  * Obtém um parceiro da base de dados
  * @param $nomeParceiro nome do parceiro a ser obtido
  * @return PDO (FETCH_OBJ) Objeto parceiro existente na base de dados
  * @return null Falha ao tentar obter o parceiro na base de dados
  */
  static function obterDadosParceiroByName($nomeParceiro)
  {
    $parceiroDAO = new ParceiroDAO();
    return $parceiroDAO->obterDadosParceiroByName($nomeParceiro);
  }

  /**
  * Obtém um parceiro da base de dados
  * @param $idParceiro Id do parceiro a ser obtido
  * @return PDO (FETCH_OBJ) Objeto parceiro existente na base de dados
  * @return null Falha ao tentar obter o parceiro na base de dados
  */
  static function obterDadosParceiroById($idParceiro)
  {
    $parceiroDAO = new ParceiroDAO();
    return $parceiroDAO->obterDadosParceiroById($idParceiro);
  }

  /**
  * Atualiza o status (ativo ou não ativo) do parceiro no banco de dados
  * @param $parceiroObj Objeto Parceiro qual será atualizado no banco de dados
  * @return true Parceiro atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o parceiro na base de dados
  */
  function atualizarStatusParceiro($parceiroObj)
  {
    $parceiroDAO = new ParceiroDAO();
    return $parceiroDAO->atualizarStatusParceiro($parceiroObj);
  }

  /**
  * Obtém todos os parceiros existentes na base de dados
  * @return Array Contendo todos os parceiros existentes na base de dados
  * Obs.: Caso ocorra algum erro ao tentar realizar a consulta na base de dados este retornará um array contendo um índice ("error") com o valor true ("error":true)
  * Obs.: Os objetos Parceiros armazenados no array são objetos PDO (FECTH_OBJ)
  */
  static function obterParceiros()
  {
    $parceiroDAO = new ParceiroDAO();
    return $parceiroDAO->obterParceiros();
  }

  /**
  * Insere um novo parceiro no banco de dados
  * @param $parceiroObj Objeto Parceiro qual será inserido no banco de dados
  * @return Int Identificação (idParceiro) do novo parceiro inserido no banco de dados
  * @return null Falha ao tentar registrar o parceiro na base de dados
  */
  function inserirParceiro($parceiroObj)
  {
    // Instância um obj com acesso ao db
    $parceiroDAO = new ParceiroDAO();
    // Insere o parceiro no db
    return $parceiroDAO->inserirParceiro($parceiroObj);
  }

  /**
  * Deleta o parceiro da base de dados
  * @param $parceiroObj Objeto parceiro qual será excluído
  * @return true Parceiro excluído com sucesso
  * @return false Falha ao tentar excluir o parceiro
  */
  function deletarParceiro($parceiroObj)
  {
    $parceiroDAO = new ParceiroDAO();
    return $parceiroDAO->deletarParceiro($parceiroObj);
  }

  /**
  * Atualiza o parceiro no banco de dados
  * @param $parceiroObj Objeto Parceiro qual será atualizado no banco de dados
  * @return true Parceiro atualizado com sucesso na base de dados
  * @return false Falha ao tentar atualizar o parceiro na base de dados
  */
  function atualizarParceiro($parceiroObj)
  {
    $parceiroDAO = new ParceiroDAO();
    return $parceiroDAO->atualizarParceiro($parceiroObj);
  }

}

?>
