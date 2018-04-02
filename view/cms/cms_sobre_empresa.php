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
            <img src="../pictures/sobre_empresa/sobre-nos.jpg" alt="">
          </div>
          <div class="valores">
            <img src="../pictures/sobre_empresa/valores.png" alt="">
          </div>
        </div>
        <!-- Lado direito da tela -->
        <div class="metade">
          <div class="visao">
            <img src="../pictures/sobre_empresa/visao.png" alt="">
          </div>
          <div class="missao">
            <img src="../pictures/sobre_empresa/missao.png" alt="">
          </div>
        </div>
      </div>
    </div>
