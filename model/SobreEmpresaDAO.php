<?php

/**
* @author letícia Santos
* @date 10/04/2018
* @class Empresa
* Obs.: Essa classe é uma réplica dos
* campos do DB com os métodos de ações do CRUD
*/

require_once('upload_imagem.php');

class Empresa
{
  //ATRIBUTOS
  public $id_sobre_empresa;
  public $imagem;
  public $texto;

  public function __construct()
  {
    require_once("controller/MySql_class.php");
  }

  //INSERIR O REGISTRO NO BD
  public static function insert($empresaDados)
  {
    $sql = "INSERT INTO tbl_sobre_empresa"
          ."(imagem, texto)"
          ."VALUES("
          ."'".$empresaDados->imagem."',"
          ."'".$empresaDados->texto."'"
          .")";

    //INSTÂNCIA A CLASSE DO BANCO
    $conex = new MySql();

    $PDO_CONEX = $conex->getConnection();

    //EXECUTAR O SCRIPT NO BD
    if ($PDO_CONEX->query($sql))
    {
      header("modal_cms_empresa.php");
    }else{
      echo "Erro ao inserir no Banco de Dados";
    }

    //FECHANDO A CONEXÃO COM O BANCO
    $PDO_CONEX = null;
  }

  //ATUALIZANDO O REGISTRO NO BD
  public function update($idEmpresa)
  {
    $sql = "UPDATE tbl_sobre_empresa SET id_sobre_empresa = {$idEmpresa->id}, imagem = '{$idEmpresa->imagem}', texto = '{$idEmpresa->texto}' WHERE id_sobre_empresa ={$idEmpresa->id}";

    //INSTÂNCIA A CLASSE DO BD
    $conex = new mySql();

    //CHAMA O MÉTODO PARA CONECTAR NO BD E GUARDA ($PDO_CONEX) O RETORNO DA CONEXÃO COM O BANCO DE DADOS
    $PDO_CONEX = $conex->getConnection();

    //EXECUTA O SCRIPT NO BD
    $PDO_CONEX->query($sql);

  }

  //DELETANDO O REGISTRO NO BD
  public function delete($sobre_empresa)
  {
    $sql = "DELETE FROM tbl_sobre_empresa WHERE id_sobre_empresa = ".$sobre_empresa->id;

    //INSTÂNCIA A CLASSE DO BD
    $conex = new mySql();

    //CHAMA O MÉTODO PARA CONECTAR NO BD E GUARDA ($PDO_CONEX) O RETORNO DA CONEXÃO COM O BANCO DE DADOS
    $PDO_CONEX = $conex->getConnection();

    //EXECUTA O SCRIPT NO BANCO
    if($PDO_CONEX->query($sql))
    {
      header("modal_cms_empresa.php");
    }else {
      echo "Erro ao deletar no Banco de Dados";
    }

    //FECHA A CONEXÃO COM O BD
    $PDO_CONEX = null;
  }

  //LISTANDO OS REGISTROS NO BD
  public function select()
  {
    $sql = "SELECT * FROM tbl_sobre_empresa ORDER BY id_sobre_empresa DESC";

    //INSTÂNCIA A CLASSE DO BD
    $conex = new mySql();

    //CHAMA O MÉTODO PARA CONECTAR NO BD E GUARDA ($PDO_CONEX) O RETORNO DA CONEXÃO COM O BANCO DE DADOS
    $PDO_CONEX = $conex->getConnection();

    // Executa o select no Banco de Dados e guarda o retorno na variável $select
    $select = $PDO_CONEX->query($sql);

    //CONTADOR
    $count = 0;
    while ($rs = $select->fetch(PDO::FETCH_ASSOC))
    {
      // Cria um array para armazenar objetos da classe Contato
      $listaEmpresa[] = new Empresa();

      //GUARDA OS DADOS QUE ESTÃO VINDO DO BD EM CADA ÍNDICE DO OBJETO CRIADO
      $listaEmpresa[$count]->id_sobre_empresa = $rs["id_sobre_empresa"];
      $listaEmpresa[$count]->imagem = $rs["imagem"];
      $listaEmpresa[$count]->texto = $rs["texto"];

      $count +=1;
    }
      //DESCONECTANDO A CONEXÃO COM O BD
      $PDO_CONEX = null;

      //APENAS RETORNA O $listaEmpresa SE EXISTIR DADOS NO BD
      if(isset($listaEmpresa))return $listaEmpresa;
  }

  //BUSCANDO UM REGISTRO ESPECÍFICO NO BD
  public function selectById($empresa)
  {
    $sql = "SELECT * FROM tbl_sobre_empresa WHERE id_sobre_empresa = {$empresa->id}";

    //INSTÂNCIA A CLASSE DO BD
    $conex = new mySql();

    //CHAMA O MÉTODO PARA CONECTAR NO BD E GUARDA ($PDO_CONEX) O RETORNO DA CONEXÃO COM O BANCO DE DADOS
    $PDO_CONEX = $conex->getConnection();

    // Executa o select no Banco de Dados e guarda o retorno na variável $select
    $select = $PDO_CONEX->query($sql);

    while($rs = $select->fetch(PDO::FETCH_ASSOC))
    {
      $dados_empresa = new Empresa();

      $dados_empresa->id_sobre_empresa = $rs["id_sobre_empresa"];
      $dados_empresa->imagem = $rs["imagem"];
      $dados_empresa->texto = $rs["texto"];
    }

    return $dados_empresa;
  }
}
 ?>
