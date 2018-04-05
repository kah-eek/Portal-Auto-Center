<?php
mysql_connect('localhost','root','bcd127');
mysql_select_db('db_auto_center');

// Importação do cabeçalho
require_once('../component/cms_header.php');
 ?>


  <!-- Conainer que segura tudo -->
    <div class="container_principal centro_lr">

      <?php
        // Importação do menu lateral
        require_once('../component/cms_menu_lateral.php');
      ?>
      <!-- Resto do cunteudo -->
      <div class="conteiner_conteudo float_left   ">
        <!-- <form method="post" action=""> -->
          <!-- Card que segura as informacoes das imagens cadastradas pelo parceiro -->
          <div class="conteudo_galeria centro_lr ">
            <!-- Tirulo do card -->
            <div class="titulo_galeria titulo fs_25 preenche_l_5 espacamento_letra_2">
              Motos
            </div>
            <div class="pesquisa_galeria">
              <input type="text" name="" value="" placeholder="Digite o nome do Parceiro">
              <input  id="bt_moto" type="submit" name="btn_pesquisar" value="P">
            </div>
            <!-- Conteudo das imagens das motos -->
            <div id="conteudo_moto ">
              <div class="segura_img ">
                <div class="tamanho_imagem sombra_preta_10">
                  <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                </div>
              </div>
              <div class="inf_img">
                <div class="parceiro">

                </div>
              </div>
              <div class="imagens">

              </div>
            </div>
          </div>



          <script>
            $('#bt_moto').click(function(){// aciona o evento do click
              $(this).show();// PESQUISAR
              $(this).hide();// PESQUISAR
              $('.titulo_item').css('height','700px','transition','4s');// ALtera o css do componentes
              $('.carros').css('height','700px','transition','4s');// Oculta
              $('.servicos').css('height','700px','transition','4s');// Servicos
            });

            $('#bt_carro ').click(function(){// aciona o evento do click
              $(this).show();// PESQUISAR
              $(this).hide();// PESQUISAR
              $('.titulo_item').css('height','700px','transition','4s');// ALtera o css do componentes
              $('.carros').css('height','700px','transition','4s');// Oculta
              $('.servicos').css('height','700px','transition','4s');// Servicos
            });
          </script>

        <!-- </form> -->
      </div>
    </div>
