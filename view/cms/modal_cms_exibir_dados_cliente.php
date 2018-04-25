<?php

  // Imports
  require_once('../../controller/cliente_class.php');
  require_once('../../controller/MySql_class.php');
  require_once('../../model/ClienteDAO.php');

  $dadosCliente = Cliente::obterDadosClienteById($_GET['id']);

  // var_dump($dadosCliente);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_modal_exibir_dados_cliente.css">
  </head>
  <body>

    <!-- Container da imagem do cliente -->
    <div class="container_img_cliente float_left">
      <!-- <img src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=29849dd5ebefa406f4b6a2402ac04a6c&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb" alt=""> -->
    </div>

    <!-- Container dos labels e dados a serem mostrados do cliente -->
    <div class="container_dados_expostos float_left">

      <!-- Label do tópico dos dados a serem exibidos -->
      <div class="labelExibicaoDados preenche_25 titulo fs_20">
        <a id="arrow_cliente" href="#">
          Cliente
          <i id="icone_arrow_cliente" class="material-icons">keyboard_arrow_up</i>
        </a>
      </div>

      <!-- Container dos labels e divs dos dados relacionados ao topico cliente -->
      <div class="container_label_campos_cliente">

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          Nome:
        </div>

        <!-- Container da div que mostra o nome do cliente -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?=$dadosCliente->nome?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          Data de Nascimento:
        </div>

        <!-- Container da div que mostra a data de nascimento do cliente -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?=$dadosCliente->dtNasc?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          CPF:
        </div>

        <!-- Container da div que mostra o cpf do cliente -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?=$dadosCliente->cep?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          E-mail:
        </div>

        <!-- Container da div que mostra o cpf do cliente -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?=$dadosCliente->email?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          Celular:
        </div>

        <!-- Container da div que mostra o celular do cliente -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?=$dadosCliente->celular?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          Telefone:
        </div>

        <!-- Container da div que mostra o telefone do cliente -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?php
          if (empty($dadosCliente->telefone))
          {
            echo 'Sem registro';
          }else {
            echo $dadosCliente->telefone;
          }
          ?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          Sexo:
        </div>

        <!-- Container da div que mostra o sexo do cliente -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?php
            echo $dadosCliente->sexo == 'M' ? 'Masculino' : 'Feminino';
          ?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

      </div>

      <!-- Divisor de conteúdo -->
      <div class="divisor"></div>

      <!-- Label do tópico dos dados a serem exibidos -->
      <div class="labelExibicaoDados preenche_25 titulo fs_20">
        <a id="arrow_usuario" href="#">
          Usuário
          <i id="icone_arrow_usuario" class="material-icons">keyboard_arrow_down</i>
        </a>
      </div>

      <!-- Container dos labels e divs dos dados relacionados ao topico cliente -->
      <div class="container_label_campos_usuario">

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          Nome de Usuário:
        </div>

        <!-- Container da div que mostra o nome de usuário do cliente -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?=$dadosCliente->usuario?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          Senha:
        </div>

        <!-- Container da div que mostra a senha do cliente -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?=$dadosCliente->senha?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          Criação do Registro
        </div>

        <!-- Container da div que mostra a data e hora de criação do registro do cliente -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?=$dadosCliente->log?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

        <!-- Label dos dados a serem exibidos -->
        <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
          Ativo:
        </div>

        <!-- Container da div que mostra o status do cliente (ativo ou não) -->
        <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
          <?php
            echo $dadosCliente->ativo == 1 ? 'Sim' : 'Não';
          ?>
          <!-- Linha que "seguura o texto" -->
          <div class="linha_l"></div>
        </div>

      </div>

      <!-- Divisor de conteúdo -->
      <div class="divisor"></div>

      <!-- Label do tópico dos dados a serem exibidos -->
      <div class="labelExibicaoDados preenche_25 titulo fs_20">
        <a id="arrow_endereco" href="#">
          Endereço
          <i id="icone_arrow_endereco" class="material-icons">keyboard_arrow_down</i>
        </a>
      </div>

      <!-- Container dos labels e divs dos dados relacionados ao topico cliente -->
      <div class="container_label_campos_endereco">

        <!-- Lado Esquerdo -->
        <div class="container_endereco_lados float_left">

          <!-- Label dos dados a serem exibidos -->
          <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
            Logradouro:
          </div>

          <!-- Container da div que mostra o logradouro do cliente -->
          <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
            Rua SENAI
            <!-- Linha que "seguura o texto" -->
            <div class="linha_l"></div>
          </div>

          <!-- Label dos dados a serem exibidos -->
          <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
            Número:
          </div>

          <!-- Container da div que mostra o número do endereço do cliente -->
          <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
            214
            <!-- Linha que "seguura o texto" -->
            <div class="linha_l"></div>
          </div>

          <!-- Label dos dados a serem exibidos -->
          <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
            Cidade:
          </div>

          <!-- Container da div que mostra a cidade do cliente -->
          <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
            Barueri
            <!-- Linha que "seguura o texto" -->
            <div class="linha_l"></div>
          </div>

          <!-- Label dos dados a serem exibidos -->
          <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
            Estado:
          </div>

          <!-- Container da div que mostra o Estado do cliente -->
          <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
            São Paulo
            <!-- Linha que "seguura o texto" -->
            <div class="linha_l"></div>
          </div>

          <!-- Label dos dados a serem exibidos -->
          <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
            CEP:
          </div>

          <!-- Container da div que mostra o cep do cliente -->
          <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
            45128-465
            <!-- Linha que "seguura o texto" -->
            <div class="linha_l"></div>
          </div>

        </div>

        <!-- Lado Direito -->
        <div class="container_endereco_lados float_left">

          <!-- Label dos dados a serem exibidos -->
          <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
            Bairro:
          </div>

          <!-- Container da div que mostra o bairro do cliente -->
          <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">
            Jd. Blinka
            <!-- Linha que "seguura o texto" -->
            <div class="linha_l"></div>
          </div>

          <!-- Label dos dados a serem exibidos -->
          <div class="label_campo margem_b_10 preenche_l_25 margem_t_25 conteudo fs_14">
            Complemento:
          </div>

          <!-- Container da div que mostra o complemento do endereço do cliente -->
          <div class="InputExibicaoDados preenche_l_25 txt_preto fs_18 conteudo">

            <!-- Linha que "seguura o texto" -->
            <div class="linha_l"></div>
          </div>

        </div>

      </div>

    </div>

    <script>

      // Controle das setas das divs
      var arrowCliente = true;
      var upDownClinete = null;

      var arrowEndereco = false;
      var upDownEndereco = null;

      var arrowUsuario = false;
      var upDownUsuario = null;
      // ---------------------------

      // Animação quando clicado em cliente
      $('#arrow_cliente').click(function(){

        // Alterna a posição da div (fecha e abre)
        $('.container_label_campos_cliente').slideToggle(
          1000, // Tempo de execução da animação
          function()
          {
            if (arrowCliente)
            {
              upDownClinete = 'down';
              arrowCliente = false;
            }
            else
            {
              upDownClinete = 'up';
              arrowCliente = true;
            }
            // Altera o texto responsável por sinalizar a o sentido da seta
            $('#icone_arrow_cliente').html('keyboard_arrow_'+upDownClinete);
          }
        );
      });

      // Animação quando clicado em usuário
      $('#arrow_usuario').click(function(){

        // Alterna a posição da div (fecha e abre)
        $('.container_label_campos_usuario').slideToggle(
          1000, // Tempo de execução da animação
          function()
          {
            if (arrowUsuario)
            {
              upDownUsuario = 'down';
              arrowUsuario = false;
            }
            else
            {
              upDownUsuario = 'up';
              arrowUsuario = true;
            }
            // Altera o texto responsável por sinalizar a o sentido da seta
            $('#icone_arrow_usuario').html('keyboard_arrow_'+upDownUsuario);
          }
        );
      });

      // Animação quando clicado em endereço
      $('#arrow_endereco').click(function(){

        // Alterna a posição da div (fecha e abre)
        $('.container_label_campos_endereco').slideToggle(
          1000, // Tempo de execução da animação
          function()
          {
            if (arrowEndereco)
            {
              upDownEndereco = 'down';
              arrowEndereco = false;
            }
            else
            {
              upDownEndereco = 'up';
              arrowEndereco = true;
            }
            // Altera o texto responsável por sinalizar a o sentido da seta
            $('#icone_arrow_endereco').html('keyboard_arrow_'+upDownEndereco);
          }
        );
      });


    </script>

  </body>
</html>
