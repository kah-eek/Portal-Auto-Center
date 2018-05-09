<?php
  session_start();

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('db_auto_center');
////////////////////////////////////////////////////////////
$id_usuario="";
$usuario="";
$senha="";
$id_nivel_usuario="";
$cbxAtivo="";
$btnSalvar="Salvar";
////////////////////////////////////////////////////////////
if(isset($_GET['escolha']))//ESCOLHA EXCLUIR
{
  $escolha=$_GET['escolha'];

  if($escolha=='excluir')
  {
    //Resgata o codigo passado na URL
    $id=$_GET['id'];

    $sql = "DELETE FROM tbl_usuario where id_usuario=".$id;

    mysql_query($sql);

    header('location:index.php#');
//////////////////////////////////////////////////////////////////////
  }else if($escolha=='atualizar')//ESCOLHA EDITAR
    {
      $btnSalvar="atualizar";

      //Resgata o codigo passado na URL
      $id=$_GET['id'];

      //Utilizando variavel Global no UPDATE do registro
      $_SESSION['id']=$id;

      // Montando o SELECT para buscar o registro
      $sql="SELECT * FROM tbl_usuario WHERE id_usuario=".$id;

      //Executa no BD o select
      $select = mysql_query($sql);

      //Verifica se o resultado do select tem registros e
      //converte o resultado em um array
      if($rsConsulta=mysql_fetch_array($select))
      {
        $usuario=$rsConsulta['usuario'];
        $usuario=$rsConsulta['senha'];
      }
    }

}
////////////////////////////////////////////////////////////////
if(isset($_POST["btnSalvar"]))
{
  //Resgatar os dados fornecidos pelo usuario
  //usando o metod POST, conforme escolhido pelo Form
  $usuario=$_POST["txtUsuario"];
  $senha=$_POST["txtSenha"];
  $id_nivel_usuario=$_POST["sltNivel"];
  $cbxAtivo=$_POST["sltAtivo"];

  if($_POST["btnSalvar"]=='Salvar')
  {
    $sql = "INSERT INTO tbl_usuario(usuario,senha,id_nivel_usuario,ativo)
    VALUES ('".$usuario."','".$senha."','".$id_nivel_usuario."','".$cbxAtivo."')";

  }else if($_POST["btnSalvar"]=='atualizar')
  {
    $sql="UPDATE tbl_usuario SET usuario='".$usuario."', senha='".$senha."', id_nivel_usuario='".$id_nivel_usuario."' WHERE id_usuario=".$_SESSION['id'];
  }

  mysql_query($sql);

  header('location:index.php#');
  //echo($sql);

}
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
          Cadastro de Usuário
        </div>
      </div>
      <form class="frmCadUser centro_lr" action="index.html" method="post">
        <div class="container_subs_user float_left">
          <div class="item_subs_user float_left align_center preenche_t_20 fs_20 negrito">
            Usuario
          </div>
          <div class="item_subs_user margem_t_10 float_left align_center preenche_t_20 fs_20 negrito">
            Senha
          </div>
          <div class="item_subs_user margem_t_10 float_left align_center preenche_t_20 fs_20 negrito">
            Nível
          </div>
          <div class="item_subs_user margem_t_10 float_left align_center preenche_t_20 fs_20 negrito">
            Ativo
          </div>
        </div>
        <div class="container_inputs_user float_left">
          <?php
          $sql = "SELECT * FROM tbl_usuario";
            $select = mysql_query($sql);
            while ($rsConsulta = mysql_fetch_array($select))
            {

          ?>
          <div class="item_inputs_user float_left preenche_t_10 align_center fs_20">
            <input class="input_user" type="text" placeholder="Nome de Usuário" name="txtUsuario" value="<?php echo($rsConsulta['usuario']) ?>">
          </div>

          <div class="item_inputs_user preenche_t_10 float_left margem_t_10 align_center fs_20">
            <input class="input_user" type="text" name="txtSenha" placeholder="Senha" value="<?php echo($rsConsulta['senha']) ?>">
          </div>

          <div class="item_inputs_user float_left preenche_t_10 margem_t_10 align_center fs_20">
            <?php
            $sql = "SELECT * FROM tbl_nivel_usuario";
              $select = mysql_query($sql);
              while ($rsConsulta = mysql_fetch_array($select))
              {

            ?>
            <select class="slt_nivel_user" name="sltNivel">
              <option value="<?php echo($rsConsulta['nivel']) ?>">Níveis</option>
            </select>
            <?php
            }
            ?>
          </div>

          <div class="item_inputs_user preenche_t_20 float_left margem_t_10 align_center fs_20">
            <select required name="sltAtivo" class="color">
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>
          </div>
          <?php
            }
          ?>
        </div>
        <div class="container_bt_user float_left">
          <div class="item_bt_user">
            <input class="btn_user margem_l_100" type="submit" name="btnSalvar" value="Salvar">
          </div>
        </div>
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
          <div class="subs_exibindo_users preenche_t_20 borda_preta_1 align_center negrito fs_20 float_left">
            Delete-Editar
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
          <div class="item_exibindo_users align_center negrito fs_20 float_left">
            <div class="container_escolhas_user borda_preta_1 float_left">
              <div class="item_escolha_user float_left borda_preta_1 preenche_t_15">
                <a href="modal_cad_usuario.php?escolha=excluir&id=<?php echo($rsConsulta['id_usuario']);?>">Excluir
              </div>
              <div class="item_escolha_user float_left borda_preta_1 preenche_t_15">
                <a href="modal_cad_usuario.php?escolha=atualizar&id=<?php echo($rsConsulta['id_usuario']);?>">Editar
              </div>
            </div>
          </div>
          <?php
            }
          ?>
        </div>
      </form>
    </div>
  </body>
</html>
