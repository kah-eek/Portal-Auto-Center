<?php

function SalvarImagem($objeto, ){


  $upload_dir="arquivo/";//CAMIMHO DA PASTA ONDE AS IMAGENS SERÃO ARMAZENADAS.
      //ARMAZENANDO O NOME DO ARQUIVO E A EXTENSÃO QUE FOI SELECIONADA.
  $nome_arq=strtolower(basename($objeto['name']));//BASENAME:RETIRA O NOME DO ARQUIVO, NAME:VEM COM O NOME DO ARQUIVO.
  //var_dump($nome_arq);
      //VERIFICA TIPO DE EXTENSÃO PERMITIDA PARA O PLOAD DO ARQUIVO, USAMOS O COMANDO strstr PARA LOCALIZAR SEQUÊNCIA DE CARACTERES.
  if(strstr($nome_arq, '.jpg') || strstr($nome_arq, '.png') || (strstr($nome_arq, '.gif'))){
          //CRIPTOGRAFIA DO ARQUIVO
          $extensao = substr($nome_arq, strpos($nome_arq,"."),5);
          $prefixo = substr($nome_arq,0, strpos($nome_arq,"."));
          $nome_arq = md5($prefixo).$extensao;

          //GUARDAMOS O CAMINHO E O NOME DA IMAGEM QUE SERÁ INSERIDA NO BD.
          $upload_file =  $upload_dir . $nome_arq;


          if(move_uploaded_file($objeto['tmp_name'], $upload_file)){
           return $upload_file;
          }else{
              return false;
          }

    }
}
?>
