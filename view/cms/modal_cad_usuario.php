<?php
  session_start();

  require_once('../../database/conect.php');
  Conexao_db();
////////////////////////////////////////////////////////////
$id_usuario="";
$id_nivel_usuario="";
$usuario="";
$senha="";
$nivel="";
$ativo="";
/////////////////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/cms/modal_cad_usuario.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>
    <div class="container_principal_user">
      <div class="container_titulo_user">
        <div class="item_titulo_user fs_40 centro_lr align_center preenche_t_20 negrito">
          Usuários Cadastrados
        </div>
      </div>
      <form class="frmCadUser centro_lr" action="index.html" method="post">
        <div class="container_titulo_visualizar_user float_left margem_t_20">
          <div class="item_titulo_visualizar_user preenche_t_30 align_center fs_20 negrito">
            Visualização Usuários
          </div>
        </div>
        <div class="container_subs_users float_left">
          <div class="subs_exibindo_users preenche_t_20 borda_preta_1 align_center negrito fs_20 float_left">
            Usuário
          </div>
          <div class="subs_exibindo_users preenche_t_20 borda_preta_1 align_center negrito fs_20 float_left">
            Senha
          </div>
          <div class="subs_exibindo_users preenche_t_20 borda_preta_1 align_center negrito fs_20 float_left">
            Nível
          </div>
        </div>
        <div class="container_exibindo_users float_left">
          <?php
          $sql = "SELECT * FROM tbl_usuario";
            $select = mysql_query($sql);
            while ($rsConsulta = mysql_fetch_array($select))
            {

          ?>
          <div class="item_exibindo_users preenche_t_20 borda_preta_1 align_center negrito fs_20 float_left">
            <?php echo($rsConsulta['usuario']) ?>
          </div>
          <div class="item_exibindo_users preenche_t_20 borda_preta_1 align_center negrito fs_20 float_left">
            <?php echo($rsConsulta['senha']) ?>
          </div>
          <div class="item_exibindo_users preenche_t_20 borda_preta_1 align_center negrito fs_20 float_left">
            <?php echo($rsConsulta['id_nivel_usuario']) ?>
          </div>
          <?php
            }
          ?>
        </div>
      </form>
    </div>
  </body>
</html>
