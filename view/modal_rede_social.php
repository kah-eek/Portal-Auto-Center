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
      <!-- LADO DIREITO(REDE SOCIAL) -->
      <div class="container_lado_direito float_left">
        <div class="container_conteudo_rs">
          <!-- PARTE TITULO -->
          <div class="container_titulo_usuario float_left">
            <div class="container_img_titulo_usuario borda_preta_1 float_left">
              <div class="item_img_titulo_usuario">

              </div>
            </div>

            <div class="item_titulo_usuario float_left titulo txt_preto fs_25 float_left preenche_t_35">
              Nome de Usuário
            </div>
          </div>

          <!-- PARTE PUBLICACAO -->
          <div class="container_post float_left bg_cinza borda_preta_1">
            <div id="agenda_central_rs" class="item_post">
              <div class="container_img_post float_left margem_t_10">
                <label for="btn_img_post">
                  <div class="item_img_post borda_preta_1">
                    CLICK-ME
                  </div>
                </label>
                <input class="display_none" id="btn_img_post" type="file" name="btn_img_btn_img_post" value="">
              </div>

              <div class="container_descricao_post float_left margem_t_10 margem_l_20">

                <div class="item_titulo_post titulo fs_25 preenche_t_10">
                  Titulo do Post
                </div>
                <div class="divisor_rs bg_preto">

                </div>
                <div class="item_titulo_post titulo fs_25 preenche_t_10">
                  Comentários
                </div>
              </div>

              <div class="container_reacao float_left margem_l_20 margem_t_10">
                <div class="item_img_reacao float_left">
                  <i class="material-icons preenche_t_5 margem_l_5" style="font-size:35px;">favorite</i>
                </div>
                <div class="item_img_reacao float_left">
                  <i class="material-icons preenche_t_5 margem_l_5" style="font-size:35px;">mode_comment</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      // $('#agendaRedeSocial').click(function(){
      //   modalAgendaRedeSocial();
      //
      // })

      $('#agendaRedeSocial').click(function(){
        modalAgendaRedeSocial();

      })

    </script>

  </body>
</html>
