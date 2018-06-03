<?php
session_start();
require_once("../database/conect.php");
Conexao_db();

if(isset($_POST["BtnOk"]))
  {
    $usuario = $_POST['txt_login'];
    $senha = $_POST['txt_senha'];

    addslashes($sql = "SELECT count(*) as contador, id_usuario FROM tbl_usuario WHERE usuario = '".$usuario."' AND senha = '".$senha."' AND id_nivel_usuario = 2");


    $result = mysql_query($sql);

    $autentica = mysql_fetch_array($result);

    // echo ($autentica['contador']);
    // echo ($sql);
    if($autentica['contador'] >0){
        // echo "1";
        $select = mysql_query($sql);

        $rsUsuario = mysql_fetch_array($select);

        $_SESSION['id_usuario'] = $rsUsuario['id_usuario'];

        $id_usuario = $_SESSION['id_usuario'];

        $sql1 = "SELECT id_parceiro FROM tbl_parceiro where id_usuario = ".$_SESSION['id_usuario'];

        $select1 = mysql_query($sql1);
        // echo ($sql1);
        $rsParceiro = mysql_fetch_array($select1);

        // $_SESSION['id_parceiro'] = $rsParceiro['id_parceiro'];
        $_SESSION['id_parceiro1'] = $rsParceiro['id_parceiro'];
        $_SESSION['nomeParceiro'] = $rsParceiro['razao_social'];
        $_SESSION['fotoParceiro'] = $rsParceiro['foto_perfil'];

        // $_SESSION['nomeUsuario'] = $rsUsuario['nome'];


        header('location:../view/parceiro/cms_adm_parceiro.php');
    }else{
    ?>
    <script>
        alert("Usuário ou Senha incorretos!!!");
    </script>
    <?php
        }

    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../view/css/normalize.css">
    <link rel="stylesheet" href="../view/css/parceiro/cms_login_parceiro.css">
    <link rel="stylesheet" href="../view/css/padroes.css">
  </head>
  <body>
    <div class="imagem_fundo_gp fixed">
      <form name="frmlparceiro" method="post" action="">
        <div class="caixa_login_gp">
          <div class="container_foto_perfil_gp">
            <div class="foto_perfil_gp">
              <i class="material-icons fs_100">account_circle</i>
            </div>
          </div>
          <div class="container_login_gp">

              <input type="text" name="txt_login" placeholder="Login">

          </div>

          <div class="container_senha_gp">

              <input type="password" name="txt_senha" placeholder="Senha">

          </div>
          <div class="container_botao_login_gp">
              <input type="submit" name="BtnOk" value="Entrar" id="bt">
          </div>
          <div class="container_esqueci_senha_gp link">
            <a href="../view/parceiro/cms_redefinir_senha_parceiro.php" class="txt_branco">Esqueci minha senha.</a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
