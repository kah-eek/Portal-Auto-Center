<?php
  // Importando o cabeçalho
  require_once("component/header.php");

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('db_auto_center');
?>
  <!--
  @autor Caique M Oliveira
  @data 31/03/2018
  @descricao Página do forum de discussoes do portal
  -->

  <!-- Contáiner principal que centraliza todo o conteúdo -->
  <div class="container_conteudo_central_for centro_lr preenche_t_80">
    <?php
    $sql = "SELECT * FROM tbl_topico_forum";
      $select = mysql_query($sql);
      while ($rsConsulta = mysql_fetch_array($select))
      {

    ?>
    <!-- Contáiner do tópico -->
    <div class="container_topico_forum bg_cinza sombra_preta_20">
      <!-- Contáiner da foto do usuário mais o botão de like -->
      <div class="container_foto_like_for preenche_20 float_left">
        <!-- Foto fo usuário -->
        <div class="foto_usuario_for">
          <img class="bsuavizada_250 sombra_preta_2" src="<?php echo($rsConsulta['foto']) ?>" alt="Foto de perfil">
        </div>
        <!-- ***************************************************************************** -->

        <!-- Contáiner do like do tópico -->
        <div class="like_topico_for align_center margem_t_150 preenche_20">

          <!-- Contáiner do ícone de curtir e número de likes -->
          <div class="curtir_numero_likes_for centro_lr">
            <!-- Botão curtir -->
            <div class="curtir_for float_left">
              <i class="material-icons txt_preto fs_30" title="Curtir">thumb_up</i>
            </div>

            <!-- Número de curtidas -->
            <div class="numero_curtidas_for float_left align_center ellipsis conteudo preenche_5">
              60
            </div>
          </div>
        </div>

      </div>
      <!-- ############################################################## -->

      <form action="" method="POST">
        <!-- Conáiner do texto do tópico -->
        <div class="container_texto_topico_for espacamento_linha_35 float_left preenche_50 conteudo fs_20 justificado">

          <!-- Título do tópico -->
          <div class="container_titulo_topico_for titulo">
            <?php echo($rsConsulta['titulo']) ?>
          </div>

          <div class="data_topico_for fs_16">
            <?php echo($rsConsulta['log_topico_forum']) ?>
          </div>

          <!-- Texto descritivo do tópico -->
          <div class="container_descricao_topico_for preenche_t_20 overflow_auto">
            <?php echo($rsConsulta['mensagem']) ?>
          </div>

        </div>

        <!-- Contáiner do botão do tópico do fórum -->
        <div class="container_botao_topico_for float_left preenche_l_50">
          <input class="input_submit" type="submit" name="btn_topico_forum" value="Responder">
        </div>
      </form>

    </div>
    <!-- ________________________________________________________________________________________________________________ -->

    <!-- Divisor de conteúdo -->
    <div class="divisor"></div>
    <?php
    }
    ?>
    <!-- Contáiner de resposta ao tópico -->
    <div class="container_topico_forum bg_cinza sombra_preta_20">

      <!-- Contáiner da foto do usuário mais o botão de like -->
      <div class="container_foto_like_for preenche_20 float_left">
        <!-- Foto fo usuário -->
        <div class="foto_usuario_for">
          <img class="bsuavizada_250 sombra_preta_2" src="pictures/forum/smile_face.jpeg" alt="Foto de perfil">
        </div>
        <!-- ***************************************************************************** -->

        <!-- Contáiner do like do tópico -->
        <div class="like_topico_for align_center margem_t_150 preenche_20">

          <!-- Contáiner do ícone de curtir e número de likes -->
          <div class="curtir_numero_likes_for centro_lr">
            <!-- Botão curtir -->
            <div class="curtir_for float_left">
              <i class="material-icons txt_preto fs_30" title="Curtir">thumb_up</i>
            </div>

            <!-- Número de curtidas -->
            <div class="numero_curtidas_for float_left align_center ellipsis conteudo preenche_5">
              12
            </div>
          </div>
        </div>

      </div>
      <!-- ############################################################## -->

      <form action="" method="POST">
        <!-- Conáiner do texto do tópico -->
        <div class="container_texto_topico_for espacamento_linha_35 float_left preenche_50 conteudo fs_20 justificado">

          <div class="data_topico_for fs_16">
            02/04/2018
          </div>

          <!-- Texto descritivo do tópico -->
          <div class="container_descricao_topico_for overflow_auto">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>

        </div>

        <!-- Contáiner do botão do tópico do fórum -->
        <!-- <div class="container_botao_topico_for float_left preenche_l_50 preenche_t_10">
          <input class="input_submit" type="submit" name="btn_topico_forum" value="Responder">
        </div> -->
      </form>

    </div>
    <!-- ________________________________________________________________________________________________________________ -->

  </div>

  <!-- Rodape -->
  <?php
    require_once('component/footer.php');
  ?>
