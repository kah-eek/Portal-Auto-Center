<!-- Importando Cabeçalho CMS -->
<?php
  require_once('../component/cms_header.php');
 ?>

<!-- Importando Menu Lateral CMS -->
 <?php
   require_once('../component/cms_menu_lateral.php');
  ?>
 <!DOCTYPE html>
<div class="container_principal_cliente">
  <div class="container_sobre_cliente float_left">

    <!-- TITULOS -->
    <div class="container_titulos bg_preto ">
      <div class="item_titulo txt_branco align_center titulo preenche_10">
        Foto Cadastro Cliente
      </div>
      <div class="item_titulo txt_branco align_center titulo preenche_10">
        Texto Cadastro Cliente
      </div>
    </div>

    <div class="container_informacoes">

      <!-- IMAGEM -->
      <div class="container_imagem float_left">
        <div class="item_imagem centro_lr margem_t_30">

        </div>
      </div>

      <!-- TEXTAREA -->
      <div class="container_textarea float_left">
        <div class="item_textarea centro_lr">
          <textarea name="name" style="resize: none" rows="11" cols="42"></textarea>
        </div>
      </div>

      <div class="container_botao float_left preenche_10 margem_t_80">
        <div class="input_submit_cp">
          <input type="submit" name="btn_enviar" value="Enviar">
        </div>
      </div>

    </div>

  </div>

  <div class="container_sobre_parceiro float_left margem_t_10">

    <!-- TITULOS -->
    <div class="container_titulos bg_preto">
      <div class="item_titulo txt_branco align_center titulo preenche_10">
        Foto Cadastro Parceiro
      </div>
      <div class="item_titulo txt_branco align_center titulo preenche_10">
        Texto Cadastro Parceiro
      </div>
    </div>

    <div class="container_informacoes">

      <!-- IMAGEM -->
      <div class="container_imagem float_left">
        <div class="item_imagem centro_lr margem_t_30">

        </div>
      </div>

      <!-- TEXTAREA -->
      <div class="container_textarea float_left">
        <div class="item_textarea centro_lr">
          <textarea name="name" style="resize: none" rows="11" cols="42"></textarea>
        </div>
      </div>

      <div class="container_botao float_left preenche_10 margem_t_80">
        <div class="input_submit_cp">
          <input type="submit" name="btn_enviar" value="Enviar">
        </div>
      </div>

    </div>

    <!-- PARTE DE CADASTROS -->
    <div class="container_cadastros float_right">
      <div class="container_titulo_cadastro bg_preto">
        <div class="item_titulo_cadastro bg_preto txt_branco align_center titulo preenche_10">
          Cadastros
        </div>
      </div>
      <!-- EDITANDO CADASTROS -->
      <div class="container_edit_informacoes">
        <!-- IMAGEM -->
        <div class="container_imagem float_left">
          <div class="item_imagem centro_lr margem_t_30">

          </div>
        </div>

        <div class="container_segura_texto float_left">
          <div class="item_texto centro_lr margem_t_30">

          </div>
        </div>

        <div class="container_acoes margem_t_30 float_left">

          <!-- ICONE EXCLUIR -->
          <div class="excluir float_left">
            <div class="icon centro_lr">
              <i class="material-icons" style="font-size:30px;">delete</i>
            </div>
          </div>

          <!-- ICONE EDITAR -->
          <div class="editar float_left">
            <div class="icon centro_lr">
              <i class="material-icons" style="font-size:30px;">mode_edit</i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
