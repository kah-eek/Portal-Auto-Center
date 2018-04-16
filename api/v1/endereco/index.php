<?php

  // Imports
  require_once('../../../controller/Endereco_class.php');
  require_once('../../../controller/MySql_class.php');
  require_once('../../../model/EnderecoDAO.php');

  $error = '';
  $mensagem = '';
  $status = false;

  // Verifica qual o método de acesso está sendo utilizado pela requisição
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Recurso qual a request deseja utilizar
    // $_GET['action'];

    // Verifica a existência dos parâmatros obrigatórios
    if
    (
      isset($_POST['numero']) &&
      isset($_POST['cidade']) &&
      isset($_POST['cep']) &&
      isset($_POST['bairro']) &&
      isset($_POST['idEstado']) &&
      isset($_POST['complemento']) &&
      isset($_POST['logradouro'])
    )
    {// Parâmetros obrigatórios exitentes

      // Verifica qual recurso deve ser utilizado
      if (isset($_GET['action']) && $_GET['action'] == 'inserir') {// Insere um novo endereco

        // Obtém as keys do request
        $idEstado = $_POST['idEstado'];
        $numero = $_POST['numero'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $complemento = $_POST['complemento'];
        $logradouro = $_POST['logradouro'];

        // Cria um objeto Endereco
        $endereco = new Endereco($numero,$cidade,$cep,$bairro,$complemento,$logradouro,$idEstado,null);

        // Cria um objeto com acesso ao banco de dados
        $enderecoDAO = new EnderecoDAO();

        // Insere um novo endereço no banco de dados
        $idEndereco = $enderecoDAO->registrarEndereco($endereco);

        // Verifica se o registro foi inserido com sucesso na base de dados
        if ($idEndereco != null)// Inserido com sucesso
        {
          $mensagem = 'Endereço inserido com sucesso';
          $status = true;
        }
        else // Falha ao tentar inserir o registro na base de dados
        {
          $mensagem = 'Falha ao tentar registrar o endereço';
          $error = '008';
        }

      }
      else // Nenhum recurso selecionado ou inexistente
      {
        $mensagem = 'recurso não encontrado';
        $error = '404';
      }

    }
    else // Parâmetros obrigatórios não informados
    {
      $error = '007';
      $mensagem = 'Parâmetros obrigatórios não informados';
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
