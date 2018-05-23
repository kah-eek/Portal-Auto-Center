


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/modal_login_rede_social.css">
  </head>
  <body>
    <div class="container_titulo_login borda_preta_1">
      <div class="item_titulo_login preenche_t_10 centro_lr align_center titulo fs_25">
        PAC
      </div>
    </div>
    <form class="form_login" action="modal_rede_social.php" method="post">
      <div class="container_usuario_senha float_left">
        <!-- INPUT USER -->
        <div class="segura_input float_left fs_20 margem_t_50">
          <input class="input_text txt_preto" placeholder="Usuário:" type="text" name="txt_use" value="">
        </div>

        <!-- INPUT SENHA -->
        <div class="segura_input float_left fs_20 margem_t_100">
          <input class="input_text txt_preto" placeholder="Senha:" type="password" name="txt_senha" value="">
        </div>
      </div>
    </form>
    <div class="container_botao">
      <div class="item_botao_l centro_lr">
        <input id="redeSocial" class="input_submit_l fs_20" type="submit" name="btn_login" value="Login">
      </div>
    </div>
    <div class="container_link">
      <div class="item_link_login centro_lr margem_t_10">
        <a class="link_login centro_lr fs_16" id="redefinirSenha" href="#">Esqueci minha Senha</a>
      </div>
    </div>
    <script>
      $('#redefinirSenha').click(function(){
        modalRedefinirSenha();
      })
    </script>

    <script>
      $('#redeSocial').click(function(){
        modalRedeSocial();
      })
    </script>
  </body>
</html>
