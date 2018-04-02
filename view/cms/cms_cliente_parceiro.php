<!-- Importando Cabeçalho CMS -->
<?php
  require_once('../component/cms_header.php');
 ?>

<!-- Importando Menu Lateral CMS -->
 <?php
   require_once('../component/cms_menu_lateral.php');
  ?>

<div class="container_principal_cliente">
  <div class="container_segura_cadastro_cliente">
    <div class="container_segura_texto_imagem float_left">
      <div class="texto_imagem align_center preenche_5 titulo">
        Foto Cadastro Cliente
      </div>

      <div class="imagem_cliente centro_lr margem_t_20">
        <img src="" alt="">
      </div>
    </div>

    <div class="container_segura_texto_cadastro_cliente float_left">
      <div class="container_texto">
        <div class="texto_cadastro align_center preenche_5 titulo">
          Cadastro Cliente
        </div>
        <div class="edit_texto centro_lr margem_t_30">
          <textarea class="no_resize" name="txtarea" rows="11" cols="40">

          </textarea>
        </div>
      </div>
    </div>

    <div class="container_segura_botao margem_t_80">
      <div class="input_submit">
        <button type="button" name="btn_enviar">Enviar</button>
      </div>
    </div>

    <div class="container_segura_cadastro_parceiro">
      <div class="container_texto_imagem_parceiro align_center preenche_5 titulo">
        <div class="texto_imagem align_left preenche_5 titulo">
          Foto Cadastro Parceiro
        </div>
        <div class="imagem_cadastro_parceiro centro_lr">

        </div>
      </div>
    </div>

  </div>
</div>
