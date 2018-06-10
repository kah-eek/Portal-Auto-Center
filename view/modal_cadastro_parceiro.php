<?php
session_start();

require_once("moduloPerfil.php");
require_once("../controller/Imagem_class.php");
require_once("../database/conect.php");
Conexao_db();

$botao="Salvar";
$imagem="";

if(isset($_POST["btnSalvar"]))
{

  // DADOS PARCEIRO
  // $imagem=Upload($_FILES["imagem"]);
  $nomeFantasia=$_POST["txtNomeFantasia"];
  $razao=$_POST["txtRazao"];
  $cnpj=$_POST["txtCnpj"];
  $socorrista=$_POST["chkSocorrista"];
  $email=$_POST["txtEmail"];
  $telefone=$_POST["txtTelefone"];
  $celular=$_POST["txtCelular"];
  $plano=$_POST["slcPlano"];
  // ************************************

  // DADOS ENDEREÇO
  $logradouro=$_POST["txtLogradouro"];
  $numero=$_POST["txtNumero"];
  $cidade=$_POST["txtCidade"];
  $estado=$_POST["slcEstado"];
  $cep=$_POST["txtCep"];
  $bairro=$_POST["txtBairro"];
  // $nome=$_POST["txtNome"];
  $complemento=$_POST["txtComplemento"];
  // *************************************

  // DADOS USUARIO
  $usuario=$_POST["txtUsuario"];
  $senha=$_POST["txtSenha"];



    // SALVA USUARIO
    if($_POST["btnSalvar"]=='Salvar'){
      $sql= "insert into tbl_usuario (usuario, senha, id_nivel_usuario, ativo, log) values ('".$usuario."','".$senha."','2','1', now());";

      mysql_query($sql);
      // echo ($sql);

      $sql2 = "SELECT LAST_INSERT_ID();";
        $resultado1 = mysql_query ($sql2);
          if ($rs=mysql_fetch_array($resultado1))
          {
            $id_usuario = $rs['LAST_INSERT_ID()'];
          }

      // **********************************************

      // SALVA ENDERECO
      $sql3 = "insert into tbl_endereco (logradouro, numero, cidade, id_estado, cep, bairro, complemento) values ('".$logradouro."','".$numero."','".$cidade."','$estado','".$cep."','".$bairro."','".$complemento."');";

      mysql_query($sql3);
      // echo ($sql3);

      $sql4 = "SELECT LAST_INSERT_ID();";
        $resultado2 = mysql_query ($sql4);
          if ($rs=mysql_fetch_array($resultado2))
          {
            $id_endereco=$rs['LAST_INSERT_ID()'];
          }
      // **************************************************

      // Instância um objeto imagem e o popula com a imagem vinda do form
      $imagem = new Imagem($_FILES['img_refresh_pic'], 'pictures/perfil/');

      $imagemPic = $imagem->salvarImagem($imagem);

      echo '<script>console.log("'.$imagemPic.'");</script>';

      $sql5 = "insert into tbl_parceiro (nome_fantasia, razao_social, cnpj, id_endereco, ativo, socorrista, email, telefone, foto_perfil, celular, log_parceiro, id_usuario, id_plano_contratacao) values
      ('".$nomeFantasia."','".$razao."','".$cnpj."','".$id_endereco."','1','".$socorrista."','".$email."','".$telefone."','".$imagemPic."','".$celular."',now(),'".$id_usuario."','".$plano."')";

      if(mysql_query($sql5))
      {
        echo '<script>alert("Parceiro cadastrado com sucesso!");</script>';
      }
      else
      {
        echo '<script>alert("Falha a tentar cadastrar o parceiro =(");</script>';
      }
      // echo ($sql5);

    }
      header('location:cliente_parceiro.php?page=cliente_parceiro');

  }
 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro Parceiro</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/modal_cadastro_parceiro.css">
    <link rel="stylesheet" href="css/padroes.css">
  </head>
  <body>
    <form class="form_cadastro_parceiro" action="modal_cadastro_parceiro.php" enctype="multipart/form-data" method="POST">
      <div class="Container_total">
        <label for="btn_imagem_parceiro">
          <div class="container_foto">
            <img src="pictures/adm_parceiro/blank-face.jpg" alt="">
            <input type="file" name="img_refresh_pic" id="btn_imagem_parceiro" value="<?php echo($imagem)?>" class="display_none">
          </div>
        </label>

        <div class="container-infs-cli">

          <label for="txtNomeFantasia" class="field-label">Nome Fantasia</label>
          <input id="txtNomeFantasia" required maxlength="19" class="android-input input-text" type="text" name="txtNomeFantasia">

          <label for="txtRazao" class="field-label">Razão social</label>
          <input id="txtRazao" required maxlength="19" class="android-input input-text" type="text" name="txtRazao">

          <label for="txtCnpj" class="field-label">CNPJ</label>
          <input id="txtCnpj" required maxlength="14" class="android-input input-text" type="text" name="txtCnpj">

          <!-- ENDEREÇO -->
          <label for="txtLogradouro" class="field-label">Rua</label>
          <input id="txtLogradouro" required maxlength="25" class="android-input input-text" type="text" name="txtLogradouro">

          <label for="txtNumero" class="field-label">Numero</label>
          <input id="txtNumero" required maxlength="5" class="android-input input-text" type="text" name="txtNumero">

          <label for="txtCidade" class="field-label">Cidade</label>
          <input id="txtCidade" required maxlength="20" class="android-input input-text" type="text" name="txtCidade">

          <select class="select-pac" name="slcEstado">
            <option value="" selected disabled> Estado</option>
            <?php
              $sql="select * from tbl_estado order by id_estado desc";
              $select=mysql_query($sql);
              while($rsConsulta= mysql_fetch_array($select)){
            ?>

              <option class="select" value="<?php echo($rsConsulta['id_estado']) ?>"><?php echo($rsConsulta['estado']) ?></option>>

             <?php
                }
              ?>
          </select>

          <label for="txtCep" class="field-label">Cep</label>
          <input id="txtCep" required maxlength="9" class="android-input input-text" type="text" name="txtCep">

          <label for="txtBairro" class="field-label">Bairro</label>
          <input id="txtBairro" required maxlength="9" class="android-input input-text" type="text" name="txtBairro">

          <label for="txtComplemento" class="field-label">Complemento</label>
          <input id="txtComplemento" required maxlength="10" class="android-input input-text" type="text" name="txtComplemento">
          <!-- ********************************** -->

          <div class="sex-cli">
                SOCORRISTA:
            <input class="margem_l_20" type="radio" name="chkSocorrista" value="1"> SIM
            <input class="margem_l_20" type="radio" name="chkSocorrista" value="2"> NÃO
          </div>

          <label for="txtEmail" class="field-label">Email</label>
          <input id="txtEmail" required maxlength="30" class="android-input input-text" type="text" name="txtEmail">

          <label for="txtTelefone" class="field-label">Telefone</label>
          <input id="txtTelefone" required maxlength="10" class="android-input input-text" type="text" name="txtTelefone">

          <label for="txtCelular" class="field-label">Celular</label>
          <input id="txtCelular" required maxlength="11" class="android-input input-text" type="text" name="txtCelular">

          <!-- Login -->
          <label for="txtUsuario" class="field-label">Usuário</label>
          <input id="txtUsuario" required maxlength="10" class="android-input input-text" type="text" name="txtUsuario">

          <label for="txtSenha" class="field-label">Senha</label>
          <input id="txtSenha" required maxlength="20" class="android-input input-text" type="text" name="txtSenha">
          <!-- ***************************************** -->

          <select class="select-pac" name="slcPlano">
              <option value="" selected disabled>Selecione seu plano</option>
              <option value="2">Medium</option>
              <option value="1">Premium</option>
          </select>

          <div class="input_text float_left">
            <input href="" class="input_submit11 margem_t_5 bg_verde_vivo titulo" type="submit" name="btnSalvar" value="<?php echo $botao;?>">
          </div>

        </div>
      </div>
    </form>
  </body>
</html>
