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
        <div class="input_text">
          <input class="input_text1 " type="text" name="txtNomeFantasia" value="" placeholder="NOME FANTASIA">
        </div>
        <div class="input_text">
          <input class="input_text1" type="text" name="txtRazao" value="" placeholder="RAZÃO SOCIAL">
        </div>
        <div class="input_text">
          <input class="input_text1" type="text" name="txtCnpj" value="" placeholder="CNPJ">
        </div>
        <!-- ENDERECO -->
        <div class="input_text">
          <input class="input_text1" type="text" name="txtLogradouro" value="" placeholder="RUA">
        </div>
        <div class="input_text">
          <input class="input_text1" type="text" name="txtNumero" value="" placeholder="NUMERO">
        </div>
        <div class="input_text">
          <input class="input_text1" type="text" name="txtCidade" value="" placeholder="CIDADE">
        </div>
        <div class="input_text">
          <select class="input_combo" name="slcEstado">
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
        </div>
        <div class="input_text">
          <input class="input_text1" type="text" name="txtCep" value="" placeholder="CEP">
        </div>
        <div class="input_text">
          <input class="input_text1" type="text" name="txtBairro" value="" placeholder="BAIRRO">
        </div>
        <div class="input_text">
          <input class="input_text1" type="text" name="txtComplemento" value="" placeholder="COMPLEMENTO">
        </div>
        <!-- ********************************** -->
        <div class="input_text titulo align_center margem_t_20 fs_15">
          Socorrista:<br><br>
            Sim<input class="radio" type="radio" name="chkSocorrista" value="1" placeholder="SOCORRISTA">
            Não<input class="radio" type="radio" name="chkSocorrista" value="2" placeholder="SOCORRISTA">
        </div>
        <div class="input_text">
          <input class="input_text1" type="text" name="txtEmail" value="" placeholder="EMAIL">
        </div>
        <div class="input_text">
          <input class="input_text1" type="text" name="txtTelefone" value="" placeholder="TELEFONE">
        </div>
        <div class="input_text">
          <input class="input_text1" type="text" name="txtCelular" value="" placeholder="CELULAR">
        </div>
        <!-- Usuario -->
        <div class="input_text">
          <input class="input_text1" type="text" name="txtUsuario" value="" placeholder="USUARIO">
        </div>
        <div class="input_text">
          <input class="input_text1" type="password" name="txtSenha" value="" placeholder="SENHA">
        </div>
        <!-- ***************************************** -->
        <div class="input_text">
          <select class="input_combo" name="slcPlano">
            <option value="">Selecione seu plano</option>
            <option value="2">Medium</option>
            <option value="1">Premium</option>
          </select>
        </div>
        <div class="input_text">
          <input class="input_submit1 bg_verde_vivo titulo margem_t_5"  type="submit" name="btnSalvar" value="<?php echo $botao;?>">
        </div>
      </div>
    </form>
  </body>
</html>
