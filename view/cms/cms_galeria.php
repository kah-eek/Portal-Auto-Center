<?php

// Importação do cabeçalho
require_once('../component/cms_header.php');

 ?>



  <!-- Conainer que segura tudo -->
    <div class="container_principal centro_lr">
      <script>

        window.onload = function(){
          $('.conteudo_moto').hide(),
          $('.conteudo_servico').hide(),
          $('.conteudo_carro').hide(),
          $('.conteudo_produto').hide()
        }

      </script>

      <?php
        // Importação do menu lateral
        require_once('../component/cms_menu_lateral.php');
      ?>
      <!-- Resto do cunteudo -->

      <div class="conteiner_conteudo float_left ">

        <!-- <form method="post" action=""> -->
          <!-- Card que segura as informacoes das imagens cadastradas pelo parceiro -->
          <div class="conteudo_galeria sombra_preta_10 centro_lr ">
            <!-- Titulo do card -->
            <div class="titulo_galeria titulo fs_30 preenche_l_5 espacamento_letra_2 txt_branco" >
              <div class="nome_card float_left">
                Motos
              </div>
                <!-- Campo para pesquisar o parceiro desejado -->
              <form id="frmBuscarParceiroMoto"  action="" method="POST">
                <div class="pesquisa_galeria ">
                  <div class="inp_texto">
                    <input id="txtPesquisaM" type="text" required name="txtPesquisaM" placeholder="Digite o nome do Parceiro" value="" class="pes conteudo">
                  </div>
                  <div class="inp_bot">
                    <input id="btn_buscar_motos" type="submit" name="bt_moto" value="buscar" class="bt_moto bot">
                  </div>
                </div>
              </form>
            </div>

            <!-- Conteudo das imagens das motos -->
            <div class="conteudo_moto"></div>
          </div>

          <!-- Card que segura as informacoes das imagens cadastradas pelo parceiro -->
          <div class="conteudo_galeria sombra_preta_10 centro_lr ">
            <!-- Titulo do card -->
            <div class="titulo_galeria titulo fs_30 preenche_l_5 espacamento_letra_2 txt_branco" >
              <div class="nome_card float_left">
                Serviços
              </div>
                <!-- Campo para pesquisar o parceiro desejado -->
              <form id="frmBuscarParceirServico"  action="" method="POST">
                <div class="pesquisa_galeria ">
                  <div class="inp_texto">
                    <input id="txtPesquisaS" type="text" required name="txtPesquisaM" placeholder="Digite o nome do Parceiro" value="" class="pes conteudo">
                  </div>
                  <div class="inp_bot">
                      <input id="btn_buscar_servico" type="submit" name="bt_moto" value="buscar" class="bt_servico bot">
                  </div>
                </div>
              </form>
            </div>

            <!-- Conteudo das imagens dos servicos -->
            <div class="conteudo_servico"></div>
          </div>

          <!-- Card que segura as informacoes das imagens cadastradas pelo parceiro -->
          <div class="conteudo_galeria sombra_preta_10 centro_lr ">
            <!-- Titulo do card -->
            <div class="titulo_galeria titulo fs_30 preenche_l_5 espacamento_letra_2 txt_branco" >
              <div class="nome_card float_left">
                Carros
              </div>
                <!-- Campo para pesquisar o parceiro desejado -->
              <form id="frmBuscarParceirCarro"  action="" method="POST">
                <div class="pesquisa_galeria ">
                  <div class="inp_texto">
                    <input type="text" id="txtPesquisaC" required name="txtPesquisaC" placeholder="Digite o nome do Parceiro" value="" class="pes conteudo">
                  </div>
                  <div class="inp_bot">
                      <input type="submit" name="bt_moto" value="buscar" class="bt_carro bot">
                  </div>
                </div>
              </form>
            </div>
            <!-- Conteudo das imagens dos carros -->
            <div class="conteudo_carro"></div>
          </div>

          <!-- Card que segura as informacoes das imagens cadastradas pelo parceiro -->
          <div class="conteudo_galeria sombra_preta_10 centro_lr ">
            <!-- Titulo do card -->
            <div class="titulo_galeria titulo fs_30 preenche_l_5 espacamento_letra_2 txt_branco" >
              <div class="nome_card float_left">
                Produtos
              </div>
                <!-- Campo para pesquisar o parceiro desejado -->
              <form id="frmBuscarParceirProduto"  action="" method="POST">
                <div class="pesquisa_galeria ">
                  <div class="inp_texto">
                    <input type="text" id="txtPesquisaP" required name="txtPesquisaP" placeholder="Digite o nome do Parceiro" value="" class="pes conteudo">
                  </div>
                  <div class="inp_bot">
                      <input type="submit" name="bt_moto" value="buscar" class="bt_produto bot">
                  </div>
                </div>
              </form>
            </div>

            <!-- Conteudo das imagens das motos -->
            <div class="conteudo_produto"></div>
          </div>


          <script>

          // Descarrega as fotos das motos
          function descarrega_conteudo_moto(){
            $.ajax({
              type:'GET',
              url:'modal_conteudo_moto_parceiro.php?nomeParceiro='+$('#txtPesquisaM').val(),
              processData:false,
              success:function(response){
                $('.conteudo_moto').html(response);
                // EXIBE O QUE RETORNOU DA PAGINA
                // console.log(response);
              }
            });
          }

          // Descarrega as fotos dos servicos
          function descarrega_conteudo_servico(){
            $.ajax({
              type:'GET',
              url:'modal_conteudo_servico_parceiro.php?nomeParceiro='+$('#txtPesquisaS').val(),
              processData:false,
              success:function(response){
                $('.conteudo_servico').html(response);
                // EXIBE O QUE RETORNOU DA PAGINA
                // console.log(response);
              }
            });
          }

          // Descarrega as fotos dos servicos
          function descarrega_conteudo_carro(){
            $.ajax({
              type:'GET',
              url:'modal_conteudo_carro_parceiro.php?nomeParceiro='+$('#txtPesquisaC').val(),
              processData:false,
              success:function(response){
                $('.conteudo_carro').html(response);
                // EXIBE O QUE RETORNOU DA PAGINA
                // console.log(response);
              }
            });
          }

          // Descarrega as fotos dos produtos
          function descarrega_conteudo_produto(){
            $.ajax({
              type:'GET',
              url:'modal_conteudo_produto_parceiro.php?nomeParceiro='+$('#txtPesquisaP').val(),
              processData:false,
              success:function(response){
                $('.conteudo_produto').html(response);
                // EXIBE O QUE RETORNOU DA PAGINA
                // console.log(response);
              }
            });
          }

          // function para deixar visivel a caixa de conteudo moto
          //e ocultar as demais caixas
            $('.bt_moto').click(function(){// aciona o evento do click
              // Verifica se a caixa de pesquisa esta vazia
              if ($('#txtPesquisaM').val().length != 0)
              {
                $('.conteudo_moto').show(1500);// PESQUISAR
                // $(this).hide();// PESQUISAR
                $('.conteudo_servico').hide(1000);
                $('.conteudo_carro').hide(1000);
                $('.conteudo_produto').hide(1000);
              }
            });

            // function para deixar visivel a caixa de conteudo serviço
            //e ocultar as demais caixas
            $('.bt_servico').click(function(){// aciona o evento do click
              // Verifica se a caixa de pesquisa esta vazia
              if ($('#txtPesquisaS').val().length != 0)
              {
                $('.conteudo_servico').show(1500);
                $('.conteudo_moto').hide(1000);
                $('.conteudo_carro').hide(1000);
                $('.conteudo_produto').hide(1000);
              }

            });

            // function para deixar visivel a caixa de conteudo carro
            //e ocultar as demais caixas
            $('.bt_carro').click(function(){// aciona o evento do click
              // Verifica se a caixa de pesquisa esta vazia
              if ($('#txtPesquisaC').val().length != 0)
              {
                $('.conteudo_carro').show(1500);
                $('.conteudo_moto').hide(1000);
                $('.conteudo_servico').hide(1000);
                $('.conteudo_produto').hide(1000);
              }
            });

            // function para deixar visivel a caixa de conteudo produto
            //e ocultar as demais caixas
            $('.bt_produto').click(function(){// aciona o evento do click
              // Verifica se a caixa de pesquisa esta vazia
              if ($('#txtPesquisaP').val().length != 0)
              {
                $('.conteudo_produto').show(1500);
                $('.segura_outras').css('display','block');
                $('.conteudo_moto').hide(1000);
                $('.conteudo_carro').hide(1000);
                $('.conteudo_servico').hide(1000);
              }
            });

            // Descarrega a modal de motos
            $('#frmBuscarParceiroMoto').submit(function(e){
              // Remove o submit do form
              e.preventDefault();

              // Descarrega as fotos das motos
              descarrega_conteudo_moto();

            });

            // Descarrega a modal de servicos
            $('#frmBuscarParceirServico').submit(function(e){
              // Remove o submit do form
              e.preventDefault();

              // Descarrega as fotos das motos
              descarrega_conteudo_servico();

            });

            // Descarrega a modal dos carros
            $('#frmBuscarParceirCarro').submit(function(e){
              // Remove o submit do form
              e.preventDefault();

              // Descarrega as fotos das motos
              descarrega_conteudo_carro();

            });

            // Descarrega a modal dos produtos
            $('#frmBuscarParceirProduto').submit(function(e){
              // Remove o submit do form
              e.preventDefault();

              // Descarrega as fotos das motos
              descarrega_conteudo_produto();

            });

          </script>

        <!-- </form> -->
      </div>
    </div>
