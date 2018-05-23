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
          <div class="container_logo float_left">

          </div>
          <div class="container_agenda float_left">
            <i class = "material-icons fs_60">
              today
            </i>
          </div>
          <div class="container_perfil float_left">

          </div>
          <div class="container_sair float_left fs_40">
            sair
          </div>
        </div>
      </div>
    </header>
    <article>
      <div class="container_usuario">
        <div class="container_segura_usuario">
          <div class="container_foto_usuario float_left">

          </div>
          <div class="container_nome_usuario float_left">

          </div>
        </div>
      </div>
      <div class="container_foto_postada">

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
      <div class="container_comentarios">
        <div class="usuario_comentario">
          <div class="foto_usuario_comentario">

          </div>
          <div class="nome_usuario_comentario">

          </div>
        </div>
        <div class="comentario">
          
        </div>
      </div>
    </article>
  </body>
</html>
