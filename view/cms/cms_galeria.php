<?php

 ?>


<?php
  // Importação do cabeçalho
  require_once('../component/cms_header.php');
?>
    <!-- Conteiner que segura o conteudo -->
    <div class="container_principal centro_lr">

      <?php
        // Importação do menu lateral
        require_once('../component/cms_menu_lateral.php');
      ?>
      <!-- Container que segurar o resto do conteudo -->
      <div class="conteiner_conteudo float_left bg_branco">
        <!-- Referente as fotos da pag galeria relacionado com a coluna motos -->
<<<<<<< HEAD
        <div class="conteudo_galeria centro_lr sombra_preta_10">
          <!-- Titulo  -->
          <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
            Motos
          </div>
          <div class="segura_conteudo">
            <div class="segura_img sombra_preta_5">
              <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
              <input id="add_img" class="display_none add_img" type="file" name="btnImagem" value="">
            </div>
            <div class="segura_botoes">
              <div class="segura_icone">
                <div class="icone">
                  <i class="material-icons fs_50">add_circle_outline</i>
                </div>
                <div class="inf_icone conteudo">
                  <label for="add_img">add. new picture</label>
                </div>
              </div>
              <div class="segura_icone">
                <div class="icone_delete">
                  <i class="material-icons">remove_circle</i>
                </div>
                <div class="inf_icone conteudo">
                  delete picture
                </div>
              </div>
=======
        <div class="conteudo_galeria centro_lr">
          <form method="post">

            <!-- Titulo  -->
            <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
              Motos
>>>>>>> 980e2bfb87eaf838d522e1f290a82a37b25f65d9
            </div>
            <div class="segura_conteudo">
              <div class="segura_img">
                <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                <input id="add_img" class="display_none add_img" type="file" name="btnImagem">
              </div>
              <div class="segura_botoes">
                <div class="segura_icone">
                  <div class="icone">
                    <!-- <img src="../pictures/galeria/add.svg" alt="adicionar imagem"> TIRAR -->
                  </div>
                  <div class="inf_icone conteudo">
                    <label for="add_img">add. new picture</label>
                  </div>
                </div>
                <div class="segura_icone">
                  <div class="icone_delete">
                    <img src="../pictures/galeria/delete.svg" alt="deletar imagem">
                  </div>
                  <div class="inf_icone conteudo">
                    delete picture
                  </div>
                </div>
              </div>
              <div class="img_pags">
                <div class="titulo_img conteudo">
                  fotos
                </div>
                <div class="container_img">
                  <div class="img_galeria">
                    <!-- <img id="imagem" src="<?php// echo($imagem); ?>"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
<<<<<<< HEAD
        </div>

        <!-- Referente as fotos da pag galeria relacionado com a coluna serviços -->
        <div class="conteudo_galeria centro_lr sombra_preta_10">
          <!-- Titulo  -->
          <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
            serviços
          </div>
          <div class="segura_conteudo">
            <div class="segura_img sombra_preta_5">
              <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
              <input id="add_img2" class="display_none" type="file" name="" value="">
            </div>
            <div class="segura_botoes">
              <div class="segura_icone">
                <div class="icone">
                  <i class="material-icons fs_50">add_circle</i>
                </div>
                <div class="inf_icone conteudo">
                  <label for="add_img2">add. new picture</label>
                </div>
              </div>
              <div class="segura_icone">
                <div class="icone_delete">
                  <i class="material-icons">remove_circle</i>
                </div>
                <div class="inf_icone conteudo">
                  delete picture
                </div>
              </div>
            </div>
            <div class="img_pags">
              <div class="titulo_img conteudo">
                fotos
              </div>
              <div class="container_img">
                <div class="img_galeria">

                </div>
                <div class="img_galeria">
                  <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                </div>
                <div class="img_galeria">
                   teste">
=======
          <!-- Referente as fotos da pag galeria relacionado com a coluna serviços -->
          <div class="conteudo_galeria centro_lr">
            <!-- Titulo  -->
            <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
              serviços
            </div>
            <div class="segura_conteudo">
              <div class="segura_img">
                <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                <input id="add_img2" class="display_none" type="file" name="btnImagem" >
              </div>
              <div class="segura_botoes">
                <div class="segura_icone">
                  <div class="icone">
                    <!-- <img src="../pictures/galeria/add.svg" alt="adicionar imagem"> -->
                  </div>
                  <div class="inf_icone conteudo">
                    <label for="add_img2">add. new picture</label>
                  </div>
                </div>
                <div class="segura_icone">
                  <div class="icone_delete">
                    <img src="../pictures/galeria/delete.svg" alt="deletar imagem">
                  </div>
                  <div class="inf_icone conteudo">
                    delete picture
                  </div>
                </div>
              </div>
              <div class="img_pags">
                <div class="titulo_img conteudo">
                  fotos
                </div>
                <div class="container_img">
                  <div class="img_galeria">
                    <img src="../pictures/galeria/moto_um.jpg" alt="Moto teste">
                  </div>
                  <div class="img_galeria">
                    <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                  </div>
                  <div class="img_galeria">
                    <img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste">
                  </div>
>>>>>>> 980e2bfb87eaf838d522e1f290a82a37b25f65d9
                </div>
              </div>
            </div>
          </div>

<<<<<<< HEAD
        <!-- Referente as fotos da pag galeria relacionado com a coluna carros -->
        <div class="conteudo_galeria centro_lr sombra_preta_10">
          <!-- Titulo  -->
          <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
            Carros
          </div>
          <div class="segura_conteudo">
            <div class="segura_img">
              <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
              <input id="add_img3" class="display_none" type="file" name="" value="">
            </div>
            <div class="segura_botoes">
              <div class="segura_icone">
                <div class="icone">
                  <!-- <img src="../pictures/galeria/add.svg" alt="adicionar imagem"> -->
                </div>
                <div class="inf_icone conteudo">
                  <label for="add_img3">add. new picture</label>
                </div>
              </div>
              <div class="segura_icone">
                <div class="icone_delete">
                  <i class="material-icons">remove_circle</i>
                </div>
                <div class="inf_icone conteudo">
                  delete picture
                </div>
              </div>
=======
          <!-- Referente as fotos da pag galeria relacionado com a coluna carros -->
          <div class="conteudo_galeria centro_lr">
            <!-- Titulo  -->
            <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
              Carros
>>>>>>> 980e2bfb87eaf838d522e1f290a82a37b25f65d9
            </div>
            <div class="segura_conteudo">
              <div class="segura_img">
                <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                <input id="add_img3" class="display_none" type="file" name="btnImagem" >
              </div>
              <div class="segura_botoes">
                <div class="segura_icone">
                  <div class="icone">
                    <!-- <img src="../pictures/galeria/add.svg" alt="adicionar imagem"> -->
                  </div>
                  <div class="inf_icone conteudo">
                    <label for="add_img3">add. new picture</label>
                  </div>
                </div>
                <div class="segura_icone">
                  <div class="icone_delete">
                    <img src="../pictures/galeria/delete.svg" alt="deletar imagem">
                  </div>
                  <div class="inf_icone conteudo">
                    delete picture
                  </div>
                </div>
              </div>
              <div class="img_pags">
                <div class="titulo_img conteudo">
                  fotos
                </div>
                <div class="container_img">
                  <div class="img_galeria">
                    <img src="../pictures/galeria/moto_um.jpg" alt="Moto teste">
                  </div>
                  <div class="img_galeria">
                    <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                  </div>
                  <div class="img_galeria">
                    <img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste">
                  </div>
                </div>
              </div>
            </div>
          </div>

<<<<<<< HEAD
        <!-- Referente as fotos da pag galeria relacionado com a coluna Produtos -->
        <div class="conteudo_galeria centro_lr sombra_preta_10">
          <!-- Titulo  -->
          <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
            Produtos
          </div>
          <div class="segura_conteudo">
            <div class="segura_img">
              <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
              <input id="add_img4" class="display_none" type="file" name="" value="">
            </div>
            <div class="segura_botoes">
              <div class="segura_icone">
                <div class="icone">

                </div>
                <div class="inf_icone conteudo">
                  <label for="add_img4">add. new picture</label>
                </div>
              </div>
              <div class="segura_icone">
                <div class="icone_delete">
                  <i class="material-icons">remove_circle</i>
                </div>
                <div class="inf_icone conteudo">
                  delete picture
                </div>
              </div>
            </div>
            <div class="img_pags">
              <div class="titulo_img conteudo">
                fotos
              </div>
              <div class="container_img">
                <div class="img_galeria">
                  <img src="../pictures/galeria/moto_um.jpg" alt="Moto teste">
                </div>
                <div class="img_galeria">
                  <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                </div>
                <div class="img_galeria">
                  <img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste">
=======
          <!-- Referente as fotos da pag galeria relacionado com a coluna Produtos -->
          <div class="conteudo_galeria centro_lr">
            <!-- Titulo  -->
            <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
              Produtos
            </div>
            <div class="segura_conteudo">
              <div class="segura_img">
                <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                <input id="add_img4" class="display_none" type="file" name="btnImagem" >
              </div>
              <div class="segura_botoes">
                <div class="segura_icone">
                  <div class="icone">
                    <!-- <img src="../pictures/galeria/add.svg" alt="adicionar imagem"> -->
                  </div>
                  <div class="inf_icone conteudo">
                    <label for="add_img4">add. new picture</label>
                  </div>
                </div>
                <div class="segura_icone">
                  <div class="icone_delete">
                    <img src="../pictures/galeria/delete.svg" alt="deletar imagem">
                  </div>
                  <div class="inf_icone conteudo">
                    delete picture
                  </div>
                </div>
              </div>
              <div class="img_pags">
                <div class="titulo_img conteudo">
                  fotos
                </div>
                <div class="container_img">
                  <div class="img_galeria">
                    <img src="../pictures/galeria/moto_um.jpg" alt="Moto teste">
                  </div>
                  <div class="img_galeria">
                    <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                  </div>
                  <div class="img_galeria">
                    <img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste">
                  </div>
>>>>>>> 980e2bfb87eaf838d522e1f290a82a37b25f65d9
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script>
      $('.add_img').on('change',function(){
        $.ajax({
          type: 'POST',
          url: '../../model/cms_galeria_class.php',
          async: true,
          success: function(dados){
            console.log(dados);
          }
        });
      });
    </script>
