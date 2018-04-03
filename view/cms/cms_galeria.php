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
    <div class="container_principal centro_lr">

      <?php
        // Importação do menu lateral
        require_once('../component/cms_menu_lateral.php');
      ?>
      <div class="conteiner_conteudo float_left bg_branco">
        <div class="conteudo_galeria centro_lr">
          <form method="post" action="">
            <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
              Motos
             </div>
            <div class="segura_conteudo">
              <div class="segura_img">
                <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
              </div>
              <div class="segura_botoes">
                <div class="segura_icone">
                  <div class="icone">
                     <img src="../pictures/galeria/add.svg" alt="adicionar imagem">
                   </div>
                  <div class="inf_icone conteudo">
                    <!-- <label for="add_img">add. new picture</label> -->
                    <input name="flefoto" class="add_img" type="file" id="add_img">
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
              <input type="submit" name="Btn" value="<?php echo($botao)?>">
              <div class="img_pags">
                <div class="titulo_img conteudo">
                  fotos
                </div>
                <div class="container_img">
                  <?php
                      $sql= "SELECT * FROM tbl_galeria";
                      $select=mysql_query($sql);
                      while ($rsNA = mysql_fetch_array($select))
                      {
                        $img = $rsNA['foto'];
                        ?>
                  <div class="img_galeria">
                     <img id="imagem" src="<?php echo($img); ?>">
                   </div>
                   <?php
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
          <div class="conteudo_galeria centro_lr">
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
                     <img src="../pictures/galeria/add.svg" alt="adicionar imagem">
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
                </div>
              </div>
            </div>
          </div>
          <div class="conteudo_galeria centro_lr">
            <div class="titulo_galeria titulo fs_25 preenche_l_5 ">
              Carros
            </div>
            <div class="segura_conteudo">
              <div class="segura_img">
                <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste">
                <input id="add_img3" class="display_none" type="file" name="btnImagem" >
              </div>
              <div class="segura_botoes">
                <div class="segura_icone">
                  <div class="icone">
                     <img src="../pictures/galeria/add.svg" alt="adicionar imagem">
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
        <div class="conteudo_galeria centro_lr sombra_preta_10">
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
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
