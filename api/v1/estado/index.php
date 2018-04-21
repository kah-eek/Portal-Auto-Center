<?php

  // Imports
  require_once('../../../controller/Estado_class.php');

  $error = '';
  $mensagem = '';
  $status = false;
  $estados = '';
  $id = '';

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'GET'){

    // Obtém todos os Estados existentes na base de dados
    $estados = Estado::getEstados();

    // Verifica se ocorreu algum erro ao obter os Estados do banco de dados
    if (isset($estados['error']))// Obteve falha
    {
      // Remove o índice de erro do array
      unset($produtos['error']);

      // Defini a mensagem de erro
      $mensagem = 'Falha ao tentar obter os Estados';

      // Defini o erro
      $error = '015';
    }
    else // Obteve êxito
    {
      // Defini a mensagem de sucesso
      $mensagem = 'Estados obtidos com êxito';

      // Define o status para sucesso (true)
      $status = true;
    }

  }
  else
  {
    // Preenche o erro com o respectivo motivo
    $error = '405';
    $mensagem = 'Method not allowed';
  }

  // Prepara o reponse da rota
  $response = array
              (
                'error'=>$error,
                'mensagem'=>$mensagem,
                'status'=>$status,
                'estados'=>$estados,
                'id'=>$id
              );

  // Verifica se a variável id é vazia e então a remove da response caso verdadeiro
  if(empty($id)) unset($response['id']);

  // Exibe o response no formato JSON
  echo json_encode($response);
  // ################################




?>
