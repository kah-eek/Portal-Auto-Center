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
    $modelo=$_POST["slcModelo"];
    $cor=$_POST["slcCor"];
    $categoria=$_POST["slcCategoria"];
    $nome=$_POST["txt_nome"];
    $preco=$_POST["txt_preco"];
    $conteudo=$_POST["txt_conteudo"];
    $garantia=$_POST["slcGarantia"];
    $desc=$_POST["txt_desc"];
    $obs=$_POST["txt_obs"];


    //Monta o Script para enviar para o BD
    $sql = "insert into tbl_produto (id_modelo_produto, id_cor, id_parceiro, id_categoria_produto, nome, preco, conteudo_embalagem, garantia, descricao, observacao) values ('".$modelo."','".$cor."','".$id_parceiro."','".$categoria."','".$nome."',
    '".$preco."','".$conteudo."','".$garantia."','".$desc."','".$obs."');";

    mysql_query($sql);
    // echo ($sql);

    header('location:modal_cms_produtos_home.php');
  }
 ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="../css/parceiro/cms_modal_produtos_home.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
    <body>
      <div class="container_campo float_left fs_30">
        <div class="campo">
          Modelo Produto
        </div>
        <div class="campo">
          Cor
        </div>
        <div class="campo">
          Categoria
        </div>
        <div class="campo">
          Nome
        </div>
        <div class="campo">
          Preco
        </div>
        <div class="campo">
          Conteudo embalagem
        </div>
        <div class="campo">
          Garantia
        </div>
        <div class="campo">
          Descrição
        </div>
        <div class="campo">
          Observações
        </div>
      </div>
      <form name="frmCadastroProduto" method="POST" action="">
        <div class="container_input float_left margem_l_5">
          <div class="input ">
            <select name="slcModelo">
              <?php
              $sql = "SELECT * FROM tbl_modelo_produto";
                $select = mysql_query($sql);
                while ($rsPH = mysql_fetch_array($select))
                {

              ?>
              <option value="<?php echo($rsPH['id_modelo_produto']) ?>"><?php echo($rsPH['modelo']) ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="input ">
            <select name="slcCor">
              <?php
              $sql = "SELECT * FROM tbl_cor";
                $select = mysql_query($sql);
                while ($rsPH = mysql_fetch_array($select))
                {

              ?>
              <option value="<?php echo($rsPH['id_cor']) ?>"><?php echo($rsPH['cor']) ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="input ">
            <select name="slcCategoria">
              <?php
              $sql = "SELECT * FROM tbl_categoria_produto";
                $select = mysql_query($sql);
                while ($rsPH = mysql_fetch_array($select))
                {

              ?>
              <option value="<?php echo($rsPH['id_categoria_produto']) ?>"><?php echo($rsPH['categoria']) ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="input ">
            <input type="text" name="txt_nome" placeholder="Nome do Produto">
          </div>
          <div class="input ">
            <input type="text" name="txt_preco" placeholder="Preço do produto">
          </div>
          <div class="input ">
            <input type="text" name="txt_conteudo" placeholder="Conteudo Contido na embalagem">
          </div>
          <div class="input ">
            <select name="slcGarantia">
              <option value="1 Mes">1 Meses</option>
              <option value="3 Meses">3 Meses</option>
              <option value="5 Meses">5 Meses</option>
              <option value="6 Meses">6 Meses</option>
              <option value="12 Meses">12 Meses</option>
            </select>
          </div>
          <div class="input">
            <input type="text" name="txt_desc" placeholder="Descrição do produto">
          </div>
          <div class="input ">
            <input type="text" name="txt_obs" placeholder="Observações">
          </div>
        </div>
        <div class="Container_btn">
            <input type="submit" name="btnSalvar" value="Salvar">
        </div>
      </form>
    </body>
</html>
