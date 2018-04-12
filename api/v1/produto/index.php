<?php

  // Imports
  require_once('../Produto.php');
  require_once('../../../model/MySql.php');

  $error = '';
  $mensagem = '';
  $produtos = '';
  $status = false;

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'GET'){

    // Recurso qual a request deseja utilizar
    // $_GET['action'];

    // Obtém todos os produtos existentes na base de dados
    $produtos = Produto::obterDetalhesProdutos();

    // Verifica se ocorreu algum erro ao obter os produtos do banco de dados
    if (isset($produtos['error']))// Obteve falha
    {
      // Remove o índice de erro do array
      unset($produtos['error']);

      // Defini a mensagem de erro
      $mensagem = 'Falha ao obter os produtos';

      // Defini o erro
      $error = '003';
    }
    else // Obteve êxito
    {
      // Defini a mensagem de sucesso
      $mensagem = 'Produtos obtidos com êxito';

      // Define o status para sucesso (true)
      $status = true;
    }

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
                'status'=>$status,
                'produtos'=>$produtos
              );

  // Exibe o response no formato JSON
  echo json_encode($response);
  // ################################




?>
