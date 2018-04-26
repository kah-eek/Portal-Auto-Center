<?php
  // Importando o cabeçalho
  require_once("component/header.php");
?>
  <!--
  @autor Henrique Otremba
  @data 28/03/2018
  @descricao Página da loja onde contem os produtos e serviços
  -->
      <div class="foto_pesquisa sem_margem centro_lr">
        <div class="fundo_opaco_loj preenche_t_250">
          <form action="index.html" method="post">
            <div class="container_campo_pesquisa_loj centro_lr">
              <input required class="input_text fs_60 float_left" type="text" name="txt_pesquisa" value="" placeholder="Digite o que você procura">

              <label for="btn_pesquisar">
                <i class="material-icons fs_50 txt_branco txt_sombra_1x1x1_preto outline_none display_block float_left sem_borda transparente preenche_t_10">
                  search
                </i>
              </label>
              <input class="display_none" id="btn_pesquisar" type="submit" name="btn_pesquisar" value="">
            </div>
          </form>
        </div>
      </div>

      <!-- Itens do menu -->
      <div class="container_menu_pesquisa_largura_tela sombra_preta_b_15 margem_b_50 bg_verde_natural">
        <div class="container_menu_pesquisa centro_lr">
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/lavagem.svg" class="centralizado txt_branco " title="Lavagem de Carro"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/troca_oleo.svg" class="  centralizado txt_branco " title="Troca de óleo"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/pintura_funilaria.svg" class="  centralizado txt_branco " title="Pintura e Funilaria"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/troca_pneu.svg" class="  centralizado txt_branco " title="Troca de Pneu"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/balancing.svg" class="  centralizado txt_branco " title="Balanceamento"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/alarme.svg" class=" centralizado txt_branco " title="Alarmes"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/auto_eletrica.svg" class="  centralizado txt_branco " title="Auto Elétrica"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/ferramentas_eletrica.svg" class="  centralizado txt_branco " title="Ferramentas Elétricas"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/ferramentas_manuais.svg" class="  centralizado txt_branco " title="Ferramentas Manuais"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/revisao.svg" class="  centralizado txt_branco " title="Revisão do Carro"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/socorro_ja.svg" class="  centralizado txt_branco " title="Socorro Já"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/troca_reparo.svg" class="  centralizado txt_branco " title="Troca e Reparo de Vidros"  alt="Pintura de Carros">
          </div>
          <div class="item_menu_pesquisa preenche_20 float_left">
            <img src="view/pictures/loja/chaveiro.svg" class="  centralizado txt_branco " title="Chaveiro"  alt="Pintura de Carros">
          </div>
        </div>
      </div>

      <div class="container_parceiro_premium centro_lr margem_b_80">
        <div class="anuncio_parceiro_premium preenche_5 bg_branco float_left">
          <img src="view/pictures/loja/caoa1.jpg" alt="Veja nossos parceiro premius">
        </div>
        <div class="anuncio_parceiro_premium preenche_5 bg_branco float_right">
          <img src="view/pictures/loja/camaro.jpg" alt="">
        </div>
      </div>

      <!-- Carrosel-->
      <div class="container_slider_produtos bg_azulado_escuro">
        <div id="content">
            <nav id="menu-carrossel">

                <!-- Botão de avançar -->
                <a href="#" class="container_botoes_carossel display_block float_left preenche_t_110 prev" title="Anterior">
                  <i class="material-icons fs_70 txt_sombra_1x1x10_branco txt_branco">keyboard_arrow_left</i>
                </a>

                <div class="conatiner_carrosel_loj float_left">
                  <div id="carrossel" class="preenche_t_20 preenche_b_20">
                    <ul>
                      <!-- Item 1 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->
                      <!-- Item 3 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/221325/pexels-photo-221325.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->

                      <!-- Item 4 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/337909/pexels-photo-337909.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->

                      <!-- Item 5 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->

                      <!-- Item 6 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->

                      <!-- Item 7 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/210019/pexels-photo-210019.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->

                      <!-- Item 8 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/38637/car-audi-auto-automotive-38637.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->
                    </ul>
                  </div>
                </div>

                 <!-- Botão de retroceder -->
                <a href="#" class="container_botoes_carossel float_left preenche_t_110 display_block next" title="Próximo">
                  <i class="material-icons fs_70 txt_sombra_1x1x10_branco txt_branco">keyboard_arrow_right</i>
                </a>
            </nav>
        </div>
      </div>
      <!-- ################################################################ -->

      <div class="divisor">

      </div>

      <div class="container_slider_produtos bg_azulado_escuro">

        <div id="content1">
            <nav id="menu-carrossel1">

                <!-- Botão de avançar -->
                <a href="#" class="container_botoes_carossel display_block float_left preenche_t_110 prev1" title="Anterior">
                  <i class="material-icons fs_70 txt_sombra_1x1x10_branco txt_branco">keyboard_arrow_left</i>
                </a>

                <div class="conatiner_carrosel_loj float_left">
                  <div id="carrossel1" class="preenche_t_20 preenche_b_20">
                    <ul>
                      <!-- Item 1 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->
                      <!-- Item 3 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/221325/pexels-photo-221325.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->

                      <!-- Item 4 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/337909/pexels-photo-337909.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->

                      <!-- Item 5 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/358070/pexels-photo-358070.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->

                      <!-- Item 6 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/112460/pexels-photo-112460.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->

                      <!-- Item 7 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="view/pictures/loja/jeep.jpeg" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->

                      <!-- Item 8 -->
                      <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                        <a href="#">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/38637/car-audi-auto-automotive-38637.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Item Carrosel" title="Item Carrosel"/>
                          </div>

                          <!-- Valor do iítem do carrosel -->
                          <div class="valor_item_carrosel_loj conteudo align_center preenche_5 bg_branco txt_preto">
                            <!-- Divisor de conteúdo -->
                            <!-- <div class="divisor"></div> -->
                            R$ 240,00
                          </div>

                          <div class="descricao_item_carrosel_loj bg_branco conteudo preenche_5 ellipsis align_center">
                            Motor V8
                          </div>
                        </a>
                      </li>
                      <!-- ****************** -->
                    </ul>
                  </div>
                </div>

                 <!-- Botão de retroceder -->
                <a href="#" class="container_botoes_carossel float_left preenche_t_110 display_block next1" title="Próximo">
                  <i class="material-icons fs_70 txt_sombra_1x1x10_branco txt_branco">keyboard_arrow_right</i>
                </a>
            </nav>
        </div>

        <!-- scripts do carrosel -->
        <script src="view/js/carrosel/carrosel.js"></script>
        <script src="view/js/carrosel/jcarousellite.js"></script>
        <script src="view/js/carrosel/carrossel.js"></script>
        <!-- ################################################################ -->

        <script>

          // ***************** Fixa a barra de menu abaixo do cabeçalho ************************

          // Obtém as coordenadas da barra de menu
          var barraMenu = $('.container_menu_pesquisa_largura_tela').offset().top;

          // Verifica ao acionar o scroll da tela as coordenadas
          $(window).scroll(function(){
            if ($(window).scrollTop() > barraMenu) {// Fixa a barra de menu
              $('.container_menu_pesquisa_largura_tela').css({position:'fixed', top:'0px', 'z-index':'997', top:'55px', transition:'2s'});
            }else { // Desfixa a barra de menu
              $('.container_menu_pesquisa_largura_tela').css({position:'static', top:'0px', 'z-index':'0', top:'0px'});
            }
          })
          // ***********************************************************************************

        </script>

      </div>

      <div class="container_parceiro_premium centro_lr margem_t_80">
        <div class="container_conteudo_rotante bg_azulado_escuro float_left">
          <div class="anuncio_parceiro_premium bg_branco float_left foto_frente">
            <img src="view/pictures/loja/audi.jpg" alt="">
          </div>
          <div class="anuncio_parceiro_premium bg_branco float_right foto_fundo">
            <img src="view/pictures/loja/caoa.jpg" alt="">
          </div>
        </div>
      </div>

      <!-- Divisor de conteúdo -->
      <div class="divisor"></div>

      <div class="container_produto_fixo centro_lr">
        <!-- Produto fixo 1 -->
        <div class="produto_fixo bg_branco">
          <!-- Contáiner da imagem do produto fixo -->
          <div class="imagem_produto_fixo bg_verde">
            <img src="view/pictures/loja/wheel.jpeg" alt="">
          </div>

          <!-- Preço do produto fixo -->
          <div class="valor_produto_fixo conteudo align_center preenche_t_10 txt_sombra_1x1x1_verde_vivo txt_preto negrito">
            R$ 680,49
          </div>

          <!-- Descrição do produto fixo -->
          <div class="descricao_produto_fixo conteudo align_center preenche_15 ellipsis">
            Pneu
          </div>
        </div>

        <!-- Produto fixo 2 -->
        <div class="produto_fixo bg_branco">
          <!-- Contáiner da imagem do produto fixo -->
          <div class="imagem_produto_fixo bg_verde">
            <img src="view/pictures/loja/car_machine.jpeg" alt="">
          </div>

          <!-- Preço do produto fixo -->
          <div class="valor_produto_fixo conteudo align_center preenche_t_10 txt_sombra_1x1x1_verde_vivo txt_preto negrito">
            R$ 7.480,49
          </div>

          <!-- Descrição do produto fixo -->
          <div class="descricao_produto_fixo conteudo align_center preenche_15 ellipsis">
            Motot SSR18
          </div>
        </div>

        <!-- Produto fixo 3 -->
        <div class="produto_fixo bg_branco">
          <!-- Contáiner da imagem do produto fixo -->
          <div class="imagem_produto_fixo bg_verde">
            <img src="view/pictures/loja/fuck_wheel.jpeg" alt="">
          </div>

          <!-- Preço do produto fixo -->
          <div class="valor_produto_fixo conteudo align_center preenche_t_10 txt_sombra_1x1x1_verde_vivo txt_preto negrito">
            R$ 980,23
          </div>

          <!-- Descrição do produto fixo -->
          <div class="descricao_produto_fixo conteudo align_center preenche_15 ellipsis">
            Pneu WR41
          </div>
        </div>

        <!-- Produto fixo 4 -->
        <div class="produto_fixo bg_branco">
          <!-- Contáiner da imagem do produto fixo -->
          <div class="imagem_produto_fixo bg_verde">
            <img src="view/pictures/loja/steering_wheel.jpeg" alt="">
          </div>

          <!-- Preço do produto fixo -->
          <div class="valor_produto_fixo conteudo align_center preenche_t_10 txt_sombra_1x1x1_verde_vivo txt_preto negrito">
            R$ 1680,00
          </div>

          <!-- Descrição do produto fixo -->
          <div class="descricao_produto_fixo conteudo align_center preenche_15 ellipsis">
            Volante
          </div>
        </div>

        <!-- Produto fixo 2 -->
        <div class="produto_fixo bg_branco">
          <!-- Contáiner da imagem do produto fixo -->
          <div class="imagem_produto_fixo bg_verde">
            <img src="view/pictures/loja/car_machine.jpeg" alt="">
          </div>

          <!-- Preço do produto fixo -->
          <div class="valor_produto_fixo conteudo align_center preenche_t_10 txt_sombra_1x1x1_verde_vivo txt_preto negrito">
            R$ 7.480,49
          </div>

          <!-- Descrição do produto fixo -->
          <div class="descricao_produto_fixo conteudo align_center preenche_15 ellipsis">
            Motot SSR18
          </div>
        </div>
      </div>
      <!-- Rodape -->
      <?php
        require_once('component/footer.php');
      ?>
