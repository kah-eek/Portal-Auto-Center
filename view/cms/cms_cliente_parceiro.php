<!-- Importando Cabeçalho CMS -->
<?php
  require_once('../component/cms_header.php');
 ?>

<!-- Importando Menu Lateral CMS -->
 <?php
   require_once('../component/cms_menu_lateral.php');
  ?>

<div class="container_principal_cliente">
  <div class="container_segura_tudo">
    <div class="container_segura_texto_imagem float_left">
      <div class="texto_imagem align_center preenche_5 titulo bg_preto txt_branco">
        Foto Cadastro Cliente
      </div>

      <div class="imagem_cliente centro_lr margem_t_20">
        <img src="" alt="">
      </div>
    </div>

    <div class="container_segura_texto_cadastro_cliente float_left">
      <div class="container_texto">
        <div class="texto_cadastro_cliente align_center preenche_5 titulo bg_preto txt_branco">
          Cadastro Cliente
        </div>
        <div class="edit_texto centro_lr margem_t_30">
          <textarea class="no_resize" name="txtarea" rows="11" cols="40">

          </textarea>
        </div>
      </div>
    </div>

    <div class="container_segura_botao margem_t_30">
      <div class="input_submit margem_t_80">
        <button type="button" name="btn_enviar">Enviar</button>
      </div>
    </div>

    <div class="container_segura_cadastro_parceiro">
      <div class="container_texto_imagem_parceiro align_center titulo float_left">
        <div class="texto_foto_parceiro txt_branco align_center titulo preenche_5">
          Foto Cadastro Parceiro
        </div>
        <div class="imagem_cadastro_parceiro centro_lr margem_t_20">
          <img src="../pctures/cms_cliente_parceiro/cliente.jpg" alt="">
        </div>
      </div>

      <div class="container_segura_texto_cadastro_parceiro float_left">

        <div class="texto_cadastro_parceiro align_center txt_branco bg_preto titulo preenche_5">
          Cadastro Parceiro
        </div>

        <div class="edit_texto_parceiro centro_lr margem_t_30">
          <textarea class="no_resize" name="txtarea" rows="11" cols="40">

          </textarea>
        </div>
      </div>

      <div class="container_segura_botao margem_t_80">
        <div class="input_submit">
          <button type="button" name="btn_enviar">Enviar</button>
        </div>
      </div>
    </div>

    <div class="container_edit_cadastros">
      <div class="titulo_cadastros titulo preenche_5">
        Cadastros
      </div>
      <div class="edit_infs">

        <div class="imagem_infs margem_t_20 float_left">
          <img src="" alt="">
        </div>

        <div class="texto_infs margem_t_20 float_left">

        </div>

        <div class="segura_editar_apagar margem_t_20">
          <div class="apagar float_left">
            apagar
          </div>
          <div class="editar">
            Editar
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
