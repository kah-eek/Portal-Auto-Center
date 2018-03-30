
<?php
  mysql_connect('10.107.144.10','root','bcd127');
  mysql_select_db('db_auto_center');

  if(isset($_POST["btn_login"]))
  {
      $usuario = $_POST['txt_login'];
      $senha = $_POST['txt_senha'];

      addslashes($sql = "SELECT * FROM tbl_usuario WHERE usuario = '".$usuario."' AND senha = '".$senha."'");

      // echo ($sql);

      $result = mysql_query($sql);

      //if(mysql_num_rows($result) >0){
      if ($rsUsuario=mysql_fetch_array($result)){

          // $_SESSION['nomeUsuario'] = $rsUsuario['nome'];

           header('location:../cliente_parceiro.php');
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
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" type="text/css" href="../css/cms/cms_login.css">
      <link rel="stylesheet" type="text/css" href="../css/padroes.css">
      <link rel="stylesheet" type="text/css" href="../css/cms/cms_pagina.css">
  </head>
  <body class="background_login">
    <div class="foto_fundo">
        <img src="../pictures/cms_login/img_login_cms" alt="">
      <form name="frmhome" method="post" action="">
        <div class="caixa_login">
          <div class="container_foto_perfil">
            <div class="foto_perfil">
              <i class="material-icons fs_100">account_circle</i>
            </div>
          </div>
          <div class="container_login">

              <input type="text" name="txt_login" placeholder="Login">

          </div>

          <div class="container_senha">

              <input type="password" name="txt_senha" placeholder="Senha">

          </div>
          <div class="container_botao_login ">
            <input class="bg_preto" type="submit" name="btn_login" value="LOGIN" >
          </div>
          <div class="container_esqueci_senha link">
              <a href="#" class="txt_branco">Esqueci minha senha.</a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
