<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  $id_usuario = $_SESSION['id_usuario'];

  require_once("../../database/conect.php");
  Conexao_db();

  $id_produto="";
  $id_parceiro="";
  $id_modelo_produto="";
  $id_cor="";
  $id_categoria_produto="";
  $nome="";
  $preco="";
  $conteudo_embalagem="";
  $garantia="";
  $descricao="";
  $observacao="";
  $btnSalvar="Salvar";

#######################################################################################################################################################################
if(isset($_GET['modo']))//MODO EXCLUIR
  {
      $modo=$_GET['modo'];

      if($modo=='excluir')
      {
          $id_produto=$_GET['id_produto'];

          $sql = "delete from tbl_produto where id_produto=".$id_produto;
          mysql_query($sql);


      header('location:modal_cms_produtos_home.php');
#######################################################################################################################################################################
}else if($modo=='consulta_editar')
{
  $btnSalvar="Editar";
  $id_produto=$_GET['id_produto'];

  $_SESSION['id']=$id_produto;

  $sql="SELECT prod.id_produto, prod.nome, prod.preco, prod.garantia, prod.descricao,prod.observacao, prod.conteudo_embalagem,cor.cor,categoria.categoria,nome_fantasia.nome_fantasia,modelo.modelo
  FROM tbl_produto as prod
  Inner join tbl_cor as cor
  INNER JOIN tbl_categoria_produto as categoria
  INNER JOIN tbl_parceiro as nome_fantasia
  INNER JOIN tbl_modelo_produto as modelo
  WHERE prod.id_produto = $id_produto ";
  // -- WHERE prod.id_cor = cor.id_cor
  // -- AND prod.id_categoria_produto = categoria.id_categoria_produto
  // -- AND prod.id_parceiro = nome_fantasia.id_parceiro
  // -- AND prod.id_modelo_produto = modelo.id_modelo_produto

  $select=mysql_query($sql);

  if($rsConsulta=mysql_fetch_array($select)){
    $nome=$rsConsulta['nome'];
    $preco=$rsConsulta['preco'];
    $conteudo_embalagem=$rsConsulta['conteudo_embalagem'];
    $garantia=$rsConsulta['garantia'];
    $descricao=$rsConsulta['descricao'];
    $observacao=$rsConsulta['observacao'];
    // $id_parceiro=$rsConsulta['id_parceiro'];
    $id_parceiro=$rsConsulta['nome_fantasia'];
    // $id_modelo_produto=$rsConsulta['id_modelo_produto'];
    $id_modelo_produto =$rsConsulta['modelo'];
    // $id_cor=$rsConsulta['id_cor'];
    $id_cor=$rsConsulta['cor'];
    // $id_categoria_produto=$rsConsulta['id_categoria_produto'];
    $id_categoria_produto=$rsConsulta['categoria'];

    }
  }
}
#######################################################################################################################################################################
  // INSERINDO PRODUTO NO BD.
  if(isset($_POST["btnSalvar"])){
    $nome=$_POST["txt_nome"];
    $preco=$_POST["txt_preco"];
    $conteudo_embalagem=$_POST["txt_conteudo_embalagem"];
    $garantia=$_POST["txt_garantia"];
    $descricao=$_POST["txt_descricao"];
    $observacao=$_POST["txt_observacao"];
    $id_parceiro=$_POST['sltParceiro'];
    $id_categoria_produto=$_POST["sltCategoria"];
    $id_cor=$_POST["sltCor"];
    $id_modelo_produto=$_POST["sltModelo"];

    if($_POST["btnSalvar"]=='Salvar'){
        $sql="INSERT INTO tbl_produto(nome, preco, conteudo_embalagem, garantia, descricao, observacao, id_parceiro, id_categoria_produto, id_cor, id_modelo_produto)
        VALUES('".$nome."', $preco, '".$conteudo_embalagem."', '".$garantia."', '".$descricao."', '".$observacao."', '".$id_parceiro."', '".$id_categoria_produto."', '".$id_cor."','".$id_modelo_produto."')";

     }
    else if($_POST['btnSalvar']=='Editar'){
      $sql="UPDATE tbl_produto SET nome='".$nome."', preco='".$preco."', conteudo_embalagem='".$conteudo_embalagem."', garantia='".$garantia."', descricao='".$descricao."',
      id_parceiro='".$id_parceiro."', id_categoria_produto='".$id_categoria_produto."', id_cor='".$id_cor."', id_modelo_produto='".$id_modelo_produto."' WHERE id_produto=".$_SESSION['id'];
    }


    // echo $sql;


    mysql_query($sql);
    header('location:modal_cms_produtos_home.php');
    // echo($sql);

  }
#######################################################################################################################################################################
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/padroes.css">
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_modal_produtos_home.css">

  </head>
  <body>
    <div class="container_menu_l float_left borda_preta_1 margem_l_20">
      <div class="container_img_menu centro_lr borda_preta_1 margem_t_20">
        <div class="item_img_menu_l_apc ">

        </div>
      </div>
      <!-- NOME USUÁRIO -->
      <div class="container_nome_usuario margem_t_10">
        <div class="item_nome_usuario centro_lr align_center preenche_t_15 fs_18 negrito txt_branco">
          Nome de Usuário
        </div>
      </div>
    </div>
   <form name="frmcadastroprodutos" method="post" action="modal_cms_produtos_home.php">
  <div class="container_principal_ph float_left">
    <div class="titulo_pagina centro_lr preenche_t_10">
      <!-- Subtítulo -->
      <div class="subtitulo fs_30 align_center centro_lr conteudo">
        <h2>Cadastre um Veículo</h2>
      </div>
    </div>
    <div class="divisor">

    </div>
    <div class="campos margem_l_20">
      <div class="names_campos">
        <div class="name_campo">
          Parceiro
        </div>
        <div class="name_campo">
          Nome
        </div>
        <div class="name_campo">
          Preço
        </div>
        <div class="name_campo">
          Conteúdo da Embalagem
        </div>
        <div class="name_campo">
          Garantia
        </div>
        <div class="name_campo">
          Descrição
        </div>
        <div class="name_campo">
          Observação
        </div>
        <div class="name_campo">
          Modelo
        </div>
        <div class="name_campo">
          Cor
        </div>
        <div class="name_campo">
          Categoria
        </div>
      </div>

      <div class="inputs_campos ">
        <div class="preencher_inputs">
            <!-- <input type="txt_modelo" class="color" name="txt_modelo" value="<?php echo($modelo)?>" id="float"> -->
            <select name="sltParceiro" id="float" class="color">
              <?php
              if($id_parceiro == ""){
                  $id_parceiro = 0;
                  ?>
                   <!-- <option>Selecione</option> -->
                <?php
              }else{
                  ?>
          <option value="<?php echo($id_parceiro); ?>">
              <?php echo($id_parceiro);?></option>
          <?php

              }
              $sql = "SELECT id_parceiro, nome_fantasia as nome_fantasia FROM tbl_parceiro Where id_parceiro <> ".$id_parceiro;
              $select=mysql_query($sql);

             while($rsParceiro = mysql_fetch_array($select)){
                 ?>

              <option value="<?php echo($rsParceiro['id_parceiro']); ?>">
              <?php echo($rsParceiro['nome_fantasia']); ?> </option>

          <?php
             }
          ?>

            </select>
        </div>
        <div class="preencher_inputs">
            <input type="txt_nome" class="color" name="txt_nome" value="<?php echo($nome)?>" id="float">
        </div>
        <div class="preencher_inputs">
            <input type="txt_preco" class="color" name="txt_preco" value="<?php echo($preco)?>" id="float">
        </div>
        <div class="preencher_inputs">
            <input type="txt_conteudo_embalagem" class="color" name="txt_conteudo_embalagem" value="<?php echo($conteudo_embalagem)?>" id="float">
        </div>
        <div class="preencher_inputs">
            <input type="txt_garantia" class="color" name="txt_garantia" value="<?php echo($garantia)?>" id="float">
        </div>
        <div class="preencher_inputs">
            <input type="txt_descricao" class="color" name="txt_descricao" value="<?php echo($descricao)?>" id="float">
        </div>
        <div class="preencher_inputs">
            <input type="txt_observacao" class="color" name="txt_observacao" value="<?php echo($observacao)?>" id="float">
        </div>
        <div class="preencher_inputs">
            <select name="sltModelo" id="float" required class="color">
              <option value="">Selecione</option>
              <?php
              if($id_modelo_produto == ""){
                  $id_modelo_produto = 0;
                  ?>
                   <!-- <option>Selecione</option> -->
                <?php
              }else{
                  ?>
          <option value="<?php echo($id_modelo_produto); ?>">
              <?php echo($id_modelo_produto);?></option>
          <?php

              }
              $sql = "SELECT id_modelo_produto, modelo as modelo FROM tbl_modelo_produto Where id_modelo_produto <> ".$id_modelo_produto;
              $select=mysql_query($sql);

             while($rsModelo = mysql_fetch_array($select)){
                 ?>

              <option value="<?php echo($rsModelo['id_modelo_produto']); ?>">
              <?php echo($rsModelo['modelo']); ?> </option>

          <?php
             }
          ?>

            </select>
        </div>
        <div class="preencher_inputs">
            <select name="sltCor" id="float" required class="color">
              <option value="">Selecione</option>
              <?php
              if($id_cor == ""){
                  $id_cor = 0;
                  ?>
                   <!-- <option>Selecione</option> -->
                <?php
              }else{
                  ?>
          <option value="<?php echo($id_cor); ?>">
              <?php echo($id_cor);?></option>
          <?php

              }
              $sql = "SELECT id_cor, cor as cor FROM tbl_cor Where id_cor <> ".$id_cor;
              $select=mysql_query($sql);

             while($rsCor = mysql_fetch_array($select)){
                 ?>

              <option value="<?php echo($rsCor['id_cor']); ?>">
              <?php echo($rsCor['cor']); ?> </option>

          <?php
             }
          ?>

            </select>
        </div>
        <div class="preencher_inputs">
            <select name="sltCategoria" id="float" required class="color">
              <option value="">Selecione</option>
              <?php

              if($id_categoria_produto == ""){
                  $id_categoria_produto = 0;
                  ?>
                   <!-- <option>Selecione</option> -->
                <?php
              }else{
                  ?>
              <option value="<?php echo($id_categoria_produto); ?>">
              <?php echo($id_categoria_produto);?></option>
              <?php

              }
              $sql = "SELECT id_categoria_produto, categoria as categoria FROM tbl_categoria_produto Where id_categoria_produto <> ".$id_categoria_produto;
              $select=mysql_query($sql);

              while($rsCategoria = mysql_fetch_array($select)){
                 ?>

              <option value="<?php echo($rsCategoria['id_categoria_produto']); ?>">
              <?php echo($rsCategoria['categoria']); ?> </option>

              <?php
              }
              ?>

            </select>
        </div>
        <div class="button">
          <input class=" input_submit_ph margem_t_50" type="submit"   name="btnSalvar" value="<?php echo($btnSalvar)?>" >
        </div>

      </div>
      <div class="divisor_ph float_left">

      </div>
      <div class="titulo_pagina centro_lr preenche_t_10">
        <!-- Subtítulo -->
        <div class="subtitulo fs_30 align_center centro_lr conteudo">
          <h2 class="margem_l_100">Gerencie Produtos</h2>
        </div>
      </div>
      <div class="container_visual">
        <div class="campos_visual">
          Parceiro
        </div>
        <div class="campos_visual">
          Nome
        </div>
        <div class="campos_visual">
          Preço
        </div>
        <div class="campos_visual">
        Conteúdo
            da
        Embalagem
        </div>
        <div class="campos_visual">
          Garantia
        </div>
        <div class="campos_visual">
          Descrição
        </div>
        <div class="campos_visual">
          Observação
        </div>
        <div class="campos_visual">
          Modelo
        </div>
        <div class="campos_visual">
          Cor
        </div>
        <div class="campos_visual">
          Categoria
        </div>
        <div class="campos_visual">
          Excluir
        </div>
        <div class="campos_visual">
          Editar
        </div>

        <?php

        $sql="SELECT prod.id_produto, prod.nome, prod.preco, prod.garantia, prod.descricao,prod.observacao, prod.conteudo_embalagem,cor.cor,categoria.categoria,nome_fantasia.nome_fantasia,modelo.modelo
        FROM tbl_produto as prod
        Inner join tbl_cor as cor
        INNER JOIN tbl_categoria_produto as categoria
        INNER JOIN tbl_parceiro as nome_fantasia
        INNER JOIN tbl_modelo_produto as modelo
        WHERE prod.id_cor = cor.id_cor
        AND prod.id_categoria_produto = categoria.id_categoria_produto
        AND prod.id_parceiro = nome_fantasia.id_parceiro
        AND prod.id_modelo_produto = modelo.id_modelo_produto order by id_produto desc";

        $select=mysql_query($sql);

        while($rsConsulta=mysql_fetch_array($select)){
          ?>
          <div class="campos_table">
            <?php echo($rsConsulta['nome_fantasia']) ?>
          </div>
          <div class="campos_table">
            <?php echo($rsConsulta['nome']) ?>
          </div>
          <div class="campos_table">
            <?php echo($rsConsulta['preco']) ?>
          </div>
          <div class="campos_table">
            <?php echo($rsConsulta['conteudo_embalagem']) ?>
          </div>
          <div class="campos_table">
            <?php echo($rsConsulta['garantia']) ?>
          </div>
          <div class="campos_table">
            <?php echo($rsConsulta['descricao']) ?>
          </div>
          <div class="campos_table">
            <?php echo($rsConsulta['observacao']) ?>
          </div>
          <div class="campos_table">
            <?php echo($rsConsulta['modelo']) ?>
          </div>
          <div class="campos_table">
            <?php echo($rsConsulta['cor']) ?>
          </div>
          <div class="campos_table">
            <?php echo($rsConsulta['categoria']) ?>
          </div>
          <div class="campos_table">
            <a href="modal_cms_produtos_home.php?modo=excluir&id_produto=<?php echo($rsConsulta['id_produto'])?>">
                <img src="../pictures/icones/delete1.png">
            </a>
          </div>
          <div class="campos_table">
            <a href="modal_cms_produtos_home.php?modo=consulta_editar&id_produto=<?php echo($rsConsulta['id_produto'])?>">
                <img src="../pictures/icones/edit.png">
            </a>
          </div>
          <?php
            }
          ?>

      </div>
    </div>

  </div>
</body>
</html>
