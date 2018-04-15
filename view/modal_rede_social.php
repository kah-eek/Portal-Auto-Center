<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/modal_rede_social.css">
  </head>
  <body>
    <div class="container_segura_tudo">
      <div class="container_menu_m float_left bg_cinza">
        <div class="itens_menu">

          <!-- IMAGEM DO MENU -->
          <div class="container_img_menu_rs preenche_t_20">
            <div class="item_img_menu_rs centro_lr borda_preta_1">

            </div>
          </div>
          <!-- PARTE EDITAR PERFIL -->
          <div class="container_edit_perfil margem_t_20 centro_lr">
            <div class="item_edit_perfil borda_preta_1">
              <div class="img_configs float_left">
                <i class="material-icons" style="font-size:40px;">settings</i>
              </div>
              <div class="titulo_editar_perfil float_left">
                <div class="item_editar_perfil preenche_t_10 align_center titulo">
                  Editar Perfil
                </div>
              </div>
            </div>
          </div>

          <!-- PARTE AGENDA -->
          <div class="container_agenda margem_t_20 centro_lr">
            <div class="item_agenda borda_preta_1">
              <div class="img_agenda float_left">
                <i class="material-icons" style="font-size:40px;">account_balance_wallet</i>
              </div>

              <div class="titulo_agenda float_left">
                <div id="agendaRedeSocial" class="item_agenda_titulo preenche_t_10 align_center titulo">
                  Agenda
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

      <!-- (REDE SOCIAL) -->
      <div id="agenda_central_rs" class="segura_rede_social float_left bg_cinza">
        <div class="item_segura_rs float_left borda_preta_1">

          <div class="container_img_rs float_left">
            <div class="item_img_rs margem_l_20 borda_preta_1">

            </div>
          </div>

          <!-- REAÇÃO -->
          <div class="container_reacao float_left margem_l_20 margem_t_10">
            <div class="segura_itens_reacao">
              <div class="item_img_reacao float_left">
                <i class="material-icons" style="font-size:40px;">chat_bubble</i>
              </div>
              <div class="item_img_reacao float_left margem_l_20">
                <i class="material-icons" style="font-size:40px;">favorite</i>
              </div>
            </div>
          </div>

          <div class="container_titulo_post float_left margem_l_20">
            <div class="item_titulo_post preenche_t_10 titulo fs_25">
              Título do Post
            </div>
          </div>

          <div class="container_texto_titulo float_left margem_l_20">
            <div class="item_texto_titulo float_left justificado fs_20">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. enim pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>

          <div class="container_titulo_post float_left margem_l_40">
            <div class="item_titulo_post preenche_t_10 titulo fs_25">
              Comentários
            </div>
          </div>

          <div class="container_img_data margem_l_20 float_left">
            <div class="item_img_data margem_l_20">
              <div class="img_comentario float_left">

              </div>

              <div class="txt_data float_left preenche_t_10 fs_20 margem_l_20 align_center">
                Data
              </div>
            </div>
          </div>

          <div class="container_texto_comentario float_left margem_l_100">
            <div class="item_texto_comentario float_left justificado fs_20">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. enim pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>

        </div>
      </div>

    <script>

      $('#agendaRedeSocial').click(function(){
        modalAgendaRedeSocial();

      })

    </script>

  </body>
</html>
