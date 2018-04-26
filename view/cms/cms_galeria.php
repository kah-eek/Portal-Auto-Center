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
            <div class="conteudo_moto "></div>
          </div>

          <!-- Card que segura as informacoes das imagens cadastradas pelo parceiro -->
          <div class="conteudo_galeria sombra_preta_10 centro_lr ">
            <!-- Titulo do card -->
            <div class="titulo_galeria titulo fs_30 preenche_l_5 espacamento_letra_2 txt_branco" >
              <div class="nome_card float_left">
                Serviços
              </div>
                <!-- Campo para pesquisar o parceiro desejado -->
                <div class="pesquisa_galeria ">
                  <div class="inp_texto">
                    <input type="text" name="txtPesquisaM" placeholder="Digite o nome do Parceiro" value="" class="pes conteudo">
                  </div>
                  <div class="inp_bot">
                      <input type="submit" name="bt_moto" value="buscar" class="bt_servico bot">
                  </div>
                </div>

            </div>

            <!-- Conteudo das imagens das motos -->
            <div class="conteudo_servico ">
              <!-- Lugar onde a imagem principal aparece -->
              <div class="segura_principal">
                <div class="principal sombra_preta_10">
                  <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste" class="blur">
                  <div class="segura_botao display_none conteudo negrito">
                    <div class="ocultar">
                      <div class="ti">
                        Ocultar
                      </div>
                      <button type="button" class="bt" name="bt_ocultar_servico"><img  src="../pictures/icons/visualizar.svg" alt="Moto teste"></button>
                    </div>
                    <div class="excluir">
                      <div class="ti">
                        Deletar
                      </div>
                      <button type="button" class="bt" name="bt_delete_servico"><img src="../pictures/icons/delete.svg" alt="Moto teste"></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="segura_inf">
                <div class="texto_inf conteudo sombra_preta_2 transparente fs_18">
                  <div class="inf_parceiro">
                    Parceiro:
                  </div>
                  <div class="inf_img">
                    efnbf ibiuabibfi iubafibi ijfosn fmeimsm m
                  </div>
                </div>
              </div>
              <!-- Informativo sobre a imagem selecionada -->
              <div class="segura_outras">
                <div class="menu_carrosel">
                  <a href="#" class="prev_servico" title="Anterior">
                    <img src="../pictures/icons/previous.svg" alt="Voltar">
                  </a>
                </div>
                <div class="carrossel_servico sombra_preta_10">
                  <ul>
                    <li><img src="../pictures/galeria/moto_um.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_quatro.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_um.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_quatro.jpg" alt="Moto teste"></li>
                  </ul>
                </div>
                <div class="menu_carrosel">
                  <a href="#" class="next_servico" title="Próximo">
                    <img src="../pictures/icons/next.svg" alt="Avançar">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Card que segura as informacoes das imagens cadastradas pelo parceiro -->
          <div class="conteudo_galeria sombra_preta_10 centro_lr ">
            <!-- Titulo do card -->
            <div class="titulo_galeria titulo fs_30 preenche_l_5 espacamento_letra_2 txt_branco" >
              <div class="nome_card float_left">
                Carros
              </div>
                <!-- Campo para pesquisar o parceiro desejado -->
                <div class="pesquisa_galeria ">
                  <div class="inp_texto">
                    <input type="text" name="txtPesquisaM" placeholder="Digite o nome do Parceiro" value="" class="pes conteudo">
                  </div>
                  <div class="inp_bot">
                      <input type="submit" name="bt_moto" value="buscar" class="bt_carro bot">
                  </div>
                </div>
            </div>
            <!-- Conteudo das imagens das motos -->
            <div class="conteudo_carro ">
              <!-- Lugar onde a imagem principal aparece -->
              <div class="segura_principal">
                <div class="principal sombra_preta_10">
                  <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste" class="blur">
                  <div class="segura_botao display_none conteudo negrito">
                    <div class="ocultar">
                      <div class="ti">
                        Ocultar
                      </div>
                      <button type="button" class="bt" name="bt_oculta_carro"><img  src="../pictures/icons/visualizar.svg" alt="Moto teste"></button>
                    </div>
                    <div class="excluir">
                      <div class="ti">
                        Deletar
                      </div>
                      <button type="button" class="bt" name="bt_delete_carro"><img src="../pictures/icons/delete.svg" alt="Moto teste"></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Informativo sobre a imagem selecionada -->
              <div class="segura_inf">
                <div class="texto_inf conteudo sombra_preta_2 transparente fs_18">
                  <div class="inf_parceiro">
                    Parceiro:
                  </div>
                  <div class="inf_img">
                    efnbf ibiuabibfi iubafibi ijfosn fmeimsm m
                  </div>
                </div>
              </div>
              <!-- Demais imagens referente ao parceiro -->
              <div class="segura_outras">
                <div class="menu_carrosel">
                  <a href="#" class="prev_carro" title="Anterior">
                    <img src="../pictures/icons/previous.svg" alt="Voltar">
                  </a>
                </div>
                <div class="carrossel_carro sombra_preta_10">
                  <ul>
                    <li><img src="../pictures/galeria/moto_um.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_quatro.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_um.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_quatro.jpg" alt="Moto teste"></li>
                  </ul>
                </div>
                <div class="menu_carrosel">
                  <a href="#" class="next_carro" title="Próximo">
                    <img src="../pictures/icons/next.svg" alt="Avançar">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Card que segura as informacoes das imagens cadastradas pelo parceiro -->
          <div class="conteudo_galeria sombra_preta_10 centro_lr ">
            <!-- Titulo do card -->
            <div class="titulo_galeria titulo fs_30 preenche_l_5 espacamento_letra_2 txt_branco" >
              <div class="nome_card float_left">
                Produtos
              </div>
                <!-- Campo para pesquisar o parceiro desejado -->
                <div class="pesquisa_galeria ">
                  <div class="inp_texto">
                    <input type="text" name="txtPesquisaM" placeholder="Digite o nome do Parceiro" value="" class="pes conteudo">
                  </div>
                  <div class="inp_bot">
                      <input type="submit" name="bt_moto" value="buscar" class="bt_produto bot">
                  </div>
                </div>

            </div>

            <!-- Conteudo das imagens das motos -->
            <div class="conteudo_produto ">
              <!-- Lugar onde a imagem principal aparece -->
              <div class="segura_principal">
                <div class="principal sombra_preta_10">
                  <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste" class="blur">
                  <div class="segura_botao display_none conteudo negrito">
                    <div class="ocultar">
                      <div class="ti">
                        Ocultar
                      </div>
                      <button type="button" class="bt" name="btn_oculta_produto"><img  src="../pictures/icons/visualizar.svg" alt="Moto teste"></button>
                    </div>
                    <div class="excluir">
                      <div class="ti">
                        Deletar
                      </div>
                      <button type="button" class="bt" name="bt_delete_produto"><img src="../pictures/icons/delete.svg" alt="Moto teste"></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Informativo sobre a imagem selecionada -->
              <div class="segura_inf">
                <div class="texto_inf conteudo sombra_preta_2 transparente fs_18">
                  <div class="inf_parceiro">
                    Parceiro:
                  </div>
                  <div class="inf_img">
                    efnbf ibiuabibfi iubafibi ijfosn fmeimsm m
                  </div>
                </div>
              </div>
              <!-- Demais imagens referente ao parceiro -->
              <div class="segura_outras">
                <div class="menu_carrosel">
                  <a href="#" class="prev_produto" title="Anterior">
                    <img src="../pictures/icons/previous.svg" alt="Voltar">
                  </a>
                </div>
                <div class="carrossel_produto sombra_preta_10">
                  <ul>
                    <li><img src="../pictures/galeria/moto_um.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_quatro.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_um.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste"></li>
                    <li><img src="../pictures/galeria/moto_quatro.jpg" alt="Moto teste"></li>
                  </ul>
                </div>
                <div class="menu_carrosel">
                  <a href="#" class="next_produto" title="Próximo">
                    <img src="../pictures/icons/next.svg" alt="Avançar">
                  </a>
                </div>
              </div>
            </div>
          </div>


          <script>

          $(function() {

              // $(".carrossel_moto"). jCarouselLite({
              //     btnPrev: '.prev_moto',
              //     btnNext: '.next_moto',
              //     visible: 3
              // })

              $(".carrossel_servico"). jCarouselLite({
                  btnPrev: '.prev_servico',
                  btnNext: '.next_servico',
                  visible: 3
              })

              $(".carrossel_carro"). jCarouselLite({
                  btnPrev: '.prev_carro',
                  btnNext: '.next_carro',
                  visible: 3

              })

              $(".carrossel_produto"). jCarouselLite({
                  btnPrev: '.prev_produto',
                  btnNext: '.next_produto',
                  visible: 3
              })

          })


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
              $('.conteudo_servico').show(1500);
              $('.conteudo_moto').hide(1000);
              $('.conteudo_carro').hide(1000);
              $('.conteudo_produto').hide(1000);
            });

            // function para deixar visivel a caixa de conteudo carro
            //e ocultar as demais caixas
            $('.bt_carro').click(function(){// aciona o evento do click
              $('.conteudo_carro').show(1500);
              $('.conteudo_moto').hide(1000);
              $('.conteudo_servico').hide(1000);
              $('.conteudo_produto').hide(1000);
            });

            // function para deixar visivel a caixa de conteudo produto
            //e ocultar as demais caixas
            $('.bt_produto').click(function(){// aciona o evento do click
              $('.conteudo_produto').show(1500);
              $('.segura_outras').css('display','block');
              $('.conteudo_moto').hide(1000);
              $('.conteudo_carro').hide(1000);
              $('.conteudo_servico').hide(1000);
            });

            // Descarrega a modal de motos
            $('#frmBuscarParceiroMoto').submit(function(e){
              // Remove o submit do form
              e.preventDefault();

              // Debug do form
              // for (var par of new FormData($('#frmBuscarParceiroMoto')[0]).entries()) {
              //   console.log(par[0]+" : "+par[1]);
              // }

              $.ajax({
                type:'GET',
                url:'modal_conteudo_moto_parceiro.php?nomeParceiro='+$('#txtPesquisaM').val(),
                processData:false,
                success:function(response){
                  $('.conteudo_moto').html(response);
                  console.log(response);
                }
              });

            });
          </script>

        <!-- </form> -->
      </div>
    </div>
