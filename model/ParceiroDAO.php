<?php
/**
* @author Letícia S. Jesus.
* @date 16/04/2018
* @class Parceiro_class
* Obs.: Essa classe é uma réplica dos
* campos do DB com os métodos de ações do CRUD
*/

require_once(upload_imagem);

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

  /**
  * INSERINDO O REGISTRO NO BD.
  */
  public static function insert($cadastroDados){
    $sql= "INSERT INTO tbl_parceiro"
    ."(nome_fantasia, razao_social, cnpj, id_enedereco, socorrista, email, telefone, foto_perfil, celular, id_usuario, id_plano_contratacao)"
    ."VALUES("
    ."'".$cadastroDados->nome_fantasia."',"
    ."'".$cadastroDados->razao_social."',"
    ."'".$cadastroDados->cnpj."',"
    ."'".$cadastroDados->id_endereco."',"
    ."'".$cadastroDados->socorrista."',"
    ."'".$cadastroDados->email."',"
    ."'".$cadastroDados->telefone."',"
    ."'".$cadastroDados->foto_perfil."',"
    ."'".$cadastroDados->celular."',"
    ."'".$cadastroDados->id_usuario."',"
    ."'".$cadastroDados->id_plano_contratacao."'"
    .")";

    //INSTÂNCIANDO A CLASSE DO BANCO.
    $conex = new MySql();

    //CHAMANDO O MÉTODO PARA CONECTAR AO BANCO E GUARDA ($PDO_CONEX) O RETORNO DA CONEXÃO COM O BANCO DE DADOS.
    $PDO_CONEX = $conex->getConnection();

    //EXECUTANDO O SCRIPT NO BANCO.
    if($PDO_CONEX->query($sql))
    {
      header("location:modal_cadastro_parceiro.php");
    }else{
      echo "Erro ao inserir no Banco de Dados";
    }

    //FECHANDO A CONEXÃO COM O BANCO
    $PDO_CONEX = null;
  }

  /**
  * ATUALIZANDO O REGISTRO NO BD.
  */
  public function update($idParceiro){
    $sql = "UPDATE tbl_parceiro SET id_parceiro ={$idParceiro->id_pac}, nome_fantasia ='{$idParceiro->nome_fantasia}', razao_social ='{$idParceiro->razao_social}',
    cnpj = '{$idParceiro->cnpj}', id_endereco = '{$idParceiro->id_endereco}', socorrista = '{$idParceiro->socorrista}', email = '{$idParceiro->email}',
    telefone ='{$idParceiro->telefone}', foto_perfil = '{$idParceiro->foto_perfil}', celular ='{$idParceiro->celular}', id_usuario ='{$idParceiro->id_usuario}', id_plano_contratacao ='{$idParceiro->id_plano_contratacao}'
    WHERE id_parceiro ={$idParceiro->id_pac}";

    //INSTÂNCIANDO A CLASSE DO BANCO.
    $conex = new MySql();

    //CHAMANDO O MÉTODO PARA CONECTAR AO BANCO E GUARDA ($PDO_CONEX) O RETORNO DA CONEXÃO COM O BANCO DE DADOS.
    $PDO_CONEX = $conex->getConnection();

    //EXECUTANDO O SCRIPT NO BD.
    $PDO_CONEX->query($sql);
  }

  /**
  * EXCLUÍNDO UM REGISTRO DO BD.
  */
  public function delete($cadastro_dados){
    $sql = "DELETE FROM tbl_parceiro WHERE id_parceiro =".$cadastro_dados->id_pac;

    //INSTÂNCIANDO A CLASSE DO BANCO.
    $conex = new MySql();

    //CHAMANDO O MÉTODO PARA CONECTAR AO BANCO E GUARDA ($PDO_CONEX) O RETORNO DA CONEXÃO COM O BANCO DE DADOS.
    $PDO_CONEX = $conex->getConnection();

    //EXECUTANDO O SCRIPT NO BANCO.
    if($PDO_CONEX->query($sql))
    {
      header("");//OBS.:SERÁ A TELA DO CMS.
    }else{
      echo "Erro ao deletar no Banco de Dados";
    }

    //FECHANDO A CONEXÃO COM O BANCO
    $PDO_CONEX = null;
  }

  /**
  * BUSCANDO UM REGISTRO ESPECÍFICO DO BD.
  */
  public function selectById($cadastro){
    $sql = "SELECT * FROM tbl_parceiro WHERE id_parceiro ={$cadastro->id_pac}";

    //INSTÂNCIANDO A CLASSE DO BANCO.
    $conex = new MySql();

    //CHAMANDO O MÉTODO PARA CONECTAR AO BANCO E GUARDA ($PDO_CONEX) O RETORNO DA CONEXÃO COM O BANCO DE DADOS.
    $PDO_CONEX = $conex->getConnection();

    //EXECUTANDO O SELECT NO BANCO E GUARDANDO O RETORNO NA VARIÁVEL $select.
    $select = $PDO_CONEX->query($sql);

    while($rs = $select->fetch(PDO::FETCH_ASSOC))
    {
      $dados_cadastro = new Cadastro();


      $dados_cadastro->id_pac = $rs["id_parceiro"];
      $dados_cadastro->nome_fantasia = $rs["nome_fantasia"];
      $dados_cadastro->razao_social = $rs["razao_social"];
      $dados_cadastro->cnpj = $rs["cnpj"];
      $dados_cadastro->id_endereco = $rs["id_endereco"];
      $dados_cadastro->socorrista = $rs["socorrista"];
      $dados_cadastro->email = $rs["email"];
      $dados_cadastro->telefone = $rs["telefone"];
      $dados_cadastro->foto_perfil = $rs["foto_perfil"];
      $dados_cadastro->celular = $rs["celular"];
      $dados_cadastro->id_usuario = $rs["id_usuario"];
      $dados_cadastro->id_plano_contratacao = $rs["id_plano_contratacao"];
    }
    return $dados_cadastro;
  }

  /**
  * LISTANDO TODOS OS REGISTROS DO BD.
  */
  public function select(){
    $sql = "SELECT * FROM tbl_parceiro ORDER BY id_parceiro DESC";

    //INSTÂNCIANDO A CLASSE DO BANCO.
    $conex = new MySql();

    //CHAMANDO O MÉTODO PARA CONECTAR AO BANCO E GUARDA ($PDO_CONEX) O RETORNO DA CONEXÃO COM O BANCO DE DADOS.
    $PDO_CONEX = $conex->getConnection();

    //EXECUTANDO O SELECT NO BANCO E GUARDANDO O RETORNO NA VARIÁVEL $select.
    $select = $PDO_CONEX->query($sql);

    //CONTADOR.
    $count = 0;
    while($rs = $select->fetch(PDO::FETCH_ASSOC))
    {
      //CRIA UM ARRAY PARA ARMAZENAR OBJETOS DA CLASSE PARCEIRO.
      $listaCadastros[$count]->id_parceiro = $rs["id_parceiro"];
      $listaCadastros[$count]->nome_fantasia = $rs["nome_fantasia"];
      $listaCadastros[$count]->razao_social = $rs["razao_social"];
      $listaCadastros[$count]->cnpj = $rs["cnpj"];
      $listaCadastros[$count]->id_endereco = $rs["id_endereco"];
      $listaCadastros[$count]->socorrista = $rs["socorrista"];
      $listaCadastros[$count]->email = $rs["email"];
      $listaCadastros[$count]->telefone = $rs["telefone"];
      $listaCadastros[$count]->foto_perfil = $rs["foto_perfil"];
      $listaCadastros[$count]->celular = $rs["celular"];
      $listaCadastros[$count]->id_usuario = $rs["id_usuario"];
      $listaCadastros[$count]->id_plano_contratacao = $rs["id_plano_contratacao"];

      $count +=1;
    }

    //FECHANDO A CONEXÃO COM O BANCO
    $PDO_CONEX = null;

    //APENAS RETORNA O $listaCadastros SE EXISTIR DADOS NO BANCO.
    if(isset($listaCadastros)) return $listaCadastros;

  }

}
 ?>
