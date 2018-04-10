<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/modal_redefinir_senha.css">
  </head>
  <body>
    <div class="container_titulo_redefinicao borda_preta_1">
      <div class="item_titulo_redefinicao preenche_t_10 centro_lr align_center titulo fs_25">
        PAC
      </div>
    </div>
    <form class="form_redefinicao" action="modal_redefinir_senha.php" method="post">
      <div class="container_cfp_senha float_left">
        <!-- INPUT CPF -->
        <div class="segura_input float_left fs_20 margem_t_50">
          <input class="input_text txt_preto" placeholder="CPF:" type="text" name="txt_cpf" value="">
        </div>

        <!-- INPUT SENHA -->
        <div class="segura_input float_left fs_20 margem_t_100">
          <input class="input_text txt_preto" placeholder="Nova Senha:" type="password" name="txt_senha" value="">
        </div>
      </div>
    </form>
    <div class="container_botao">
      <div class="item_botao_r centro_lr">
        <input class="input_submit_r fs_20" type="submit" name="btn_salvar" value="Salvar">
      </div>
    </div>
  </body>
</html>
