<?php

  // Imports
  require_once('../../controller/Produto_class.php');
  require_once('../../controller/Parceiro_class.php');

  $parceiro = Parceiro::obterDadosParceiroByName($_GET['nomeParceiro']);
  $imagens = Produto::getImagensServicosByNomeParceiro($_GET['nomeParceiro']);

  // print_r($parceiro);
  // print_r($imagens);

  // Verifica de o parceiro foi encontrado
  if ($parceiro == null)// Parceiro não encontrado
  {
    echo '<script>alert("Parceiro \"'.$_GET['nomeParceiro'].'\" não encontrado.");</script>';
  }
  else // Parceiro encontrado
  {
    echo "
    <script>
      $('.conteudo_servico').show(1500);
      $('.conteudo_moto').hide(1000);
      $('.conteudo_carro').hide(1000);
      $('.conteudo_produto').hide(1000);
    </script>
    ";
  ?>

  <!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" type="text/css" href="../css/cms/cms_galeria.css">
      <script src="../js/jquery.js"></script>
      <script src="../js/carrosel/jquery.js"></script>
      <script src="../js/carrosel/jcarousellite.js"></script>
    </head>
    <body>
      <div class="container_interna_moto">
        <!-- Lugar onde a imagem principal aparece -->
        <div class="segura_principal">
          <div data-id="<?=$imagens[0]->id_imagem_produto_parceiro?>" data-status="<?=$imagens[0]->ativo?>" id="foto_principal" class="principal sombra_preta_10">
            <img id="img_foto_principal" src="<?=$imagens[0]->imagem?>" alt="Moto teste" class="blur">
            <!-- <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste" class="blur"> -->
            <div class="segura_botao display_none conteudo negrito">
              <div class="ocultar">
                <div class="ti">
                  Ocultar
                </div>
                <a id="ocultar_foto_principal" href="#">
                  <?php
                    echo $imagens[0]->ativo == 1 ? '<i id="eye" class="material-icons bt fs_30 txt_verde_vivo">remove_red_eye</i>' : '<i id="eye" class="material-icons txt_vermelho bt fs_30">remove_red_eye</i>';
                  ?>
                </a>
                <!-- <button type="button" class="bt" name="bt_ocultar_moto"><img  src="../pictures/icons/visualizar.svg" alt="Moto teste"></button> -->
              </div>
              <div class="excluir">
                <div class="ti">
                  Deletar
                </div>
                <a id="excluir_foto_principal" href="#">
                  <i class="material-icons fs_30 bt">delete_forever</i>
                </a>
                <!-- <button type="button" class="bt" name="bt_delete_moto"><img src="../pictures/icons/delete.svg" alt="Moto teste"></button> -->
              </div>
            </div>
          </div>
        </div>
        <!-- Informativo sobre a imagem selecionada -->
        <div class="segura_inf">
          <div class="texto_inf conteudo sombra_preta_2 transparente fs_18">
            <div class="inf_parceiro">
              Parceiro: <?=$parceiro->nome_fantasia?>
            </div>
            <div class="inf_img">
              E-mail: <?=$parceiro->email?> <br>
              Telefone: <?=$parceiro->telefone?> <br>
              Cidade: <?=$parceiro->cidade?> <br>
              Estado: <?=$parceiro->estado?> <br>
            </div>
          </div>
        </div>
        <!-- Demais imagens referente ao parceiro -->
        <div class="segura_outras">
          <div class="menu_carrosel">
            <a href="#" class="prev_servico" title="Anterior">
              <img src="../pictures/icons/previous.svg" alt="Voltar">
            </a>
          </div>
          <div class="carrossel_servico sombra_preta_10">
            <ul>
              <?php
                for ($i=0; $i < sizeof($imagens); $i++)
                {
              ?>
                  <li><img onclick="obterCLick('<?=$imagens[$i]->imagem?>', <?=$imagens[$i]->id_imagem_produto_parceiro?>)" src="<?=$imagens[$i]->imagem?>" alt="Veiculo"></li>
              <?php
                }
              ?>
            </ul>
          </div>
          <div class="menu_carrosel">
            <a href="#" class="next_servico" title="Próximo">
              <img src="../pictures/icons/next.svg" alt="Avançar">
            </a>
          </div>
        </div>
      </div>

      <script>
        $(function(){
          $(".carrossel_servico"). jCarouselLite({
              btnPrev: '.prev_servico',
              btnNext: '.next_servico',
              visible: 1
          })


          // Evento do click no btn excluir
          $('#excluir_foto_principal').click(function(e){
            // Remove o click padrão da tag </a>
            e.preventDefault();

            // Verifica se o usuário realmente que excluir a foto
            if (confirm('Deseja realmente excluir esta foto ?'))
            {
              // Armazena o id da imagem
              var idImg = $('#foto_principal').data('id');

              // Invoca a router para exlcluir a foto do veículo
              $.ajax({
                type:'POST',
                url:'../../router.php?controller=produto&modo=deletarImgProduto',
                data:{'idImg':idImg},
                // processData:false,
                // contentType:false,
                dataType:'json',
                success:function(response){
                  // EXIBE O QUE RETORNOU DA PAGINA
                  // console.log(response);

                  // Verifica de o delete da foto ocorreu com sucesso
                  if (response.delete) // Sucesso ao deletar a foto do veículo
                  {
                    // Recarrega as fotos das motos
                    descarrega_conteudo_servico();
                  }
                }
              });
            }
          });


          // Evento do click no btn ocultar
          $('#ocultar_foto_principal').click(function(e){
            // Remove o click padrão da tag </a>
            e.preventDefault();

            // Armazena o id da imagem
            var idImg = $('#foto_principal').data('id');

            // Armazena o status da imagem
            var statusImg = $('#foto_principal').data('status') == 1 ? 0 : 1;

            // Atualiza o id-status da foto
            $('#foto_principal').data('status',statusImg);

            // Invoca a router para ocultar/exibir a foto do parceiro
            $.ajax({
              type:'POST',
              url:'../../router.php?controller=produto&modo=updateStatus', // modo=status - Foto ativada ou desativada
              data:{'idImg':idImg,'statusImg':statusImg},
              // processData:false,
              // contentType:false,
              dataType:'json',
              success:function(response){
                // EXIBE O QUE RETORNOU DA PAGINA
                // console.log(response);

                // Verfica se o reponse retornou sucesso
                if (response.status)
                {
                  // Altera a cor do ícone representando o satus da imagem (verde e vermelho)
                  // Ícone do status da foto
                  var eye = $('#eye');

                  // Verifica se a imagem está com o status igual à ativada
                  if (statusImg == 1)// Imagem ativada - status = 1
                  {
                      eye.removeClass('txt_vermelho');
                      eye.addClass('txt_verde_vivo');
                  }
                  else// Imagem desativada - status = 0
                  {
                    eye.removeClass('txt_verde_vivo');
                    eye.addClass('txt_vermelho');
                  }
                }

              }
            });

          });

        });

        // Obtém os dados da imagem clicada
        function obterCLick(caminhoImg, idImagemVeiculoParceiro)
        {
          // Troca a imagem da foto principal (#img_foto_principal)
          $('#img_foto_principal').attr('src',caminhoImg);

          // Insere o data atribute na div foto_principal
          $('#foto_principal').data('id',idImagemVeiculoParceiro);

          // Obtém o status atual da imagem
          $.ajax({
            type:'GET',
            url:'../../router.php?controller=produto&modo=obterStatus&idImg='+idImagemVeiculoParceiro,
            processData:false,
            dataType:'json',
            success:function(response){
              // EXIBE O QUE RETORNOU DA PAGINA
              // console.log(response);

              // Armazena o status da imagem (0 ou 1)
              var statusImg = response.status_img;

              // Insere o data atribute status na div foto_principal
              $('#foto_principal').data('status',statusImg);

              // Altera a cor do ícone de representacao do status da imagem
              // Ícone do status da foto
              var eye = $('#eye')

              // Verfiica se a imagem está com o status igual à ativada
              if (statusImg == 1)// Imagem ativada - status = 1
              {
                  eye.removeClass('txt_vermelho');
                  eye.addClass('txt_verde_vivo');
              }
              else// Imagem desativada - status = 0
              {
                eye.removeClass('txt_verde_vivo');
                eye.addClass('txt_vermelho');
              }
            }
          });


          // OBTENDO O DATA ATRIBUTE
          // console.log('data-status: '+$('#foto_principal').data('status'));
          // console.log('data-id: '+$('#foto_principal').data('id'));
          // console.log('idImagemVeiculoParceiro: '+idImagemVeiculoParceiro);

        }

      </script>

    </body>
  </html>

  <?php
  }

?>
