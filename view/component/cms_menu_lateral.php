
    <!--
      @autor Caique M. Oliveira
      @data 01/04/2018
      @descricao Menu lateral do CMS
    -->

    <!-- Contáiner do menu lateral -->
    <div class="menu_lateral float_left bg_branco borda_cinza_r_2 preenche_t_20 sombra_preta_l_2">

      <!-- Item do menu lateral - Galeria -->
      <a href="#">
        <div class=" margem_b_30 item_menu_lateral bg_preto txt_branco borda_preta_t_2 borda_preta_b_2">
          <!-- Título do item do menu -->
          <div class="titulo_item conteudo fs_20 preenche_t_25 preenche_l_5 float_left">
            Galeria
          </div>

          <!-- Contáiner do ícone representativo do item elecionado -->
          <div class="container_item_selecionado float_left preenche_t_20">
            <i class="material-icons fs_30 txt_preto seletor">keyboard_arrow_right</i>
          </div>

          <!-- Barra decorativa -->
          <div class="barra_decorativa_item float_left bg_verde_vivo"></div>

        </div>
      </a>
      <!-- ########################################################################### -->

      <!-- Item do menu lateral - Sobre a Empresa -->
      <a href="#">
        <div class=" margem_b_30 item_menu_lateral bg_preto txt_branco borda_preta_t_2 borda_preta_b_2">
          <!-- Título do item do menu -->
          <div id="btnCmsEmpresa" class="titulo_item conteudo fs_20 preenche_t_25 preenche_l_5 float_left">
            Sobre a Empresa
          </div>

          <!-- Contáiner do ícone representativo do item elecionado -->
          <div class="container_item_selecionado float_left preenche_t_20">
            <i class="material-icons fs_30 txt_preto seletor">keyboard_arrow_right</i>
          </div>

          <!-- Barra decorativa -->
          <div class="barra_decorativa_item float_left bg_verde_vivo"></div>

        </div>
      </a>
      <!-- ########################################################################### -->

      <!-- Item do menu lateral - Movies -->
      <a href="#">
        <div id="btnCmsCadParceiro" class=" margem_b_30 item_menu_lateral bg_preto txt_branco borda_preta_t_2 borda_preta_b_2">
          <!-- Título do item do menu -->
          <div class="titulo_item conteudo fs_20 preenche_t_25 preenche_l_5 float_left">
            Cadastro de Parceiros
          </div>

          <!-- Contáiner do ícone representativo do item elecionado -->
          <div class="container_item_selecionado float_left preenche_t_20">
            <i class="material-icons fs_30 txt_preto seletor">keyboard_arrow_right</i>
          </div>

          <!-- Barra decorativa -->
          <div class="barra_decorativa_item float_left bg_verde_vivo"></div>

        </div>
      </a>
      <!-- ########################################################################### -->

      <!-- Item do menu lateral - Books -->
      <a href="#">
        <div class=" margem_b_30 item_menu_lateral bg_preto txt_branco borda_preta_t_2 borda_preta_b_2">
          <!-- Título do item do menu -->
          <div class="titulo_item conteudo fs_20 preenche_t_25 preenche_l_5 float_left">
            Cadastro de Veículos
          </div>

          <!-- Contáiner do ícone representativo do item elecionado -->
          <div class="container_item_selecionado float_left preenche_t_20">
            <i class="material-icons fs_30 txt_preto seletor">keyboard_arrow_right</i>
          </div>

          <!-- Barra decorativa -->
          <div class="barra_decorativa_item float_left bg_verde_vivo"></div>

        </div>
      </a>
      <!-- ########################################################################### -->

      <!-- Item do menu lateral - Newspaper -->
      <a href="#">
        <div class=" margem_b_30 item_menu_lateral bg_preto txt_branco borda_preta_t_2 borda_preta_b_2">
          <!-- Título do item do menu -->
          <div class="titulo_item conteudo fs_20 preenche_t_25 preenche_l_5 float_left">
            Newspaper
          </div>

          <!-- Contáiner do ícone representativo do item elecionado -->
          <div class="container_item_selecionado float_left preenche_t_20">
            <i class="material-icons fs_30 txt_preto seletor">keyboard_arrow_right</i>
          </div>

          <!-- Barra decorativa -->
          <div class="barra_decorativa_item float_left bg_verde_vivo"></div>

        </div>
      </a>
      <!-- ########################################################################### -->

      <!-- Faixa decorativa inferior -->
      <div class="faixa_inferior margem_t_275 bg_azulado_escuro"></div>

    </div>
    <script>
      $('#btnCmsEmpresa').click(function(){
        modalCmsEmpresa();
      })
    </script>

    <script>
      $('#btnCmsCadParceiro').click(function(){
        modalCmsCadastroParceiros();
      })
    </script>
