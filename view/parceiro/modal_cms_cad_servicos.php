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
    <link rel="stylesheet" href="../css/parceiro/modal_cms_cad_servicos.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
    <body>
      <!-- <div class="container_campo float_left fs_30">
        <div class="campo">
          Nome
        </div>
        <div class="campo">
          Preco
        </div>
        <div class="campo">
          Garantia
        </div>
        <div class="campo">
          Descrição
        </div>
      </div> -->
      <form name="frmCadastroServico" method="POST" action="">
        <div class="container_input float_left margem_l_5">
          <div class="input ">
            <input class="input_text_111" type="text" name="txt_nome" placeholder="Nome do Serviço">
          </div>
          <div class="input ">
            <input class="input_text_111" type="text" name="txt_preco" placeholder="Preço do Serviço">
          </div>
          <div class="input ">
            <select class="input_select" name="slcGarantia">
              <option value="">SELECIONE UMA GARANTIA</option>
              <option value="1 Mes">1 Meses</option>
              <option value="3 Meses">3 Meses</option>
              <option value="5 Meses">5 Meses</option>
              <option value="6 Meses">6 Meses</option>
              <option value="12 Meses">12 Meses</option>
            </select>
          </div>
          <div class="input">
            <input class="input_text_111" type="text" name="txt_desc" placeholder="Descrição do Serviço">
          </div>
        </div>
        <div class="input">
          <div class="Container_btn">
              <input class="input_btn" type="submit" name="btnSalvar" value="Salvar">
          </div>
        </div>
      </form>
    </body>
</html>
