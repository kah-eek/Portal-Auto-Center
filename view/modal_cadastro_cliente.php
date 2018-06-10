<?php
require_once("moduloPerfil.php");
require_once("../controller/Imagem_class.php");
require_once("../database/conect.php");
Conexao_db();

require_once("moduloPerfil.php");

$id_cliente="";
$id_endereco=null;
$id_estado="";
$id_nivel_usuario="";

$nome="";
$DtNasc="";
$cpf="";
$email="";
$celular="";
$telefone="";
$sexo="";
// ENDEREÇO
$rua="";
$numero="";
$cidade="";
$cep="";
$bairro="";
$complemento="";
// LOGIN
$id_usuario="";
$usuario="";
$senha="";

$botao="Salvar";


  if(isset($_POST["btnSalvar"]))
  {
    //RESGATA OS DADOS FORNECIDOS PELO CLIENTE.
    //USANDO O MÉTODO POST, CONFORME ESCOLHIDO NO FORM.

    // DADOS DE PESSOA
    // 1;
    $nome=$_POST["txtNome"];
    $DtNasc=$_POST["dtNasc"];
    $cpf=$_POST["txtCpf"];
    $email=$_POST["txtEmail"];
    $celular=$_POST["txtCelular"];
    $telefone=$_POST["txtTelefone"];
    $sexo=$_POST["chbSexo"];
    // $imagem=Upload($_FILES["img_refresh_pic"]);

    // ENDEREÇO
    // $id_endereco=$_POST["id_endereco"];
    $rua=$_POST["txtRua"];
    $numero=$_POST["txtNumero"];
    $cidade=$_POST["txtCidade"];
    $id_estado=$_POST["slcEstado"];
    $cep=$_POST["txtCep"];
    $bairro=$_POST["txtBairro"];
    $complemento=$_POST["txtComplemento"];

    // LOGIN
    $usuario=$_POST["txtUsuario"];
    $senha=$_POST["txtSenha"];
    // $id_nivel_usuario=$_POST["slcNivel"];

    if($_POST["btnSalvar"]=='Salvar'){
        //MONTA O SCRIPT PARA ENVIAR PARA O BD
      $sql = "insert into tbl_usuario (usuario, senha, id_nivel_usuario, ativo, log) values ('".$usuario."','".$senha."','3','1', now());";

      mysql_query($sql);

      $sql2 = "SELECT LAST_INSERT_ID();";
        $resultado1 = mysql_query ($sql2);
          if ($rs=mysql_fetch_array($resultado1))
          {
            $id_usuario = $rs['LAST_INSERT_ID()'];
          }


      $sql3 = "insert into tbl_endereco (logradouro, numero, cidade, id_estado, cep, bairro, complemento) values ('".$rua."','".$numero."','".$cidade."','".$id_estado."','".$cep."','".$bairro."','".$complemento."');";

      mysql_query($sql3);
      // echo ($sql3);

      $sql4 = "select id_endereco from tbl_endereco order by id_endereco desc limit 1;";
        $resultado2 = mysql_query ($sql4);
          if ($rs=mysql_fetch_array($resultado2))
          {
            $id_endereco=$rs['id_endereco'];
          }

      // Instância um objeto imagem e o popula com a imagem vinda do form
      $imagem = new Imagem($_FILES['img_refresh_pic'], '../view/pictures/perfil/');

      $imagemPic = $imagem->salvarImagem($imagem);

      echo '<script>console.log("'.$imagemPic.'");</script>';

      $sql5 = "insert into tbl_cliente (nome, dtNasc, cpf, email, celular, id_endereco, sexo, telefone, id_usuario, foto_perfil) values ('".$nome."','".$DtNasc."','".$cpf."','".$email."','".$celular."','".$id_endereco."','".$sexo."','".$telefone."','".$id_usuario."','".$imagemPic."');";

      // echo $sql5;

      if(mysql_query($sql5))
      {
        echo '<script>alert("Cliente cadastrado com sucesso!");</script>';
      }
      else
      {
        echo '<script>alert("Falha a tentar cadastrar o cliente =(");</script>';
      }


      }

      //EXECUTA O SCRIPT NO BD
      // mysql_qu?ery($sql);
      //
      //
      header('location:cliente_parceiro.php?page=cliente_parceiro');

      // echo($sql);
      // echo($sql2);
      // echo($sql3);
      // echo($sql4);

  }

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/padroes.css">
    <link rel="stylesheet" href="css/modal_cadastro_cliente.css">
  </head>
  <body>
    <div class="container_principal_mc_cp">
      <!-- FORM -->
      <form class="form_cadastro_cliente" id="frmCadCli" action="modal_cadastro_cliente.php" enctype="multipart/form-data" method="POST">
        <label for="btn_imagem_parceiro">
          <div class="container_foto">
            <img src="pictures/adm_parceiro/blank-face.jpg" alt="">
            <input type="file" name="img_refresh_pic" id="btn_imagem_parceiro" value="<?php echo($imagem)?>" class="display_none">
          </div>
        </label>

        <div class="container-infs-cli">

          <label for="txtNome" class="field-label">Nome</label>
          <input id="txtNome" required maxlength="19" class="android-input input-text" type="text" name="txtNome">

          <!-- TITULO DATA -->
          <label for="dtNasc" class="field-label">Data de Nascimento</label>
          <input id="dtNasc" required class="android-input input-text" type="date" name="dtNasc">

          <!-- INPUT CPF -->
          <label for="txtCpf" class="field-label">CPF</label>
          <input id="txtCpf" required class="android-input input-text" type="text" name="txtCpf">

          <!-- INPUT EMAIL -->
          <label for="txtEmail" class="field-label">E-mail</label>
          <input id="txtEmail" required class="android-input input-text" type="email" name="txtEmail">

          <!-- INPUT CELULAR -->
          <label for="txtCelular" class="field-label">Celular</label>
          <input id="txtCelular" required class="android-input input-text" type="text" name="txtCelular">

          <!-- INPUT TELEFONE -->
          <label for="txtTelefone" class="field-label">Telefone</label>
          <input id="txtTelefone" required class="android-input input-text" type="text" name="txtTelefone">

          <!-- INPUT RADIO -->
          <div class="sex-cli">
            <input class="margem_l_20" type="radio" name="chbSexo" value="M"> Masculino
            <input class="margem_l_20" type="radio" name="chbSexo" value="F"> Feminino
          </div>
          <!-- <div class="divisor_c margem_t_5 float_left">

          </div> -->

          <div class="divisor"></div>
          <!-- TITULO ENDEREÇO -->
          <!-- <div class="titulo_form">
            <div class="item_titulo_form titulo float_left margem_t_10">
              Endereço
            </div>
          </div> -->

          <!-- INPUT RUA -->
          <label for="txtRua" class="field-label">Rua</label>
          <input id="txtRua" required class="android-input input-text" type="text" name="txtRua">

          <!-- INPUT NUMERO -->
          <label for="txtNumero" class="field-label">Número</label>
          <input id="txtNumero" required class="android-input input-text" type="text" name="txtNumero">

          <!-- INPUT CIDADE -->
          <label for="txtCidade" class="field-label">Cidade</label>
          <input id="txtCidade" required class="android-input input-text" type="text" name="txtCidade">

          <!-- SELECT ESTADO -->
          <select class="select-pac" name="slcEstado">
            <option value="" selected disabled> Estado</option>
            <?php
              $sql="select * from tbl_estado order by id_estado desc";
              $select=mysql_query($sql);
              while($rsConsulta= mysql_fetch_array($select)){
            ?>

              <option value="<?php echo($rsConsulta['id_estado']) ?>"><?php echo($rsConsulta['estado']) ?></option>>

             <?php
                }
              ?>
          </select>

          <!-- INPUT CEP -->
          <label for="txtCep" class="field-label">CEP</label>
          <input id="txtCep" required class="android-input input-text" type="text" name="txtCep">

          <!-- INPUT BAIRRO -->
          <label for="txtBairro" class="field-label">Bairro</label>
          <input id="txtBairro" required class="android-input input-text" type="text" name="txtBairro">

          <!-- INPUT COMPLEMENTO -->
          <label for="txtComplemento" class="field-label">Complemento</label>
          <input id="txtComplemento" required class="android-input input-text" type="text" name="txtComplemento">

          <!-- TITULO LOGIN -->
          <!-- <div class="titulo_form">
            <div class="item_titulo_form titulo margem_t_20 float_left">
              Login
            </div>
          </div> -->

          <!-- INPUT USER -->
          <label for="txtUsuario" class="field-label">Usuário</label>
          <input id="txtUsuario" required class="android-input input-text" type="text" name="txtUsuario">

          <!-- INPUT SENHA -->
          <label for="txtSenha" class="field-label">Senha</label>
          <input id="txtSenha" required class="android-input input-text" type="password" name="txtSenha">

          <div class="input_text float_left">
            <input href="" class="input_submit11 margem_t_5 bg_verde_vivo titulo" type="submit" name="btnSalvar" value="<?php echo $botao;?>">
          </div>
        </div>
      </form>
    </div>

    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/pac_framework.js"></script>

    <script>

       // Mask - expiretion
      $('#dtNasc').keydown(function(e){

        var txt = $(this).val();
        var key = e.keyCode;

        if(txt.length == 2 || txt.length == 5 && key != 8)
        {
          $('#dtNasc').val($('#dtNasc').val()+'/');
        }
      });

      // $(document).on('change','#btn_imagem_parceiro',function(){

      //   console.log('selected');

      //   $.ajax({
      //     tye:'POST',
      //     url:'../assets/refreshPic.php?path=../view/pictures/perfil/',
      //     data: new FormData($('#frmCadCli')[0]),
      //     processData:false,
      //     chache:false,
      //     success:function(resp){
      //       console.log(resp)
      //     }
      //   });

      // });


    </script>

  </body>
</html>
