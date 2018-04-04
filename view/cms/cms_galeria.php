<?php
mysql_connect('localhost','root','bcd127');
mysql_select_db('db_auto_center');

$botao = "Salvar";

if(isset($_POST['Btn']))
{
  $btn = $_POST['Btn'];

  //Caminho da pasta onde as imagens serão armazenadas
  $upload_dir = "../pictures/galeria/";

  //Armazenando o nome e extensão do arquivoo que foi selecionado
  $nome_arq = basename($_FILES['flefoto']['name']);

  // if do botao salvar
  if($btn ==  'Salvar')
  {
      //Verifica tipo de extensão permitida para o upload do arquivo,
      //usamos o comando strstr() para localizar sequencia de caravteres
  if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif'))
      {

          //Guardamos o caminho e o nome da imagem que será inserido no BD.
          $upload_file = $upload_dir . $nome_arq;

          if(move_uploaded_file($_FILES['flefoto']['tmp_name'], $upload_file))
          {
              addslashes($sql = "insert into tbl_galeria (foto)
                  values ('".$upload_file."') ");

              mysql_query($sql);
              echo ($sql);
              // header('location:cms_galeria.php');

              echo("Arquivo movido com sucesso");
          }else{
              echo("O arquivo não pode ser movido para o servidor");
          }
      }
  }
}
 ?>


<?php
  // Importação do cabeçalho
  require_once('../component/cms_header.php');
?>
  <script type="text/javascript">

  </script>
  <!-- Conainer que segura tudo -->
    <div class="container_principal centro_lr">

      <?php
        // Importação do menu lateral
        require_once('../component/cms_menu_lateral.php');
      ?>
      <!-- Resto do cunteudo -->
      <div class="conteiner_conteudo float_left transparente  ">
        <!-- <form method="post" action=""> -->
          <!-- Card que segura as informacoes das imagens cadastradas pelo parceiro -->
          <div class="conteudo_galeria centro_lr ">
            <div class="titulo_galeria titulo fs_25 preenche_l_5 espacamento_letra_2">
              Motos
            </div>
            <div class="pesquisa_galeria">
              <input type="text" name="" value="" placeholder="Digite o nome do Parceiro">
              <input  id="bt_moto" type="button" name="btn_pesquisar" value="P">
            </div>
            <!-- Conteudo das imagens das motos -->
            <div id="conteudo_moto">
              <div class="segura_img ">
                <div class="tamanho_imagem">

                </div>
              </div>
              <div class="inf_img">

              </div>
              <div class="imagens">

              </div>
            </div>
          </div>

          <div class="conteudo_galeria centro_lr ">
            <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
              Serviços
            </div>
            <div class="pesquisa_galeria">
              <input type="text" name="" value="" placeholder="Digite o nome do Parceiro">
              <input  id="bt_servico" type="button" name="btn_pesquisar" value="P">
            </div>
            <div id="conteudo_servico">
              <div class="segura_img ">
                <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
              </div>
              <div class="segura_botoes">
                <div class="segura_icone">
                  <div class="icone">
                     <!-- <i class="material-icons">visibility</i> -->
                     <i class="material-icons">visibility_off</i>
                   </div>
                  <div class="inf_icone conteudo">


                  </div>
                </div>
                <div class="segura_icone">
                  <div class="icone">
                    <i class="material-icons">delete</i>
                  </div>
                  <div class="inf_icone conteudo">

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

          <div class="conteudo_galeria centro_lr ">
            <div class="titulo_galeria titulo fs_25 preenche_l_5 espacamento_letra_2">
              Carro
            </div>
            <div class="pesquisa_galeria">
              <input type="text" name="" value="" placeholder="Digite o nome do Parceiro">
              <input  id="bt_carro" type="button" name="btn_pesquisar" value="P">
            </div>
            <div id="conteudo_carro">
              <div class="segura_img ">
                <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
              </div>
              <div class="segura_botoes">
                <div class="segura_icone">
                  <div class="icone">
                     <!-- <i class="material-icons">visibility</i> -->
                     <i class="material-icons">visibility_off</i>
                   </div>
                  <div class="inf_icone conteudo">


                  </div>
                </div>
                <div class="segura_icone">
                  <div class="icone">
                    <i class="material-icons">delete</i>
                  </div>
                  <div class="inf_icone conteudo">

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

          <div class="conteudo_galeria centro_lr ">
            <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
              Serviços
            </div>
            <div class="pesquisa_galeria">
              <input type="text" name="" value="" placeholder="Digite o nome do Parceiro">
              <input  id="bt_produto" type="submit" name="btn_pesquisar" value="P">
            </div>
            <div id="conteudo_produto">
              <div class="segura_img ">
                <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
              </div>
              <div class="segura_botoes">
                <div class="segura_icone">
                  <div class="icone">
                     <!-- <i class="material-icons">visibility</i> -->
                     <i class="material-icons">visibility_off</i>
                   </div>
                  <div class="inf_icone conteudo">


                  </div>
                </div>
                <div class="segura_icone">
                  <div class="icone">
                    <i class="material-icons">delete</i>
                  </div>
                  <div class="inf_icone conteudo">

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

        <!-- </form> -->
      </div>
    </div>
