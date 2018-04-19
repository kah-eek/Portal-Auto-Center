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

    // Verifica se existe a variável do recurso desejado na URL
    if (isset($_GET['action']))
    {
      // Delete um endereço
      if ($_GET['action'] == 'deletar') {

        // Verifica se o parâmetro obrigatório (id) existe na URL
        if (isset($_GET['id'])) { // Variável ID existete na URL

          // Obtém a key da request
          $idEndereco = $_GET['id'];

          // Instância o objeto qual será excluído
          $endereco = new Endereco(null,null,null,null,null,null,null,$idEndereco);

          // Verifica se a exclusão ocorreu com êxito
          if($endereco->deletarEndereco($endereco))// êxito
          {
            $status = true;
            $mensagem = 'Endereço excluído com sucesso';
          }
          else // Falha
          {
            $error = '013';
            $mensagem = 'Falha ao tentar excluir o endereço';
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

          // Obtém as keys do request
          $idEstado = $_POST['idEstado'];
          $numero = $_POST['numero'];
          $cidade = $_POST['cidade'];
          $cep = $_POST['cep'];
          $bairro = $_POST['bairro'];
          $complemento = $_POST['complemento'];
          $logradouro = $_POST['logradouro'];

          // Verifica qual recurso deve ser utilizado
          if ($_GET['action'] == 'inserir') {// Insere um novo endereco

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
          else if($_GET['action'] == 'atualizar')
          {
            // Verifica se o parâmetro obrigatório (id) existe na URL
            if (isset($_GET['id'])) { // Variável ID existete na URL

              // Obtém a key da request
              $idEndereco = $_GET['id'];

              // Cria um objeto Endereco
              $endereco = new Endereco($numero,$cidade,$cep,$bairro,$complemento,$logradouro,$idEstado,$idEndereco);

              if ($endereco->atualizarEndereco($endereco))
              {
                $status = true;
                $mensagem = 'Endereço atualizado com sucesso';
              }
              else
              {
                $error = '014';
                $mensagem = 'Falha ao tentar atualizar o endereço';
              }

            }
            else // Variável ID não existete na URL
            {
              $error = '010';
              $mensagem = 'Parâmetro obrigatório de identificação não informado';
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
                'status'=>$status
              );

  // Exibe o response no formato JSON
  echo json_encode($response);
  // ################################




?>
