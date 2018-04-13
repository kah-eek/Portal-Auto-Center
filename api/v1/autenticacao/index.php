<?php

  // Imports
  require_once('../../../controller/Autenticacao.php');

  $error = '';
  $mensagem = '';
  $status = false;

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Recurso qual a request deseja utilizar
    // $_GET['action'];

    // Verifica a existêcia dos parâmetros obrigatórios
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {// Autentica o usuário

      // Obtém as keys do request
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];

      // Cria um objeto para realizar a autenticação
      $autenticacao = new Autenticacao($usuario,$senha);

      // Verifica se o usuário existe na base de dados
      if($autenticacao->credencialExistente($autenticacao))// Existe na base de dados
      {
        $mensagem = 'Usuário autenticado com sucesso';
        $status = true;
      }
      else // Não existe na base de dados
      {
        $mensagem = 'Usuário inexistente';
      }

    }
    else // Nenhum recurso selecionado ou inexistente
    {
      $mensagem = 'Parâmetros obrigatórios não informados';
      $error = '007';
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
