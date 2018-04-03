<?php

  // Importação do cabeçalho
  require_once('../component/cms_header.php');
?>
    <!-- Conteiner que segura o conteudo -->
    <div class="container_principal centro_lr">

      <?php
        // Importação do menu lateral
        require_once('../component/cms_menu_lateral.php');
      ?>
      <!-- Container que segurar o resto do conteudo -->
      <div class="conteiner_conteudo float_left bg_branco">
        <!-- Lado esquerdo da tela -->
        <div class="metade">
          <div class="sobre">
            <div class="fundo_s">
              <img src="../pictures/sobre_empresa/sobre-nos.jpg">
              <input class="inp_sobre input_submit" type="submit" name="" value="">
            </div>
            <div class="frente_s">
              <img src="../pictures/sobre_empresa/sobre-nos.jpg" alt="">
            </div>

          </div>
          <div class="valores">
            <div class="fundo_v">
              <img src="../pictures/sobre_empresa/valores.png" alt="">
            </div>
            <div class="frente_v">
              <img src="../pictures/sobre_empresa/valores.png" alt="">
            </div>

          </div>
        </div>
        <!-- Lado direito da tela -->
        <div class="metade">
          <div class="visao">
            <div class="fundo_vi">
              <img src="../pictures/sobre_empresa/visao.png" alt="">
            </div>
            <div class="frente_vi">
              <img src="../pictures/sobre_empresa/visao.png" alt="">
            </div>
          </div>
          <div class="missao">
            <div class="fundo_m">
              <img src="../pictures/sobre_empresa/missao.png" alt="">
            </div>
            <div class="frente_m">
              <img src="../pictures/sobre_empresa/missao.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
