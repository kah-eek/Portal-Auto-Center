<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Portal Auto Center - CMS</title>
      <link rel="stylesheet" type="text/css" href="../view/css/normalize.css">
      <link rel="stylesheet" type="text/css" href="../view/css/padroes.css">
      <link rel="stylesheet" type="text/css" href="../view/css/cms/cms_login.css">
      <script src="../view/js/jquery.js"></script>
      <script src="../view/js/requestAPI/site.js"></script>
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

              <input id="txt_use" type="text" name="txt_use" placeholder="Usuário">

          </div>

          <div class="container_senha">

              <input id="txt_senha" type="password" name="txt_senha" placeholder="Senha">

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

    <script>
      $('form[name="frmhome"]').submit(function(e){

        // Verifica se o usuário existe no DB
        verificarAutenticacao(e,
          function(autenticacao){ // Callback de sucesso

            // Verifica se o usuário encontra-se autenticado
            if (autenticacao.status) { // Usuário autenticado com sucesso

              // Armazena o tipo de nível do usuário - Parceiro, cliente, adm, etc.
              var nivel = autenticacao.nivel.nivel;

              if (nivel.toLowerCase() == 'administrador')
              {
                location.replace('../view/cms/index.php');
              }
              else
              {
                  alert("Acesso negado!");
              }

            }
            else // Usuário ao tentar autenticar o usuário
            {
                alert(autenticacao.mensagem);
            }

          },
          function(){ // Callback de falha
            console.error("Falha ao tentar utilizar do recurso de autenticação");
          }
        )

      });
    </script>

  </body>



</html>
