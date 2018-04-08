<?php

  // Imports
  require_once('Autenticacao.php');

  $error = '';
  $mensagem = '';
  $status = false;

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'GET'){

    // Obtém qual recurso a request deseja utilizar
    $action = $_GET['action'];

    // Verifica qual recurso deve ser utilizado
    if ($action == 'autenticar') {// Autentica o usuário

      // Obtém as keys do request
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];

      // Cria um objeto para realizar a autenticação
      $autenticacao = new Autenticacao($usuario,$senha);

      // Verifica se o usuário existe na base de dados
      if($autenticacao->login($autenticacao))// Existe na base de dados
      {
        $mensagem = 'usu&#225;rio autenticado com sucesso';
        $status = true;
      }
      else // Não existe na base de dados
      {
        $mensagem = 'usuário inexistente';
      }

    }
    else // Nenhum recurso selecionado ou inexistente
    {
      $mensagem = 'recurso n&#227;o encontrado';
      $error = '404';
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
                'status'=>$status
              );

  // Exibe o response no formato JSON
  echo json_encode($response);
  // ################################




?>
