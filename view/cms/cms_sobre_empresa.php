
<?php
  // Importação do cabeçalho
  require_once('../component/cms_header.php');
?>
<div class="container_central centro_lr bg_cinza">
  <?php
    // Importação do menu lateral
    require_once('../component/cms_menu_lateral.php');
  ?>

  <div class="container_conteudo float_left bg_cinza">

    <!-- PARTE MISSAO -->

    <!-- *************************************************************** -->
    <div class="container_geral bg_cinza">
      <!-- TITULO -->
      <div class="container_titulo margem_t_5">
        <div class="item_titulo align_center txt_sombra_1x1x1_preto negrito fs_20 titulo">
          Missão
        </div>
      </div>

      <!-- INFORMAÇÕES -->
      <div class="container_infs bg_branco borda_preta_1 sombra_preta_b_15">

        <form name="frmImagemMissao" method="POST" enctype="multipart/form-data">
          <!-- IMAGEM -->
          <div class="segura_imagem float_left">
            <label for="btn_img_missao">
              <div class="item_img margem_t_10 borda_preta_1 margem_t_5">

              </div>
            </label>
            <input class="display_none" id="btn_img_missao" type="file" name="btn_img_missao" value="">
          </div>
        </form>

        <form name="frmDescritivoMissao" action="index.html" method="post">
          <!-- TEXTAREA -->
          <div class="container_segura_textarea float_left">
            <div class="segura_textarea">
              <textarea placeholder="Digite Aqui!!!" name="name" rows="9" style="resize: none" cols="61"></textarea>
            </div>
          </div>
          <!-- BOTÃO -->
          <div class="container_salvar margem_t_40 float_left">
            <div class="segura_salvar_foto margem_t_20 centro_lr">
              <a href="#">
                <i id="btnSalvarMissao" class="material-icons" style="font-size:35px;">save</i>
              </a>
            </div>
          </div>
        </form>

      </div>
    </div>

    <!-- PARTE VISAO -->

    <!-- *************************************************************** -->

    <div class="container_geral bg_cinza">
      <!-- TITULO -->
      <div class="container_titulo margem_t_5">
        <div class="item_titulo align_center txt_sombra_1x1x1_preto negrito fs_20 titulo">
          Visão
        </div>
      </div>

      <!-- INFORMAÇÕES -->
      <div class="container_infs bg_branco borda_preta_1 sombra_preta_b_15">

        <form name="frmImagemVisao" action="index.html" method="post" enctype="multipart/form-data">
          <!-- IMAGEM -->
          <div class="segura_imagem float_left">
            <label for="btn_img_visao">
              <div class="item_img margem_t_10 borda_preta_1 margem_t_5">

              </div>
            </label>
            <input id="btn_img_visao" class="display_none" type="file" name="btn_img_visao" value="">
          </div>
        </form>

        <form name="frmDescritivoVisao" action="index.html" method="post">
          <!-- TEXTAREA -->
          <div class="container_segura_textarea float_left">
            <div class="segura_textarea">
              <textarea placeholder="Digite Aqui!!!" name="name" rows="9" style="resize: none" cols="61"></textarea>
            </div>
          </div>
          <!-- BOTÃO -->
          <div class="container_salvar margem_t_40 float_left">
            <div class="segura_salvar_foto margem_t_20 centro_lr">
              <i class="material-icons" style="font-size:35px;">save</i>
            </div>
          </div>
        </form>

      </div>
    </div>

    <!-- PARTE VALORES -->

    <!-- *************************************************************** -->

    <div class="container_geral bg_cinza">
      <!-- TITULO -->
      <div class="container_titulo margem_t_5">
        <div class="item_titulo align_center txt_sombra_1x1x1_preto negrito fs_20 titulo">
          Valores
        </div>
      </div>

      <!-- INFORMAÇÕES -->
      <div class="container_infs bg_branco borda_preta_1 sombra_preta_b_15">

        <form name="frmImagemValores" action="index.html" method="post" enctype="multipart/form-data">
          <!-- IMAGEM -->
          <div class="segura_imagem float_left">
            <label for="btn_img_valores">
              <div class="item_img margem_t_10 borda_preta_1 margem_t_5">

              </div>
              <input class="display_none" id="btn_img_valores" type="file" name="btn_img_valores" value="">
            </label>
          </div>
        </form>

        <form name="frmDescritivoValores" action="index.html" method="post">
          <!-- TEXTAREA -->
          <div class="container_segura_textarea float_left">
            <div class="segura_textarea">
              <textarea placeholder="Digite Aqui!!!" name="name" rows="9" style="resize: none" cols="61"></textarea>
            </div>
          </div>
          <!-- BOTÃO -->
          <div class="container_salvar margem_t_40 float_left">
            <div class="segura_salvar_foto margem_t_20 centro_lr">
              <i class="material-icons" style="font-size:35px;">save</i>
            </div>
          </div>
        </form>

      </div>
    </div>

    <!-- PARTE EMPRESA -->

    <!-- *************************************************************** -->

    <div class="container_geral bg_cinza">
      <!-- TITULO -->
      <div class="container_titulo margem_t_5">
        <div class="item_titulo align_center  txt_sombra_1x1x1_preto negrito fs_20 titulo">
          Empresa
        </div>
      </div>

      <!-- INFORMAÇÕES -->
      <div class="container_infs bg_branco borda_preta_1 sombra_preta_b_15">

        <form name="frmImagemEmpresa" action="index.html" method="post" enctype="multipart/form-data">
          <!-- IMAGEM -->
          <div class="segura_imagem float_left">
            <label for="btn_img_empresa">
              <div class="item_img margem_t_10 borda_preta_1 margem_t_5">

              </div>
              <input class="display_none" id="btn_img_empresa" type="file" name="btn_img_empresa" value="">
            </label>
          </div>
        </form>

        <form name="frmDescritivoEmpresa" action="index.html" method="post">
          <!-- TEXTAREA -->
          <div class="container_segura_textarea float_left">
            <div class="segura_textarea">
              <textarea placeholder="Digite Aqui!!!" name="name" rows="9" style="resize: none" cols="61"></textarea>
            </div>
          </div>
          <!-- BOTÃO -->
          <div class="container_salvar margem_t_40 float_left">
            <div class="segura_salvar_foto margem_t_20 centro_lr">
              <i class="material-icons" style="font-size:35px;">save</i>
            </div>
          </div>
        </form>

      </div>
    </div>
    <!-- FINALIZA -->
  </div>
</div>

<script>
  $('#btnSalvarMissao').click(function(){
    alert('ok');
  })
</script>
