<?php

  // Imports
  // require_once('../Autenticacao.php');

  $error = '';
  $mensagem = '';
  $status = false;

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Recurso qual a request deseja utilizar
    // $_GET['action'];

    // Verifica qual recurso deve ser utilizado
    if (isset($_GET['action']) && $_GET['action'] == 'atualizar') {// Atualiza um cliente

      // Verifica se existe a variável de identificação do usuário an URL
      if (isset($_GET['id']))// Existe a variável ID na URL
      {
        // Obtém as keys do request
        $idUsuario = $_GET['id'];
        $nomeUsuario = $_POST['nomeUsuario'];
        $senha = $_POST['senha'];
        $idNivelUsuario = $_POST['idNivelUsuario'];
        $ativo = $_POST['idNivelUsuario'];

        // Cria um objeto Usuario
        $usuario = new Usuario($idUsuario, $nomeUsuario, $senha, $idNivelUsuario, $ativo, null);

        // Cria um obj Autenticacao para verificar se as credenciais já exsiste no DB
        $autenticacao = new Autenticacao($nomeUsuario, $senha);

        // Verifica se as credenciais já existem
        if ($autenticacao->credencialExistente($autenticacao))
        {// Credencial existente
          $mensagem = 'Usuário já existente';
          $error = '001';
        }
        else // Credenciais não existente - continua com a atualização do usuário
        {
          // Atualiza o usuário no banco de dados
          $usuarioAtualizado = $usuario->atualizarUsuario($usuario);

          if ($usuarioAtualizado)
          {
            $status = true;
            $mensagem = 'Usuário atualizado com sucesso';
          }
          else
          {
            $error = '006';
            $mensagem = 'Falha ao tentar atualizar o usuário';
          }
        }

      }
      else // Não existe a variável ID na URL
      {
        $error = '004';
        $mensagem = 'Identificação do usuário (ID) não informada';
      }

    }
    else // Nenhum recurso selecionado ou inexistente
    {
      $mensagem = 'recurso não encontrado';
      $error = '404';
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
                'status'=>$status
              );

  // Exibe o response no formato JSON
  echo json_encode($response);
  // ################################

?>
