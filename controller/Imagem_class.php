<?php

// Imports
// require_once('../../../model/EstadoDAO.php');

// @author Caique M. Oliveira
// @data 21/04/2018
// @description Classe Imagem

class Imagem
{

  // Atributos
  public $nome;
  public $extensao;
  public $diretorioDestino;
  public $prefixo;
  public $diretorioTemporario;

  // Construtor default
  function __construct($imageFileObj, $diretorioDestino)
  {
    /*
    ARMAZENANDO O NOME DO ARQUIVO
    BASENAME:RETIRA O NOME DO ARQUIVO, NAME:VEM COM O NOME DO ARQUIVO.
    */
    $this->nome = strtolower(basename($imageFileObj['name'])); // Obtém o nome do arq.
    // ARMAZENANDO A EXTENSÃO QUE FOI SELECIONADA.
    $this->extensao = substr($imageFileObj['name'], strpos($imageFileObj['name'],"."),5); // Obtém a extensão do arq.
    $this->diretorio = $diretorioDestino;
    $this->prefixo = substr($imageFileObj['name'],0, strpos($imageFileObj['name'],"."));
    $this->diretorioTemporario = $imageFileObj['tmp_name'];
  }

  /**
  * Move a imagem da pasta temporária para o server
  * @param $imagemOb Objeto da imagem
  * @return false Caso ocorra lagum erro ao mover o arquivo
  * @return Int 0 Caso a extenção não seja válida
  */
  function salvarImagem($imagemObj){
    // CAMIMHO DA PASTA ONDE AS IMAGENS SERÃO ARMAZENADAS.
    $upload_dir= $imagemObj->diretorio;

    //VERIFICA TIPO DE EXTENSÃO PERMITIDA PARA O PLOAD DO ARQUIVO, USAMOS O COMANDO strstr PARA LOCALIZAR SEQUÊNCIA DE CARACTERES.
    if(strstr($imagemObj->nome, '.jpg') || strstr($imagemObj->nome, '.png') || (strstr($imagemObj->nome, '.gif'))){
      //CRIPTOGRAFIA DO ARQUIVO
      $extensao = $imagemObj->extensao;
      $prefixo = $imagemObj->prefixo;
      $nome_arq = md5($prefixo).$extensao;

      //GUARDAMOS O CAMINHO E O NOME DA IMAGEM QUE SERÁ INSERIDA NO BD.
      $upload_file = $upload_dir.$nome_arq;

      if(move_uploaded_file($imagemObj->diretorioTemporario, $upload_file)){
       return $upload_file;
      }else{
       return false;
      }
    }
    return 0;
  }

}

?>
