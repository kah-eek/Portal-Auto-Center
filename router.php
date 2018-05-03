<?php

  // Obtém a controller desejada
  $controller = $_GET["controller"];

  // Obtém o modo de operação
  $modo = $_GET["modo"];

  //VERIFICA QUAL CONTROLLER SERÁ UTILIZADA
  switch ($controller)
  {
    case 'parceiro':

    require_once("controller/Parceiro_class.php");
    require_once("controller/Imagem_class.php");

      // Verifica qual o recurso será utilizado
      switch ($modo) {
        case 'novo': // Insere um parceiro

          // Instância um objeto imagem e o popula com a imagem vinda do form
          $imagem = new Imagem($_FILES['btn_img_parceiro'], 'view/pictures/parceiro/');

          // Instância um objeto parceiro e o popula com os dados do form
          $parceiro = new Parceiro(
            null,
            $_POST['idEndereco'],
            $_POST['idUsuario'],
            $_POST['cbx_plano'],
            $_POST['txt_nome'],
            $_POST['txt_razao'],
            $_POST['txt_cnpj'],
            null,
            0,
            $_POST['txt_email'],
            $_POST['txt_telefone'],
            $_POST['txt_celular'],
            $imagem->salvarImagem($imagem), // Retorna o caminho da imagem
            null
          );

          // Verifica se a inserção ocorreu com êxito
          if($parceiro->inserirParceiro($parceiro))// Êxito
          {
            // Define o status como sucesso na inserção
            $response = array('status'=>true);
          }
          else // Falha
          {
            // Define o status como falha ao tentar realizar a inserção
            $response = array('status'=>false);
          }

          // exibe o retorno da inserção do parceiro
          echo JSON_encode($response);

          break;

          case 'atualizarStatus':

            // Instância um objeto Parceiro para atualiza-lo no banco de dados
            $parceiro = new Parceiro
            (
              $_POST['id'],
              null,
              null,
              null,
              null,
              null,
              null,
              $_POST['ativo'],
              null,
              null,
              null,
              null,
              null,
              null
            );

            // Verifica se a atualização ocorreu com êxito
            if($parceiro->atualizarStatusParceiro($parceiro))// Êxito
            {
              // Define o status como sucesso na inserção
              $response = array('status'=>true);
            }
            else // Falha
            {
              // Define o status como falha ao tentar realizar a atualização
              $response = array('status'=>false);
            }

            // exibe o retorno da inserção do parceiro
            echo JSON_encode($response);

          break;
      }
      break;

      case 'sobreEmpresa':

        require_once("controller/SobreEmpresa_class.php");

        // Verifica qual o recurso será utilizado
        switch ($modo)
        {
          case 'atualizar':

            // Instância um objeto SobreEmpresa e o popula com os dados do form
            $sobreEmpresa = new SobreEmpresa(
              $_POST['id'], // id_sobre_empresa
              $_POST['idTopico'], // id_topico_sobre_empresa (missao,visao,valores e empresa)
              $_POST['srcImg'], // Caminho da imagem
              $_POST['textoDescritivo'] // Texto descritivo
            );

            // Verifica se a atualização ocorreu com êxito
            if($sobreEmpresa->atualizar($sobreEmpresa))// Êxito
            {
              // Define o status como sucesso na inserção
              $response = array('status'=>true);
            }
            else // Falha
            {
              // Define o status como falha ao tentar realizar a atualização
              $response = array('status'=>false);
            }

            // exibe o retorno da inserção do parceiro
            echo JSON_encode($response);

          break;
        }

      break;

      case 'clienteParceiro':

        require_once("controller/ClienteParceiro_class.php");

        // Verifica qual o recurso será utilizado
        switch ($modo)
        {
          case 'atualizar':

            // Instância um objeto SobreEmpresa e o popula com os dados do form
            $clienteParceiro = new ClienteParceiro(
              $_POST['id'], // id_sobre_empresa
              $_POST['idTopico'], // id_topico_sobre_empresa (missao,visao,valores e empresa)
              $_POST['srcImg'] //caminho da imagem
            );

            // Verifica se a atualização ocorreu com êxito
            if($clienteParceiro->atualizar($clienteParceiro))// Êxito
            {
              // Define o status como sucesso na inserção
              $response = array('status'=>true);
            }
            else // Falha
            {
              // Define o status como falha ao tentar realizar a atualização
              $response = array('status'=>false);
            }

            // exibe o retorno da inserção do parceiro
            echo JSON_encode($response);

          break;
        }

      break;

      case 'usuario':

        require_once("controller/Usuario_class.php");
        require_once("controller/MySql_class.php");
        require_once("model/UsuarioDAO.php");

        // Verifica qual o recurso será utilizado
        switch ($modo)
        {
          case 'atualizarStatus':

            // Instância um objeto Usuario para atualiza-lo no banco de dados
            $usuario = new Usuario($_POST['id'], null, null, null, $_POST['ativo'], null);

            // Verifica se a atualização ocorreu com êxito
            if($usuario->atualizarStatusUsuario($usuario))// Êxito
            {
              // Define o status como sucesso na inserção
              $response = array('status'=>true);
            }
            else // Falha
            {
              // Define o status como falha ao tentar realizar a atualização
              $response = array('status'=>false);
            }

            // exibe o retorno da inserção do parceiro
            echo JSON_encode($response);

          break;
        }

      break;

      case 'faleConosco':

        // require_once("controller/Usuario_class.php");
        require_once("controller/MySql_class.php");
        require_once("model/FaleConoscoDAO.php");
        require_once("controller/FaleConosco_class.php");

        // Verifica qual o recurso será utilizado
        switch ($modo)
        {
          case 'excluir':

            // Verifica se a atualização ocorreu com êxito
            if(FaleConosco::deletaCadastrosFaleConosco($_POST['id']))// Êxito
            {
              // Define o status como sucesso na inserção
              $response = array('status'=>true);

            }
            else // Falha
            {
              // Define o status como falha ao tentar realizar a atualização
              $response = array('status'=>false);
            }

            // exibe o retorno da inserção do parceiro
            echo JSON_encode($response);

          break;
        }

      break;

      case 'produto':

        require_once("controller/MySql_class.php");
        require_once("controller/produto_class.php");

        // Verifica qual o recurso será utilizado
        switch ($modo)
        {
          case 'novo': //Insere um produto

          // Instância um objeto produto e o popula com os dados do form
          $produto = new Produto(
            1, //id do produto
            1, //id modelo produto
            1, //id parceiro
            1, //id_cor
            1, //id categoria do produto
            $_POST['nome'], //nome do produto
            $_POST['preco'], //preco do produto
            $_POST['conteudo_embalagem'],
            $_POST['garantia'], //garantia do produto
            $_POST['descricao'], //descricao do produto
            $_POST['observacao'] //obsrvacao do produto
          );

          //var_dump($produto);

          // Verifica se a inserção ocorreu com êxito
          if($produto->inserirProduto($produto))//Êxito
          {
            // Define o status como sucesso na inserção
            $response = array('status'=>true);
          }
          else //Falha
          {
            //Define o status como falha ao tentar realizar a inserção
            $response = array('status'=>false);
          }

          // Exibe o retorno da inserção do produto
          echo JSON_encode($response);

          break;

          case 'deletarImgProduto':

            // Verifica se a exclusão ocorreu com êxito
            if(Produto::deletarImagemProduto($_POST['idImg']))//Êxito
            {
              // Define o status como sucesso na exlusão
              $response = array('delete'=>true);
            }
            else //Falha
            {
              //Define o status como falha ao tentar realizar a exlusão
              $response = array('delete'=>false);
            }

            // Exibe o retorno da exclusão da imagem no formato JSON
            echo JSON_encode($response);

          break;

          case 'updateStatus':

            // Verifica se a inserção ocorreu com êxito
            if(Produto::atualizarStatusImagem($_POST['idImg'], $_POST['statusImg']))//Êxito
            {
              // Define o status como sucesso na inserção
              $response = array('status'=>true);
            }
            else //Falha
            {
              //Define o status como falha ao tentar realizar a inserção
              $response = array('status'=>false);
            }

            // Exibe o retorno da inserção do produto
            echo JSON_encode($response);

          break;

          case 'obterStatus':

            // Obtém o status da imagem
            $statusImg = Produto::getStatusImagemProdutoByIdImg($_GET['idImg']);

            // Prepara a resposta para o formato JSON
            $response = array('status_img'=>$statusImg);

            // Exibe o retorno da obtenção do status da imagem no formato JSON
            echo JSON_encode($response);

          break;
        }

      break;

      case 'veiculo':

        require_once("controller/Veiculo_class.php");
        require_once("controller/MySql_class.php");
        require_once("model/VeiculoDAO.php");

        switch($modo)
        {
          case 'updateStatus':

            // Verifica se a inserção ocorreu com êxito
            if(Veiculo::atualizarStatusImagem($_POST['idImg'], $_POST['statusImg']))//Êxito
            {
              // Define o status como sucesso na inserção
              $response = array('status'=>true);
            }
            else //Falha
            {
              //Define o status como falha ao tentar realizar a inserção
              $response = array('status'=>false);
            }

            // Exibe o retorno da inserção do produto
            echo JSON_encode($response);

          break;

          case 'obterStatus':

            // Obtém o status da imagem
            $statusImg = Veiculo::getStatusImagemVeiculoByIdImg($_GET['idImg']);

            // Prepara a resposta para o formato JSON
            $response = array('status_img'=>$statusImg);

            // Exibe o retorno da obtenção do status da imagem no formato JSON
            echo JSON_encode($response);

          break;

          case 'deletarImgVeiculo':

            // Verifica se a exclusão ocorreu com êxito
            if(Veiculo::deletarImagemVeiculo($_POST['idImg']))//Êxito
            {
              // Define o status como sucesso na exlusão
              $response = array('delete'=>true);
            }
            else //Falha
            {
              //Define o status como falha ao tentar realizar a exlusão
              $response = array('delete'=>false);
            }

            // Exibe o retorno da exclusão da imagem no formato JSON
            echo JSON_encode($response);

          break;
        }

      break;

      case 'servico':
        echo "string";
      break;
  }

 ?>
