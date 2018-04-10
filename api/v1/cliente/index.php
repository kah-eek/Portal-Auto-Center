<?php

  // Imports
  require_once('../Cliente.php');
  require_once('../Usuario.php');
  require_once('../Endereco.php');
  require_once('../Autenticacao.php');

  $error = '';
  $mensagem = '';
  $status = false;

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Recurso qual a request deseja utilizar
    // $_GET['action'];

    // Verifica qual recurso deve ser utilizado
    if (isset($_GET['action']) && $_GET['action'] == 'inserir') {// Insere um novo clinete

      // Obtém as keys do request
      // ************ Dados Gerais ***********
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $dtNasc = $_POST['dtNasc'];
      $cpf = $_POST['cpf'];
      $celular = $_POST['celular'];
      $sexo = $_POST['sexo'];
      $telefone = $_POST['telefone'];
      // $foto = $_POST['foto'];
      $foto = null;

      // ************ Usuário ***********
      $nomeUsuario = $_POST['usuario'];
      $senha = $_POST['senha'];
      $idNivelUsuario = $_POST['idNivelUsuario'];

      // ************ Endereço ***********
      $idEstado = $_POST['idEstado'];
      $numero = $_POST['numero'];
      $cidade = $_POST['cidade'];
      $cep = $_POST['cep'];
      $bairro = $_POST['bairro'];
      $complemento = $_POST['complemento'];
      $logradouro = $_POST['logradouro'];

      // Cria um objeto Usuario
      $usuario = new Usuario(null, $nomeUsuario, $senha, $idNivelUsuario, null, null);

      // Cria um obj Autenticacao para verificar se as credenciais já exsiste no DB
      $autenticacao = new Autenticacao($nomeUsuario, $senha);

      // Verifica se as credenciais já existem
      if ($autenticacao->credencialExistente($autenticacao)) {// Credencial existente
        $mensagem = 'Usuário já existente';
        $error = '001';
      }else{ //  Credenciais não existente - continua com o cadastramento do cliente

        // Insere um novo usuário no banco de dados
        $idUsuario = $usuario->inserirUsuario($usuario);

        // Cria um objeto Endereco
        $endereco = new Endereco($numero,$cidade,$cep,$bairro,$complemento,$logradouro,$idEstado,null);

        // Insere um novo endereço no banco de dados
        $idEndereco = $endereco->registrarEndereco($endereco);

        // Cria um objeto Cliente
        $cliente = new Cliente($nome,$email,$dtNasc,$cpf,$celular,$sexo,$telefone,$foto,null,$idEndereco,$idUsuario);

        // Verifica se o cliente já encontra-se cadastrado na base de dados
        if (!$cliente->clienteExistente($cliente)) {// Não cadastrado

          // Insere um novo cliente no banco de dados
          if($cliente->cadastrarCliente($cliente))
          {
            $mensagem = 'Cliente cadastrado com sucesso';
            $status = true;
          }

        }else {// Já cadastrado
          $error = '002';
          $error = 'Cliente já cadastrado';
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
