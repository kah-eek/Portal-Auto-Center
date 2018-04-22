<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Portal Auto Center - CMS</title>
      <link rel="stylesheet" type="text/css" href="../view/css/normalize.css">
      <link rel="stylesheet" type="text/css" href="../view/css/padroes.css">
      <link rel="stylesheet" type="text/css" href="../view/css/cms/cms_login.css">
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

              <input type="text" name="txt_login" placeholder="Usuário">

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
