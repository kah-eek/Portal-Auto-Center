<?php

  // Imports
  require_once('../../../controller/Usuario_class.php');
  require_once('../../../controller/Autenticacao_class.php');

  $error = '';
  $mensagem = '';
  $status = false;

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'PUT'){

    // Obtém as vaiáveis advindas da request
    parse_str(file_get_contents('php://input'), $_PUT);

    // print_r($_PUT);
    echo $_PUT['ativo'];

    // Atualiza um cliente
    // if (isset($_GET['action']) && $_GET['action'] == 'atualizar') {

      // Verifica se os parâmetros obrigatórios foram informados
      if
      (
        isset($_GET['id']) &&
        isset($_PUT['nomeUsuario']) &&
        isset($_PUT['senha']) &&
        isset($_PUT['idNivelUsuario']) &&
        isset($_PUT['ativo'])
      )
      {// Parâmetros obrigatórios informados
        // Obtém as keys do request
        $idUsuario = $_GET['id'];
        $nomeUsuario = $_POST['nomeUsuario'];
        $senha = $_POST['senha'];
        $idNivelUsuario = $_POST['idNivelUsuario'];
        $ativo = $_POST['ativo'];

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
      else // Parâmetros obrigatórios não informados
      {
        $error = '007';
        $mensagem = 'Parâmetros obrigatórios não informados';
      }

    // }
    // else // Nenhum recurso selecionado ou inexistente
    // {
    //   $mensagem = 'recurso não encontrado';
    //   $error = '404';
    // }

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
