<?php
/**
* VERFIFICA SE A VARIÁVEL $dados_cadastro EXISTE. OBS.:ESSA VARIÁVEL FOI CRIADA NA CONTROLLER:Parceiro_class.
*/

require_once("modulo.php");

session_start();

$conexao=mysql_connect('localhost', 'root', 'bcd127');

mysql_select_db('db_auto_center');

    //CRIANDO AS VARIÁVEIS PADRÕES LOCAIS.
    $nome_fantasia = "";
    $razao_social = "";
    $cnpj = "";
    $id_endereco = "";
    $socorrista = "";
    $email = "";
    $telefone = "";
    $foto_perfil = "";
    $celular = "";
    $id_usuario = "";
    $id_plano_contratacao = "";
    $cbxAtivo="";
    $btnSalvar="Salvar";
    $id_nivel_usuario="";
    $id_estado="";

###########################################################################################################################
if(isset($_POST["btn_salvar"]))
{
  //Dados do Parceiro;
  $nome_fantasia=$_POST["txt_nome"];
  $razao_social=$_POST["txt_razao"];
  $cnpj=$_POST["txt_cnpj"];
  $email=$_POST["txt_email"];
  $celular=$_POST["txt_celular"];
  $telefone=$_POST["txt_telefone"];
  $foto_perfil=Upload($_FILES["imagem"]);
  // $foto_perfil=$_POST['imagem'];
  $socorrista=$_POST['sltSocorro'];

  //Plano Contratação;
  $id_plano_contratacao=$_POST["sltPlano"];

  //Endereço;
  // $id_endereco=$_POST["id_endereco"];
  $cep=$_POST["txt_cep"];
  $rua=$_POST["txt_rua"];
  $numero=$_POST["txt_numero"];
  $cidade=$_POST["txt_cidade"];
  $id_estado=$_POST["slcEstado"];
  $bairro=$_POST["txt_bairro"];
  $complemento=$_POST["txt_complemento"];
  $logradouro=$_POST["txt_logradouro"];

  //Login;
  $usuario=$_POST["txt_usuario"];
  $senha=$_POST["txt_senha"];
  // $id_nivel_usuario["slcNivel"];

  if($_POST["btn_salvar"]=='Salvar'){
    // $sql="INSERT INTO tbl_nivel_usuario (nivel)values('".$id_nivel_usuario."');";
    //
    // mysql_query($sql);
    //
    // $sql2 = "SELECT LAST_INSERT_ID();";
    //   $resultado1 = mysql_query ($sql2);
    //     if ($rs=mysql_fetch_array($resultado1))
    //     {
    //       $id_nivel_usuario = $rs['LAST_INSERT_ID()'];
    //     }

    $sql3 = "insert into tbl_usuario (usuario, senha,ativo, id_nivel_usuario) values ('".$usuario."','".$senha."','1', '".$id_nivel_usuario."');";
    mysql_query($sql3);

    $sql1="SELECT LAST_INSERT_ID();";
      $resultado2=mysql_query($sql1);
      if($rs=mysql_fetch_array($resultado2))
        {
          $id_usuario=$rs['LAST_INSERT_ID()'];
        }

    $sql4="INSERT INTO tbl_estado(estado)values('".$id_estado."');";
    mysql_query($sql4);

    $sql5="SELECT LAST_INSERT_ID();";
      $resultado3=mysql_query($sql5);
      if($rs=mysql_fetch_array($resultado3))
      {
        $id_estado=$rs['LAST_INSERT_ID()'];
      }

    $sql6="INSERT INTO tbl_endereco(cep, rua, numero, cidade, bairro, complemento, logradouro, id_estado)values
    ('".$cep."', '".$rua."', '".$numero."', '".$cidade."', '".$bairro."', '".$complemento."', '".$logradouro."', '".$id_estado."');";
    mysql_query($sql6);

    $sql7="SELECT LAST_INSERT_ID();";
      $resultado4=mysql_query($sql7);
      if($rs=mysql_fetch_array($resultado4))
      {
        $id_endereco=$rs['LAST_INSERT_ID()'];
      }

    $sql8="INSERT INTO tbl_plano_contratacao(plano)values('".$id_plano_contratacao."');";
    mysql_query($sql8);

    $sql9="SELECT LAST_INSERT_ID();";
      $resultado5=mysql_query($sql9);
      if($rs=mysql_fetch_array($resultado5))
      {
        $id_plano_contratacao=$rs['LAST_INSERT_ID()'];
      }

    $sql10="INSERT INTO tbl_parceiro(nome_fantasia,razao_social, cnpj, email, celular, telefone, socorrista, foto_perfil, id_plano_contratacao, id_endereco,
    id_usuario)
    VALUES('".$nome_fantasia."', '".$razao_social."', '".$cnpj."', '".$email."', '".$celular."', '".$telefone."', '".$socorrista."', '".$foto_perfil."', '".$id_plano_contratacao."',
    '".$id_endereco."', '".$id_usuario."');";



    // $sql3="INSERT INTO tbl_endereco(cep, rua, numero, cidade, id_estado, bairro, complemento,
    // logradouro)
    // VALUES('".$cep."', '".$rua."', '".$numero."', '".$id_estado."', '".$bairro."', '".$complemento."', '".$logradouro."');";
    //
    // mysql_query($sql3);
    //
    // $sql4="SELECT LAST_INSERT_ID();";
    //   $resultado2=mysql_query($sql4);
    //     if($rs=mysql_fetch_array($resultado2))
    //     {
    //       $id_endereco=$rs['LAST_INSERT_ID()'];
    //     }
    //
    // $sql4="INSERT INTO tbl_parceiro(nome_fantasia, razao_social, cnpj, email, celular, telefone, socorrista, id_plano_contratacao, id_endereco, id_usuario)
    // VALUES('".$nome_fantasia."', '".$razao_social."', '".$cnpj."', '".$email."', '".$celular."','".$telefone."', '".$socorrista."', '".$id_plano_contratacao."','".$id_endereco."', '".$id_usuario."');";
    //
    // mysql_query($sql4);
  }

  // // EXECUTA O SCRIPT NO BD
  // mysql_query($sql);


  // header('location:modal_cadastro_parceiro.php');

  // echo($sql);
  echo($sql3);
  echo($sql4);
  echo($sql6);
  echo($sql8);
  echo($sql10);


}

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/modal_cadastro_parceiro.css">
    <script src="js/util.js"></script>
  </head>
  <body>
  <form id="frmcadparceiro" name="frmcadparceiro" action="modal_cadastro_parceiro.php" method="POST" enctype="multipart/form-data">
    <div class="container_principal_m_cp">
      <div class="container_titulo_parceiro">
        <div class="item_titulo_parceiro align_center float_left titulo bg_vermelho preenche_3">
          Cadastro Parceiro
        </div>
        <div class="container_btn_sair_mp float_left negrito">
          <a class="btn_x fs_20 txt_preto" href="cliente_parceiro.php?page=cliente_parceiro">X</a>
        </div>
      </div>
      <div class="container_lado_esquerdo float_left bg_branco">
        <!-- IMAGEM -->


          <div class="container_img_parceiro margem_t_20">
             <input type="file" name="imagem" value="<?php echo($foto_perfil)?>" class="color">
          </div>


          <div class="item_contendo_inputs">
            <!-- INPUT NOME FANTASIA -->
            <div class="segura_input_p">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Nome Fantasia" type="text" name="txt_nome" value="<?php echo($nome_fantasia); ?>">
            </div>

            <!-- INPUT RAZÃO SOCIAL -->
            <div class="segura_input_p">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Razão Social" type="text" name="txt_razao" value="<?php echo($razao_social); ?>">
            </div>

            <!-- INPUT CNPJ -->
            <div class="segura_input_p  float_left">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Cnpj" type="text" name="txt_cnpj" value="<?php echo($cnpj); ?>">
            </div>

            <!-- INPUT EMAIL -->
            <div class="segura_input_p  float_left">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Email" type="text" name="txt_email" value="<?php echo($email); ?>">
            </div>

            <!-- INPUT CELULAR -->
            <div class="segura_input_p  float_left">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Celular" type="text" name="txt_celular" value="<?php echo($celular); ?>">
            </div>

            <!-- INPUT TELEFONE -->
            <div class="segura_input_p  float_left">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Telefone" type="text" name="txt_telefone" value="<?php echo($telefone); ?>">
            </div>

            <!-- TITULO ENDEREÇO -->
            <div class="titulo_form_p">
              <div class="item_titulo_form_p titulo margem_t_10 float_left">
                Endereço
              </div>
            </div>

            <!-- INPUT CEP -->
            <div class="segura_input_p float_left">
              <input id="txt_cep" class="input_text_p txt_preto margem_t_5" placeholder="Cep" type="text" name="txt_cep" value="">
            </div>

            <!-- INPUT RUA -->
            <div class="segura_input_p float_left margem_t_5">
              <input id="txt_rua" class="input_text_p txt_preto margem_t_5" placeholder="Rua" type="text" name="txt_rua" value="">
            </div>

            <!-- INPUT NUMERO -->
            <div class="segura_input_p float_left">
              <input id="txt_numero" class="input_text_p txt_preto margem_t_5" placeholder="Número" type="text" name="txt_numero" value="">
            </div>

            <!-- INPUT CIDADE -->
            <div class="segura_input_p float_left">
              <input id="txt_cidade" class="input_text_p txt_preto margem_t_5" placeholder="Cidade" type="text" name="txt_cidade" value="">
            </div>

            <!-- COMBOBOX ESTADO -->
            <div class="segura_input_p float_left">
              <select name="slcEstado"  class="color">
                <?php
                if($id_estado== ""){
                    $id_estado = 0;
                    ?>
                     <option>Selecione</option>
                  <?php
                }else{
                    ?>
            <option value="<?php echo($id_estado); ?>">
                <?php echo($id_estado);?></option>
            <?php

                }
                $sql = "SELECT id_estado, estado as nome_estado FROM tbl_estado Where id_estado <> ".$id_estado;
                $select=mysql_query($sql);

               while($rsEstado = mysql_fetch_array($select)){
                   ?>

                <option value="<?php echo($rsEstado['id_estado']); ?>">
                <?php echo($rsEstado['nome_estado']); ?> </option>

            <?php
               }
            ?>
          </select>
              <!-- <input id="txt_estado" class="input_text_p txt_preto margem_t_5" placeholder="Estado" type="text" name="txt_estado" value=""> -->
            </div>

            <!-- INPUT BAIRRO -->
            <div class="segura_input_p float_left">
              <input id="txt_bairro" class="input_text_p txt_preto margem_t_5" placeholder="Bairro" type="text" name="txt_bairro" value="">
            </div>

            <!-- INPUT COMPLEMENTO -->
            <div class="segura_input_p float_left">
              <input id="txt_complemento" class="input_text_p txt_preto margem_t_5" placeholder="Complemento" type="text" name="txt_complemento" value="">
            </div>

            <!-- INPUT LOGRADOURO -->
            <div class="segura_input_p float_left">
              <input id="txt_logradouro" class="input_text_p txt_preto margem_t_5" placeholder="Logradouro" type="text" name="txt_logradouro" value="">
            </div>

            <!-- TITULO LOGIN -->
            <div class="titulo_form_p">
              <div class="item_titulo_form_p margem_t_10 titulo float_left">
                Login
              </div>
            </div>
            <!-- INPUT USER -->
            <div class="segura_input_p float_left margem_t_5">
              <input id="txt_use" class="input_text_p txt_preto margem_t_5" placeholder="Usuário" type="text" name="txt_usuario" value="">
            </div>

            <!-- INPUT SENHA -->
            <div class="segura_input_p float_left">
              <input id="txt_senha" class="input_text_p txt_preto margem_t_5" placeholder="Senha" type="password" name="txt_senha" value="">
            </div>
            <div class="segura_input_p float_left">

              <select name="slcNivel"  class="color">
                <?php
                if($id_nivel_usuario== ""){
                    $id_nivel_usuario = 0;
                    ?>
                     <option>Selecione</option>
                  <?php
                }else{
                    ?>
            <option value="<?php echo($id_nivel_usuario); ?>">
                <?php echo($id_nivel_usuario);?></option>
            <?php

                }
                $sql = "SELECT id_nivel_usuario, nivel as nome_nivel FROM tbl_nivel_usuario Where id_nivel_usuario <> ".$id_nivel_usuario;
                $select=mysql_query($sql);

               while($rsNivel = mysql_fetch_array($select)){
                   ?>

                <option value="<?php echo($rsNivel['id_nivel_usuario']); ?>">
                <?php echo($rsNivel['nome_nivel']); ?> </option>

            <?php
               }
            ?>
          </select>
            </div>
          </div>

      </div>
      <div class="segura_input_p float_left">

        <select required name="sltSocorro" class="color">
          <option value="1">Sim</option>
          <option value="0">Não</option>
        </select>
      </div>

      <!-- LADO DIREITO -->
      <div class="container_lado_direito float_left bg_branco">
        <div class="container_planos float_right">
          <!-- TITULO PLANOS -->
          <div class="titulo_planos margem_t_30">
            <div class="item_titulo_planos preenche_5 titulo">
              Meu Plano
            </div>
          </div>

          <!-- DIV SELECT -->
          <div class="container_select margem_t_10">
            <select name="sltPlano"  class="color">
              <?php
              if($id_plano_contratacao== ""){
                  $id_plano_contratacao = 0;
                  ?>
                   <option>Selecione</option>
                <?php
              }else{
                  ?>
          <option value="<?php echo($id_plano_contratacao); ?>">
              <?php echo($id_plano_contratacao);?></option>
          <?php

              }
              $sql = "SELECT id_plano_contratacao, plano as nome_plano FROM tbl_plano_contratacao Where id_plano_contratacao <> ".$id_plano_contratacao;
              $select=mysql_query($sql);

             while($rsPlano = mysql_fetch_array($select)){
                 ?>

              <option value="<?php echo($rsPlano['id_plano_contratacao']); ?>">
              <?php echo($rsPlano['nome_plano']); ?> </option>

          <?php
             }
          ?>
        </select>
          </div>

          <!-- DESCRICAO PLANOS -->
          <div class="container_desc_planos margem_t_30 titulo">
            <div class="item_desc_planos preenche_5">
              Descrição
            </div>
          </div>
          <!-- PLANO 1 -->
          <div class="segura_planos">
            <div class="container_desc_planos margem_t_10 titulo">
              <div class="item_desc_planos fs_25">
                Plano 1
              </div>
            </div>
            <!-- TEXTO -->
            <div class="container_texto_planos">
              <div class="item_texto_planos">
                <p class="justificado">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
              </div>
            </div>
            <div class="divisor float_left">

            </div>
            <!-- PLANO 2 -->
            <div class="container_desc_planos margem_t_20 titulo">
              <div class="item_desc_planos fs_25">
                Plano 2
              </div>
            </div>
            <!-- TEXTO -->
            <div class="container_texto_planos">
              <div class="item_texto_planos">
                <p class="justificado">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
              </div>
            </div>

            <div class="container_desc_planos margem_t_20 titulo">
              <div class="item_desc_planos fs_25">
                Plano 3
              </div>
            </div>
            <!-- TEXTO -->
            <div class="container_texto_planos">
              <div class="item_texto_planos">
                <p class="justificado">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="segura_bt_p float_left">
        <input class="input_submit margem_t_5 sombra_preta_b_15" type="submit" name="btn_salvar" value="<?php echo($btnSalvar); ?>">
      </div>
    </div>
  </form>
  </body>
</html>
