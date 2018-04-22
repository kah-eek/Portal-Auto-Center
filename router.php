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
      }
      break;

      case 'sobreEmpresa':

        // Verifica qual o recurso será utilizado
        switch ($modo)
        {
          case 'atualizar':

            


          break;
        }

      break;
  }
 ?>
