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

        // $_SESSION['nomeUsuario'] = $rsUsuario['nome'];


        header('location:../view/cms/index.php');
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
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Portal Auto Center - CMS</title>
      <link rel="stylesheet" type="text/css" href="../view/css/normalize.css">
      <link rel="stylesheet" type="text/css" href="../view/css/padroes.css">
      <link rel="stylesheet" type="text/css" href="../view/css/cms/cms_login.css">
      <!-- <script src="../view/js/jquery.js"></script> -->
      <!-- <script src="../view/js/requestAPI/site.js"></script> -->
  </head>
  <body class="background_login">
    <div class="foto_fundo fixed">
        <!-- <img src="view/pictures/cms_login/img_login_cms.jpeg" alt=""> -->
      <form name="frmhome" method="post" action="">
        <div class="caixa_login">
          <div class="container_foto_perfil">
            <div class="foto_perfil">
              <i class="material-icons fs_100">account_circle</i>
            </div>
          </div>
          <div class="container_login">

              <input  type="text" name="txt_login" placeholder="Usuário">

          </div>

          <div class="container_senha">

              <input type="password" name="txt_senha" placeholder="Senha">

          </div>
          <div class="container_botao_login ">
            <input class="bg_preto" type="submit" name="BtnOk" value="LOGIN" >
          </div>
          <div class="container_esqueci_senha link">
              <a href="#" class="txt_branco">Esqueci minha senha.</a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
