<?php

  // Imports
  require_once('../../../controller/Autenticacao_class.php');
  require_once('../../../controller/Usuario_class.php');

  $error = '';
  $mensagem = '';
  $status = false;
  $nivelUsuario = '';

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Recurso qual a request deseja utilizar
    // $_GET['action'];

    // Verifica a existêcia dos parâmetros obrigatórios
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {// Autentica o usuário

      // Obtém as keys do request
      $nomeUsuario = $_POST['usuario'];
      $senha = $_POST['senha'];

      // Cria um objeto Usuario
      $usuario = new Usuario(null, $nomeUsuario, $senha, null, null, null);

      // Cria um objeto para realizar a autenticação
      $autenticacao = new Autenticacao($nomeUsuario,$senha);

      // Verifica se o usuário existe na base de dados
      if($autenticacao->credencialExistente($autenticacao))// Existe na base de dados
      {

        // Obtém as informações de nível de autenticação do usuário
        $nivel = $usuario->obterNivelAutenticacao($usuario);

        // Verifica se ocorreu algum erro ao obter os dados do nível de autenticação
        if (!isset($nivel['error']))// Obteve êxito
        {
          // Remove o índice de erro do array
          unset($nivel['error']);

          // Preenche respectivo nível do usuário com o nível advindo do DB
          $nivelUsuario = $nivel[0];

        }

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
                'status'=>$status,
                'nivel'=>$nivelUsuario
              );

  // Exibe o response no formato JSON
  echo json_encode($response,JSON_UNESCAPED_UNICODE);
  // ################################




?>
