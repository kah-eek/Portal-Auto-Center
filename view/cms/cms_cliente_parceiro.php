<!-- Importando Cabeçalho CMS -->
<?php
  require_once('../component/cms_header.php');
 ?>

<!-- Importando Menu Lateral CMS -->
 <?php
   require_once('../component/cms_menu_lateral.php');
  ?>

<div class="container_principal_cliente">
  <div class="container_conteudo">
    <div class="container_segura_texto_imagem float_left">
      <div class="container_texto_imagem align_center preenche_5 titulo">
        Foto Cadastro Cliente
      </div>

      <div class="container_imagem_cliente centro_lr margem_t_20">
        <img src="" alt="">
      </div>
    </div>

    <div class="container_segura_texto_cadastro_cliente float_left">
      <div class="container_texto">
        <div class="container_segura_texto_cadastro align_center preenche_5 titulo">
          Cadastro Cliente
        </div>
        <div class="container_edit_texto centro_lr">
          <textarea name="txtarea" rows="5000" cols="40"></textarea>
        </div>
      </div>
    </div>

    <div class="container_segura_botao margem_t_150">
      <div class="input_submit">
        <button type="button" name="btn_enviar">Enviar</button>
      </div>
    </div>

  </div>
</div>
