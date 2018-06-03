<?php
session_start();

require_once("../../database/conect.php");
Conexao_db();
$id_usuario = $_SESSION['id_usuario'];
$id_parceiro = $_SESSION['id_parceiro1'];

if(isset($_POST["btnSalvar"]))
{
    //Resgatar os dados fornecidos pelo usuario
    //usando o metod POST, conforme escolhido pelo Form
    // $modelo=$_POST["slcModelo"];
    // $cor=$_POST["slcCor"];
    // $categoria=$_POST["slcCategoria"];
    $nome=$_POST["txt_nome"];
    $preco=$_POST["txt_preco"];
    // $conteudo=$_POST["txt_conteudo"];
    $garantia=$_POST["slcGarantia"];
    $desc=$_POST["txt_desc"];
    // $obs=$_POST["txt_obs"];


    //Monta o Script para enviar para o BD
    $sql = "insert into tbl_produto (id_parceiro, id_categoria_produto, nome, preco, garantia, descricao) values ('".$id_parceiro."','2','".$nome."',
    '".$preco."','".$garantia."','".$desc."');";

    mysql_query($sql);
    // echo ($sql);

    header('location:modal_cms_cad_servicos.php');
  }
 ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/padroes.css">
    <link rel="stylesheet" href="../css/parceiro/modal_cms_cad_servicos.css">
  </head>
  <body class="body">

      <header class="header">
        <img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=3159b23f37c4f3954e97072e00e975ab&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb">

        <h1 class="page-title">Auto Fast</h1>

        <div class="saudacao">
          <p>Bem-vindo</p>
          <p>Caique M. Oliveira</p>
        </div>
        <a class="return-button" href="cms_adm_parceiro.php">
          <i class="material-icons">
            keyboard_arrow_left
          </i>
        </a>
      </header>

      <div class="blank-space"></div>

      <div class="main">
        <form name="frmCadastroServico" method="POST" action="">
          
          <div class="cont-princ">

            <label class="label-pr-h">Cadastro de Serviço</label>
            <div class="divisor"></div>

            <label for="txt_nome" class="field-label">Nome do Serviço</label>
            <input id="txt_nome" class="android-input input-text" type="text" name="txt_nome">

            <label for="txt_preco" class="field-label">Preço do Serviço</label>
            <input id="txt_preco" class="android-input input-text" type="text" name="txt_preco">

            <select class="select-pac" name="slcGarantia">
              <option selected disabled value="">SELECIONE UMA GARANTIA</option>
              <option value="1 Mes">1 Meses</option>
              <option value="3 Meses">3 Meses</option>
              <option value="5 Meses">5 Meses</option>
              <option value="6 Meses">6 Meses</option>
              <option value="12 Meses">12 Meses</option>
            </select>

            <label for="txt_desc" class="field-label">Descrição do Servicço</label>
            <input id="txt_desc" class="android-input input-text" type="text" name="txt_desc">

          </div>

          <input class="input-submit-cad-veic" type="submit" name="btnSalvar" value="Salvar Serviço">
          
        </form>
      </div>

      <script src="../js/jquery.js"></script>
      <script src="../js/pac_framework.js"></script>

    </body>
</html>
