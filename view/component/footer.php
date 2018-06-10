    <footer class="margem_t_80">
      <div class="container_f">
        <div class="segura_conteudo_f centro_lr">

          <!-- Area das redes sociais -->
          <div class="rede_social_f float_left">
            <div class="segura_rede preenche_t_20 centro_lr">
              <div class="tamanho_rede">
                <a target="_blank" href="https://www.facebook.com">
                  <img src="<?=$facebook_icon?>.svg" alt="link para rede social">
                </a>
              </div>
              <div class="tamanho_rede">
                <a target="_blank" href="https://www.instagram.com">
                  <img src="<?=$instagram_icon?>.svg" alt="link para rede social">
                </a>
              </div>
              <div class="tamanho_rede">
                <a target="_blank" href="https://www.twitter.com">
                  <img src="<?=$twtter_icon?>.svg" alt="link para rede social">
                </a>

              </div>
              <div class="tamanho_rede">
                <a target="_blank" href="https://www.youtube.com">
                  <img src="<?=$youtube_icon?>.svg" alt="link para rede social">
                </a>
              </div>
            </div>
          </div>
          <div class="mapa_site float_left">
            <div class="m_site align_center txt_branco conteudo">
              Mapa do Site
            </div>
            <div class="segura_mapa centro_lr">
              <div class="link_pags conteudo titulo">
                Home
              </div>
              <div class="link_pags conteudo titulo">
                Carros
              </div>
              <div class="link_pags conteudo titulo">
                Fórum
              </div>
              <div class="link_pags conteudo titulo">
                Galeria
              </div>
              <div class="link_pags conteudo titulo">
                Cliente/Parceiro
              </div>
              <div class="link_pags conteudo titulo">
                Contato
              </div>
              <div class="link_pags conteudo titulo">
                <a href="<?php echo isset($_GET['page']) == true ? 'sobre_empresa.php?page=sobre_empresa' : 'view/sobre_empresa.php?page=sobre_empresa' ?>">
                  Sobre Nós
                </a>
              </div>
            </div>
          </div>
          <!-- <div class="terceira_f align_center conteudo float_left">
            Sobre Nós
          </div> -->
          <div class="baixa_app float_right">
            <div class="icone_app float_left">
              <i class="material-icons">android</i>
            </div>
            <div class="texto_app float_right conteudo">
              Baixe nosso app.
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script>
      $(document).on('click','.btnComprar',function(){

        console.log('clicked');

        $.ajax({
          type:'POST',
          url:'view/modal_login_cliente.php',
          success:function(resp)
          { 
            $('.container_modal').fadeIn(500);
            $('.modal').html(resp);
          }
        });

      });


    </script>

  </body>
</html>
