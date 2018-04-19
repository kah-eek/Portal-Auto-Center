<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/cms/cms_login_parceiro.css">
    <link rel="stylesheet" href="../../css/padroes.css">
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
            <input class="bg_preto" type="submit" name="btn_login" value="LOGIN" >
          </div>
          <div class="container_esqueci_senha_gp link">
            <a href="cms_redefinir_senha_parceiro.php" class="txt_branco">Esqueci minha senha.</a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
