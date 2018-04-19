<?php

  // Imports
  require_once('../../../controller/MySql_class.php');
  require_once('../../../controller/Cliente_class.php');
  require_once('../../../model/ClienteDAO.php');

  $error = '';
  $mensagem = '';
  $status = false;
  $id = '';

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {

    // Verifica se existe a variável do recurso desejado na URL
    if (isset($_GET['action']))
    {

      // Delete um cliente
      if ($_GET['action'] == 'deletar') {

        // Verifica se o parâmetro obrigatório (id) existe na URL
        if (isset($_GET['id'])) { // Variável ID existete na URL

          // Obtém a key da request
          $idCliente = $_GET['id'];

          // Instância o objeto qual será excluído
          $cliente = new Cliente(null,null,null,null,null,null,null,null,$idCliente,null,null);

          // Verifica se a exclusão ocorreu com êxito
          if($cliente->deletarCliente($cliente))// êxito
          {
            $status = true;
            $mensagem = 'Cliente excluído com sucesso';
          }
          else // Falha
          {
            $error = '012';
            $mensagem = 'Falha ao tentar excluir o cliente';
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

        // Verifica a existência dos parâmetros obrigatórios
        if
        (
          isset($_POST['idUsuario']) &&
          isset($_POST['idEndereco']) &&
          isset($_POST['nome']) &&
          isset($_POST['email']) &&
          isset($_POST['dtNasc']) &&
          isset($_POST['cpf']) &&
          isset($_POST['celular']) &&
          isset($_POST['telefone']) &&
          isset($_POST['foto']) &&
          isset($_POST['sexo'])
        )
        { // Parâmtros obrigatórios existentes

          // Recurso qual a request deseja utilizar
          // $_GET['action'];

          // Obtém as keys do request
          $idEndereco = $_POST['idEndereco'];
          $idUsuario = $_POST['idUsuario'];
          $nome = $_POST['nome'];
          $email = $_POST['email'];
          $dtNasc = $_POST['dtNasc'];
          $cpf = $_POST['cpf'];
          $celular = $_POST['celular'];
          $sexo = $_POST['sexo'];
          $telefone = $_POST['telefone'];
          $foto = $_POST['foto'];

          // Verifica qual recurso deve ser utilizado
          if ($_GET['action'] == 'inserir') {// Insere um novo clinete

            // Cria um objeto Cliente
            $cliente = new Cliente($nome,$email,$dtNasc,$cpf,$celular,$sexo,$telefone,$foto,null,$idEndereco,$idUsuario);

            // Verifica se o cliente já encontra-se cadastrado na base de dados
            if (!$cliente->cpfExistente($cliente)) // Não cadastrado
            {
              // Insere um novo cliente no banco de dados
              $idCliente = $cliente->cadastrarCliente($cliente);

              // Verifica se o registro foi inserido com sucesso na base de dados
              if($idCliente != null) // Inserido com êxito
              {
                $mensagem = 'Cliente cadastrado com sucesso';
                $status = true;
                $id = $idCliente;
              }
              else // Falha ao tentar inserir o novo cliente
              {
                $error = '009';
                $mensagem = 'Falha ao tentar registrar o novo cliente';
              }

            }
            else // Já cadastrado
            {
              $error = '002';
              $error = 'Cliente já cadastrado';
            }

          }

          if ($_GET['action'] == 'atualizar')// Atualiza o cliente
          {

            // Verifica a existência do parâmetro obrigatório de identificação (idCliente)
            if (isset($_GET['id']))// Parâmetro obrigatório de identificação existente
            {

              // Obtém a key do request
              $idCliente = $_GET['id'];

              // Cria um objeto Cliente
              $cliente = new Cliente($nome,$email,$dtNasc,$cpf,$celular,$sexo,$telefone,$foto,$idCliente,$idEndereco,$idUsuario);

              // Verifica se o cliente está tentando utilizar o cpf de outro cliente para atualizar o seu cpf
              if ($cliente->proprietarioCpf($cliente)) // Utilizando de seu próprio cpf - edição permitida
              {

                // Atualiza o cliente no banco de dados
                if($cliente->atualizarCliente($cliente)) // Atualizado com êxito
                {
                  $mensagem = 'Cliente atualizado com sucesso';
                  $status = true;
                }
                else // Falha ao tentar atualizar o cliente
                {
                  $error = '011';
                  $mensagem = 'Falha ao tentar atualizar o cliente';
                }

              }
              else // Utilizando o cpf de outro cliente já existente - edição não permitida
              {
                $error = '002';
                $mensagem = 'Cliente já cadastrado';
              }

            }
            else // Parâmetro obrigatório de identificação não existente
            {
              $error = '010';
              $mensagem = 'Parâmetro obrigatório de identificação não informado';
            }
          }
        }
        else
        { // Parâmtros obrigatórios não informados
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
    $mensagem = 'Method not allowed';
    $error = '405';
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
  echo json_encode($response);
  // ################################




?>
