<?php
/**
* @author Letícia S. Jesus.
* @date 16/04/2018
* @class Parceiro_class
* Obs.: Essa classe é uma réplica dos
* campos do DB com os métodos de ações do CRUD
*/

class ParceiroDao{

  //ATRIBUTOS
  public $id_parceiro;
  public $nome_fantasia;
  public $razao_social;
  public $cnpj;
  public $id_endereco;
  public $socorrista;
  public $email;
  public $telefone;
  public $foto_perfil;
  public $celular;
  public $id_usuario;
  public $id_plano_contratacao;

  public function __construct(){
    require_once("MySql_class.php");
  }
}
 ?>
