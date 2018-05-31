<?php
require_once("../database/conect.php");
Conexao_db();
 ?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/modal_rede_social.css">
    <link rel="stylesheet" href="css/padroes.css">
  </head>
  <body>
    <header>
      <div class="container_menu">
        <div class="container_segura_menu">
          <a href="../index.php">
            <div class="container_logo float_left">
              <img src="pictures/logo/portal_auto_center.png" width="80px" alt="">
              INICIO
            </div>
          </a>
          <div class="container_agenda float_left">
            <i class = "material-icons fs_60">
              today
            </i>
            AGENDA
          </div>
          <div class="container_perfil float_left">
            <i class="material-icons fs_60">
              person
            </i>
            PERFIL
          </div>
          <div class="container_sair float_left fs_40">
            SAIR
          </div>
        </div>
      </div>
    </header>

      <?php
      $sql1 = "SELECT tbl_post_rede_social.*,
        tbl_usuario.usuario FROM dbautofast.tbl_post_rede_social
        INNER JOIN tbl_usuario
        ON tbl_usuario.id_usuario = tbl_post_rede_social.id_usuario;
        ";
        $select1 = mysql_query($sql1);
        while ($rsFC1 = mysql_fetch_array($select1))
        {

      ?>
      <article class="article sombra_preta_10 margem_t_20" >
      <div class="container_usuario">
        <div class="container_segura_usuario">
          <div class="container_foto_usuario float_left margem_t_5">

          </div>
          <div class="container_nome_usuario float_left fs_30 titulo">
            <?php echo($rsFC1['usuario']) ?>
          </div>
        </div>
      </div>

      <div class="container_foto_postada">
        <img src="<?php echo($rsFC1['foto']) ?>" alt="">
      </div>

      <div class="container_curtir_comentar">
        <div class="curtir">
          <i class="material-icons fs_50 float_left">
            favorite
          </i>
        </div>
        <div class="comentar">
          <i class="material-icons fs_50 float_left margem_l_15">
            speaker_notes
          </i>
        </div>
      </div>
      <?php
      $sql = "SELECT tbl_comentario_post.*,
      tbl_usuario.usuario FROM dbautofast.tbl_comentario_post
      INNER JOIN tbl_usuario
      ON tbl_usuario.id_usuario = tbl_comentario_post.id_usuario;";
        $select = mysql_query($sql);
        while ($rsFC = mysql_fetch_array($select))
        {

      ?>
      <div class="container_comentarios bsuavizada_40 sombra_preta_10">
        <div class="usuario_comentario">
          <div class="foto_usuario_comentario float_left margem_l_15 margem_t_5">

          </div>
          <div class="nome_usuario_comentario titulo border">
            <?php echo($rsFC['usuario']) ?>
          </div>
        </div>
        <div class="comentario conteudo justificado preenche_l_20 espacamento_linha_25 txt_preto bsuavizada_40">
          <?php echo($rsFC['comentario']) ?>
        </div>
      </div>
      <?php
        }
        ?>
      </article>
      <?php

      }
      ?>

  </body>
</html>
