<?php
require_once("../database/conect.php");
Conexao_db();

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
    $id_nivel_usuario=$_POST["slcNivel"];

    if($_POST["btnSalvar"]=='Salvar'){
        //MONTA O SCRIPT PARA ENVIAR PARA O BD
      $sql = "insert into tbl_usuario (usuario, senha, id_nivel_usuario, ativo, log) values ('".$usuario."','".$senha."','1','1', now());";

      mysql_query($sql);

      $sql2 = "SELECT LAST_INSERT_ID();";
        $resultado1 = mysql_query ($sql2);
          if ($rs=mysql_fetch_array($resultado1))
          {
            $id_usuario = $rs['LAST_INSERT_ID()'];
          }


      $sql3 = "insert into tbl_endereco (logradouro, numero, cidade, id_estado, cep, bairro, complemento) values ('".$rua."','".$numero."','".$cidade."','".$id_estado."','".$cep."','".$bairro."','".$complemento."');";

      mysql_query($sql3);

      $sql4 = "SELECT LAST_INSERT_ID();";
        $resultado2 = mysql_query ($sql4);
          if ($rs=mysql_fetch_array($resultado2))
          {
            $id_endereco=$rs['LAST_INSERT_ID()'];
          }

      $sql5 = "insert into tbl_cliente (nome, dtNasc, cpf, email, celular, id_endereco, sexo, telefone, id_usuario, foto_perfil) values ('".$nome."','".$DtNasc."','".$cpf."','".$email."','".$celular."','".$id_endereco."','".$sexo."','".$telefone."','".$id_usuario."','1');";

      mysql_query($sql5);


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
    <link rel="stylesheet" href="css/modal_cadastro_cliente.css">
  </head>
  <body>
    <div class="container_principal_mc_cp bg_branco">
      <!-- TITULO -->
      <!-- <div class="container_titulo">
        <div class="item_titulo float_left txt_preto titulo align_center">
          Cadastro Clientes
        </div>
        <div class="container_btn_sair float_right negrito">
          <a class="btn_x fs_20 txt_preto" href="cliente_parceiro.php?page=cliente_parceiro">X</a>
        </div>
      </div> -->
      <!-- IMAGENS -->
      <!-- <div class="container_imagens margem_t_10 centro_lr"> -->

        <!-- LABEL IMAGEM CLIENTE -->
        <!-- <label for="btn_img_cliente">
          <div class="item_imagens bg_branco float_left">

          </div>
        </label>
        <input type="file" class="display_none" id="btn_img_cliente" name="btn_img_cliente" value=""> -->

        <!-- LABEL IMAGEM VEICULO -->
        <!-- <label for="btn_img_veiculo">
          <div class="item_imagens bg_branco float_right">

          </div>
          <input class="display_none" id="btn_img_veiculo" type="file" name="btn_img_veiculo" value="">
        </label>
      </div> -->
      <!-- FORM -->
      <form class="form_cadastro_cliente margem_t_5 float_left" action="modal_cadastro_cliente.php" method="POST">
        <div class="container_infs">

          <!-- INPUT NOME -->
          <div class="segura_input">
            <input class="input_text txt_preto margem_t_5" placeholder="Nome" type="text" name="txtNome" value="">
          </div>

          <!-- TITULO DATA -->
          <div class="titulo_form">
            <div class="item_titulo_form titulo margem_t_10">
              Data de Nascimento
            </div>
          </div>

          <!-- INPUT CALENDÁRIO -->
          <div class="segura_input float_left margem_t_5">
            <input class="data_nasc margem_10" type="date" name="dtNasc" value="">
          </div>

          <!-- INPUT CPF -->
          <div class="segura_input float_left margem_t_5">
            <input class="input_text txt_preto margem_t_10" placeholder="Cpf" type="text" name="txtCpf" value="">
          </div>

          <!-- INPUT EMAIL -->
          <div class="segura_input float_left margem_t_5">
            <input class="input_text txt_preto margem_t_10" placeholder="Email Address" type="text" name="txtEmail" value="">
          </div>

          <!-- INPUT CELULAR -->
          <div class="segura_input float_left margem_t_5">
            <input class="input_text txt_preto margem_t_10" placeholder="Celular" type="text" name="txtCelular" value="">
          </div>

          <!-- INPUT TELEFONE -->
          <div class="segura_input float_left margem_t_5">
            <input class="input_text txt_preto margem_t_10" placeholder="Telefone" type="text" name="txtTelefone" value="">
          </div>

          <!-- INPUT RADIO -->
          <div class="segura_input margem_t_10 float_left">
            <input class="margem_l_20 margem_t_10 txt_preto" type="radio" name="chbSexo" value="M"> Masculino
            <input class="margem_l_20 margem_t_10 txt_preto" type="radio" name="chbSexo" value="F"> Feminino
          </div>
          <div class="divisor_c margem_t_5 float_left">

          </div>

          <!-- TITULO ENDEREÇO -->
          <div class="titulo_form">
            <div class="item_titulo_form titulo float_left margem_t_10">
              Endereço
            </div>
          </div>

          <!-- INPUT RUA -->
          <div class="segura_input float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Rua" type="text" name="txtRua" value="">
          </div>

          <!-- INPUT NUMERO -->
          <div class="segura_input float_left margem_t_5">
            <input class="input_text txt_preto margem_t_10" placeholder="Número" type="text" name="txtNumero" value="">
          </div>

          <!-- INPUT CIDADE -->
          <div class="segura_input float_left margem_t_5">
            <input class="input_text txt_preto margem_t_10" placeholder="Cidade" type="text" name="txtCidade" value="">
          </div>

          <!-- SELECT ESTADO -->
          <select class="select_opt margem_t_10 margem_l_30" name="slcEstado">
            <?php
              $sql="select * from tbl_estado order by id_estado desc";
              $select=mysql_query($sql);
              while($rsConsulta= mysql_fetch_array($select)){
            ?>

              <option class="select" value="slcEstado"><?php echo($rsConsulta['estado']) ?></option>>

             <?php
                }
              ?>
          </select>

          <!-- INPUT CEP -->
          <div class="segura_input float_left margem_t_5">
            <input class="input_text txt_preto margem_t_10" placeholder="Cep" type="text" name="txtCep" value="">
          </div>

          <!-- INPUT BAIRRO -->
          <div class="segura_input float_left margem_t_5">
            <input class="input_text txt_preto margem_t_10" placeholder="Bairro" type="text" name="txtBairro" value="">
          </div>

          <!-- INPUT COMPLEMENTO -->
          <div class="segura_input float_left margem_t_5">
            <input class="input_text txt_preto margem_t_10" placeholder="Complemento" type="text" name="txtComplemento" value="">
          </div>

          <!-- TITULO LOGIN -->
          <div class="titulo_form">
            <div class="item_titulo_form titulo margem_t_20 float_left">
              Login
            </div>
          </div>

          <!-- INPUT USER -->
          <div class="segura_input float_left margem_t_10">
            <input class="input_text txt_preto" placeholder="Usuário" type="text" name="txtUsuario" value="">
          </div>

          <!-- INPUT SENHA -->
          <div class="segura_input float_left margem_t_10">
            <input class="input_text txt_preto" placeholder="Senha" type="password" name="txtSenha" value="">
          </div>

          <select class="select_opt margem_l_30" name="slcNivel">
            <?php
              $sql="select * from tbl_nivel_usuario order by id_nivel_usuario desc";
              $select=mysql_query($sql);
              while($rsConsulta= mysql_fetch_array($select)){
            ?>

              <option class="select" name="slcNivel" value=""><?php echo($rsConsulta['nivel']) ?></option>>

             <?php
                }
              ?>
          </select>

          <div class="segura_bt float_left">
            <input href="" class="input_submit_cc margem_t_25 sombra_preta_b_15" type="submit" name="btnSalvar" value="<?php echo $botao;?>">
          </div>
        </div>
      </form>

      <!-- FORM CADASTRO DE VEICULO -->
      <!-- <form class="form_cadastro_veiculo float_left" action="modal_cadastro_cliente.php" method="post">
        <div class="segura_inputs_veic"> -->
          <!-- TITULO VEICULO -->
          <!-- <div class="titulo_form_veic margem_t_10 float_left">
            <div class="titulo_form">
              <div class="item_titulo_form fs_20 align_center titulo margem_t_10 float_left">
                Veículo
              </div>
            </div>
          </div> -->

          <!-- INPUT ANO DE FABRICACAO -->
          <!-- <div class="segura_input margem_t_20 float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Ano De Fabricação" type="text" name="txt_ano_fabri" value="">
          </div> -->

          <!-- INPUT PLACA -->
          <!-- <div class="segura_input margem_t_10 float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Placa" type="text" name="txt_placa" value="">
          </div> -->

          <!-- INPUT QUANTIDADE DE PORTAS -->
          <!-- <div class="segura_input margem_t_10 float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Qtd de Portas" type="text" name="txt_portas" value="">
          </div> -->

          <!-- INPUT KILOMETRAGEM -->
          <!-- <div class="segura_input margem_t_10 float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Kilometragem" type="text" name="txt_km" value="">
          </div> -->

          <!-- INPUT MODELO -->
          <!-- <div class="segura_input margem_t_10 float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Modelo" type="text" name="txt_modelo" value="">
          </div> -->

          <!-- INPUT FABRICANTE -->
          <!-- <div class="segura_input margem_t_10 float_left">
            <input class="input_text txt_preto margem_t_5" placeholder="Fabricante" type="text" name="txt_fabri" value="">
          </div>
          <div class="divisor_c margem_t_30 float_left">

          </div>
        </div>
      </form> -->
    </div>
  </body>
</html>
