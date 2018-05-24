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
  <?php
  $sql1 = "SELECT tbl_topico_forum.*,
  tbl_cliente.nome FROM db_auto_center.tbl_topico_forum
    INNER JOIN tbl_cliente
    ON tbl_cliente.id_cliente = tbl_topico_forum.id_cliente;";
    $select1 = mysql_query($sql1);
    while ($rsConsulta1 = mysql_fetch_array($select1))
    {

  ?>
  <!-- Contáiner principal que centraliza todo o conteúdo -->
  <div class="container_conteudo_central_for centro_lr margem_t_20">
    <!-- Contáiner do tópico -->
    <div class="container_topico_forum bg_cinza sombra_preta_20 margem_t_30">
      <!-- Contáiner da foto do usuário mais o botão de like -->
      <div class="container_foto_like_for preenche_20 float_left">
        <!-- Foto fo usuário -->
        <div class="foto_usuario_for">
          <img class="bsuavizada_250 sombra_preta_2" src="<?php echo($rsConsulta1['foto']) ?>" alt="Foto de perfil">
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
            <?php echo($rsConsulta1['titulo']) ?>
          </div>

          <div class="data_topico_for fs_16">
            <?php echo($rsConsulta1['log_topico_forum']) ?>
          </div>

          <!-- Texto descritivo do tópico -->
          <div class="container_descricao_topico_for preenche_t_20 overflow_auto">
            <?php echo($rsConsulta1['mensagem']) ?>
          </div>

        </div>

        <!-- Contáiner do botão do tópico do fórum -->
        <div class="container_botao_topico_for float_left preenche_l_50">
          <input id="responderComentario" class="input_submit" type="submit" name="btn_topico_forum" value="Responder">
        </div>
      </form>

    </div>
    <!-- ________________________________________________________________________________________________________________ -->

    <!-- Divisor de conteúdo -->
    <div class="divisor"></div>
    <!-- Contáiner de resposta ao tópico -->
    <?php
      $sql = "SELECT tbl_comentario_topico_forum.*,
      tbl_cliente.nome FROM db_auto_center.tbl_comentario_topico_forum
      INNER JOIN tbl_cliente
      ON tbl_cliente.id_cliente = tbl_comentario_topico_forum.id_cliente;";
        $select = mysql_query($sql);
        while ($rsConsulta = mysql_fetch_array($select))
      {

    ?>
    <div class="container_topico_forum bg_cinza sombra_preta_20">

      <!-- Contáiner da foto do usuário mais o botão de like -->
      <div class="container_foto_like_for preenche_20 float_left margem_t_30">
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
            <?php echo($rsConsulta['log']) ?>
          </div>

          <!-- Texto descritivo do tópico -->
          <div class="container_descricao_topico_for overflow_auto">
            <?php echo($rsConsulta['mensagem']) ?>
          </div>

        </div>
        <!-- Contáiner do botão do tópico do fórum -->
        <!-- <div class="container_botao_topico_for float_left preenche_l_50 preenche_t_10">
          <input class="input_submit" type="submit" name="btn_topico_forum" value="Responder">
        </div> -->
      </form>
      <?php
      }
      ?>
    </div>
    <?php
    }
    ?>
    <!-- ________________________________________________________________________________________________________________ -->
  </div>
  <script>
    $('#responderComentario').click(function(){
      modalRespostaForum();
    })
  </script>
  <!-- Rodape -->
  <?php
    require_once('component/footer.php');
  ?>
