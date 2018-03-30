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
              <input required class="input fs_60 float_left" type="text" name="txt_pesquisa" value="" placeholder="Digite o que você procura">

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
      <div class="container_menu_pesquisa">
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/lavagem.svg" class="centralizado txt_branco " title="Lavagem de Carro"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/troca_oleo.svg" class="  centralizado txt_branco " title="Troca de óleo"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/pintura_funilaria.svg" class="  centralizado txt_branco " title="Pintura e Funilaria"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/troca_pneu.svg" class="  centralizado txt_branco " title="Troca de Pneu"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/balancing.svg" class="  centralizado txt_branco " title="Balanceamento"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/alarme.svg" class=" centralizado txt_branco " title="Alarmes"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/auto_eletrica.svg" class="  centralizado txt_branco " title="Auto Elétrica"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/ferramentas_eletrica.svg" class="  centralizado txt_branco " title="Ferramentas Elétricas"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/ferramentas_manuais.svg" class="  centralizado txt_branco " title="Ferramentas Manuais"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/revisao.svg" class="  centralizado txt_branco " title="Revisão do Carro"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/socorro_ja.svg" class="  centralizado txt_branco " title="Socorro Já"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/troca_reparo.svg" class="  centralizado txt_branco " title="Troca e Reparo de Vidros"  alt="Pintura de Carros">
        </div>
        <div class="item_menu_pesquisa float_left">
          <img src="pictures/loja/chaveiro.svg" class="  centralizado txt_branco " title="Chaveiro"  alt="Pintura de Carros">
        </div>
      </div>
      <div class="container_parceiro_premium">
        <div class="anuncio_parceiro_premium float_left ">
          <img src="pictures/cliente_parceiro/parceiro1png.png" alt="">
        </div>
        <div class="anuncio_parceiro_premium float_right ">
          <img src="pictures/cliente_parceiro/parceiro1png.png" alt="">
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
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
                      <!-- ****************** -->
                      <!-- Item 3 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
                      <!-- ****************** -->

                      <!-- Item 4 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
                      <!-- ****************** -->

                      <!-- Item 5 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
                      <!-- ****************** -->

                      <!-- Item 6 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
                      <!-- ****************** -->

                      <!-- Item 7 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/119435/pexels-photo-119435.jpeg?auto=compress&cs=tinysrgb&h=650&w=940 1x, https://images.pexels.com/photos/119435/pexels-photo-119435.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 2x" alt="Item Carrosel" title="Item Carrosel"/>
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
                        </li>
                      </a>
                      <!-- ****************** -->

                      <!-- Item 8 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
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
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
                      <!-- ****************** -->
                      <!-- Item 3 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
                      <!-- ****************** -->

                      <!-- Item 4 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
                      <!-- ****************** -->

                      <!-- Item 5 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
                      <!-- ****************** -->

                      <!-- Item 6 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
                      <!-- ****************** -->

                      <!-- Item 7 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
                          <!-- Imagem do ítem do carrosel -->
                          <div class="imagem_item_carrosel_loj">
                            <img src="https://images.pexels.com/photos/119435/pexels-photo-119435.jpeg?auto=compress&cs=tinysrgb&h=650&w=940 1x, https://images.pexels.com/photos/119435/pexels-photo-119435.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 2x" alt="Item Carrosel" title="Item Carrosel"/>
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
                        </li>
                      </a>
                      <!-- ****************** -->

                      <!-- Item 8 -->
                      <a href="#">
                        <li class="container_item_carrosel_loj borda_verde_vivo_2 bsuavizada_5 bg_cinza">
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
                        </li>
                      </a>
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

        <script type="text/javascript" src="js/carrosel/carrosel.js"></script>
        <script type="text/javascript" src="js/carrosel/jcarousellite.js"></script>
        <script type="text/javascript" src="js/carrosel/carrossel.js"></script>

      </div>
      <div class="container_parceiro_premium">
        <div class="anuncio_parceiro_premium float_left ">
          <img src="pictures/cliente_parceiro/parceiro1png.png" alt="">
        </div>
        <div class="anuncio_parceiro_premium float_right">
          <img src="pictures/cliente_parceiro/parceiro1png.png" alt="">
        </div>
      </div>
      <div class="container_produto_fixo">
        <div class="produto_fixo">

        </div>
        <div class="produto_fixo">

        </div>
        <div class="produto_fixo">

        </div>
        <div class="produto_fixo">

        </div>
      </div>

      <!-- Rodape -->
      <?php
        require_once('component/footer.php');
      ?>
