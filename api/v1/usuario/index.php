<?php

  // Imports
  require_once('../../../controller/Usuario_class.php');
  require_once('../../../controller/Autenticacao_class.php');
  require_once('../../../model/UsuarioDAO.php');

  $error = '';
  $mensagem = '';
  $status = false;
  $id = '';

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Recurso qual a request deseja utilizar
    // $_GET['action'];

    // Verifica se existe a variável do recurso desejado na URL
    if (isset($_GET['action']))
    {
      // Delete um usuário
      if ($_GET['action'] == 'deletar') {

        // Verifica se o parâmetro obrigatório (id) existe na URL
        if (isset($_GET['id'])) { // Variável ID existete na URL

          // Obtém a key da request
          $idUsuario = $_GET['id'];

          // Instância o objeto qual será excluído
          $usuario = new Usuario($idUsuario,null, null, null, null, null);

          // Verifica se a exclusão ocorreu com êxito
          if($usuario->deletarUsuario($usuario))// êxito
          {
            $status = true;
            $mensagem = 'Usuário excluído com sucesso';
          }
          else // Falha
          {
            $error = '011';
            $mensagem = 'Falha ao tentar excluir o usuário';
          }

        }
        else // Variável ID não existete na URL
        {
          $error = '010';
          $mensagem = 'Parâmetro obrigatório de identificação não informado';
        }
      }
      else
      {

        // Verifica se os parâmetros obrigatórios foram informados
        if
        (
          isset($_POST['nomeUsuario']) &&
          isset($_POST['senha']) &&
          isset($_POST['idNivelUsuario']) &&
          isset($_POST['ativo'])
        )
        {

          // Obtém as keys do request
          $nomeUsuario = $_POST['nomeUsuario'];
          $senha = $_POST['senha'];
          $idNivelUsuario = $_POST['idNivelUsuario'];
          $ativo = $_POST['ativo'];

          /* Verifica qual recurso deve ser utilizado */

          // Atualiza o usuário
          if ($_GET['action'] == 'atualizar') {

            // Verifica se o parâmetro obrigatório (id) existe na URL
            if (isset($_GET['id'])) { // Variável ID existete na URL

              // Obtém a key da request
              $idUsuario = $_GET['id'];

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
                // Instância um objeto de acesso ao banco de dados
                $usuarioDAO = new UsuarioDAO();

                // Atualiza o usuário no banco de dados
                $usuarioAtualizado = $usuarioDAO->atualizarUsuario($usuario);

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
            else // Variável ID não existete na URL
            {
              $error = '010';
              $mensagem = 'Parâmetro obrigatório de identificação não informado';
            }

          }

          // Insere um novo usuário
          if ($_GET['action'] == 'inserir') {

            // Cria um objeto Usuario
            $usuario = new Usuario(null, $nomeUsuario, $senha, $idNivelUsuario, $ativo, null);

            // Cria um obj Autenticacao para verificar se as credenciais já exsiste no DB
            $autenticacao = new Autenticacao($nomeUsuario, $senha);

            // Verifica se as credenciais já existem
            if ($autenticacao->credencialExistente($autenticacao))
            {// Credencial existente
              $mensagem = 'Usuário já existente';
              $error = '001';
            }
            else // Credenciais não existente - continua com o registro do usuário
            {
              // Instância um objeto de acesso ao banco de dados
              $usuarioDAO = new UsuarioDAO();

              // Insere o usuário no banco de dados
              $idUsuario = $usuarioDAO->inserirUsuario($usuario);

              if ($idUsuario != null)
              {
                $status = true;
                $mensagem = 'Usuário registrado com sucesso';
                $id = $idUsuario;
              }
              else
              {
                $error = '006';
                $mensagem = 'Falha ao tentar registrar o usuário';
              }
            }

          }

        }
        else // Parâmetros obrigatórios não informados
        {
          $error = '007';
          $mensagem = 'Parâmetros obrigatórios não informados';
        }

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
                'status'=>$status,
                'id'=>$id
              );

  // Verifica se a variável id é vazia e então a remove da response caso verdadeiro
  if(empty($id)) unset($response['id']);

  // Exibe o response no formato JSON
  echo json_encode($response,JSON_UNESCAPED_UNICODE);
  // ################################

?>
