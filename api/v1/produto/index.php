<?php

  // Imports
  require_once('../Produto.php');
  require_once('../../../model/MySql.php');

  $error = '';
  $mensagem = '';
  $produto = '';
  $status = false;

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'GET'){

    // Recurso qual a request deseja utilizar
    // $_GET['action'];

    $produto = Produto::obterProdutos();

  }
  else
  {
    // Preenche o erro com o respectivo motivo
    $error = 'Method not allowed';
  }

  // Prepara o reponse da rota
  $response = array
              (
                'error'=>$error,
                'mensagem'=>$mensagem,
                'produto'=>$produto,
                'status'=>$status
              );

  // Exibe o response no formato JSON
  echo json_encode($response);
  // ################################




?>
