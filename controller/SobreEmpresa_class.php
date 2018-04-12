<?php
/**
* @author letícia Santos
* @date 10/04/2018
* @class Empresa
* Obs.: REALIZA O CRUD RELACIONADA A EMPRESA
*/

require_once(../model/upload_imagem.php);

class ControllerSobreEmpresa
{
  //INSERINDO UM NOVO REGISTRO
  public  function novo()
  {
    //INSTÂNCIA DA CLASSE SOBRE EMPRESA
    $empresa = new Empresa();

    // Carregando os dados digitados pelo usuário nos atributos do objeto/classe
    $empresa->imagem = Upload($_FILES["flefoto"]);
    $empresa->texto = $_POST["txttexto"];

    // Chama o método insert da classe Conatto
     // Existe também a possibilidade de chamar o método da seguinte forma:
     // $contato->insert($contato);
     Empresa::insert($empresa);
  }

  //ATUALIZANDO UM REGISTRO EXISTENTE
  public function editar()
  {
     // Guarda o id do contato que foi passado pela view
    $id_sobre_empresa = $_GET["id"];

    $empresa = new Empresa();

    $empresa->imagem = Upload($_FILES["flefoto"]);
    $empresa->texto = $_POST["txttexto"];
    $empresa->id_sobre_empresa = $_GET["id_sobre_empresa"];

    $empresa->update($empresa);
  }

  //APAGANDO UM REGISTRO EXISTENTE
  public function excluir()
  {
    // Guarda o id do contato que foi passado pela view
    $sobre_empresa = $_GET["id"];

    // Instância da classe Conatto
    $empresa = new Empresa();

    // Carrega o id do registro para dentro do objeto
    $empresa->id = $id_sobre_empresa;

    // Chama o método da model para deletar o registro
    $empresa->delete($empresa);
  }

  //LOCALIZANDO UM REGISTRO EXISTENTE
  public function buscar
  {
    $empresa = new Empresa();
    $dados_empresa = new Empresa();

    $empresa->id = $id_sobre_empresa;

    $dados_empresa = $empresa->selectById($empresa);

    require_once("modal_sobre_empresa");
  }


}

 ?>
