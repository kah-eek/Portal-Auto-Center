<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('db_auto_center');

  $id_produto="";
  $id_parceiro="";
  $id_modelo_produto="";
  $id_parceiro="";
  $id_cor="";
  $id_categoria_produto="";
  $nome="";
  $preco="";
  $conteudo_embalagem="";
  $garantia="";
  $descricao="";
  $observacao="";
  $modelo="";
  $peso="";
  $altura="";
  $comprimento="";
  $btnSalvar="Salvar";

// if(isset($_GET['modo'])){
//
//   $modo=$_GET['modo'];
//
//   $modo=$_GET['modo']{
//     $id_produto=$_GET['id_produto'];
//
//     $sql="DELETE FROM tbl_produto WHERE id_produto".$id_produto;
//     mysql_query($sql);
//
//     header('location:cmsusuario.php');
//
// }else if($modo=='consulta_editar'){
//   $btnSalvar="Editar";
//   $id_produto=$_GET['id_produto']
//
//   $_SESSION['id']= $id_produto;
//
//     $sql = "select tbl_produto.nome as nome_produto, tbl_produto.preco, tbl_produto.conteudo_embalagem, tbl_produto.garantia, tbl_produto.descricao, tbl_produto.observacao,
//     tbl_produto.modelo, tbl_produto.peso, tbl_produto.altura, tbl_produto.comprimento, tbl_modelo_produto.modelo. tbl_modelo_produto.peso, tbl_modelo_produto.altura, tbl_modelo_produto.comprimento,
//     tbl_produto.id_cor "
//
//     $sql = "select tblusuarios.nome as nome_usuario, tblusuarios.login, tblusuarios.senha, tblusuarios.idNivel, tblnivel.nome as nome_nivel from tblusuarios inner join tblnivel on tblusuarios.idNivel = tblnivel.idNivel  where tblusuarios.idUsuario=".$idUsuario;
//
//
// }
//
// }

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
    VALUES('".$nome."', '".$preco."', '".$conteudo_embalagem."', '".$garantia."', '".$descricao."', '".$observacao."', '".$id_parceiro."', '".$id_categoria_produto."', '".$id_cor."','".$id_modelo_produto."')";
    }

    mysql_query($sql);

    header('location:modal_cms_produtos_home.php');
    // echo($sql);

  }
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
   <form name="frmcadastroprodutos" method="post" action="modal_cms_produtos_home.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Cadastrar Produtos
      </div>
    </div>
    <div class="campos">
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

      <div class="inputs_campos">
        <div class="preencher_inputs">
            <!-- <input type="txt_modelo" class="color" name="txt_modelo" value="<?php echo($modelo)?>" id="float"> -->
            <select name="sltParceiro" id="float" class="color">
              <?php
              if($id_parceiro == ""){
                  $id_parceiro = 0;
                  ?>
                   <option>Selecione</option>
                <?php
              }else{
                  ?>
          <option value="<?php echo($id_parceiro); ?>">
              <?php echo($id_parceiro);?></option>
          <?php

              }
              $sql = "SELECT id_parceiro, nome_fantasia as nome_nome FROM tbl_parceiro Where id_parceiro <> ".$id_parceiro;
              $select=mysql_query($sql);

             while($rsParceiro = mysql_fetch_array($select)){
                 ?>

              <option value="<?php echo($rsParceiro['id_parceiro']); ?>">
              <?php echo($rsParceiro['nome_nome']); ?> </option>

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
            <select name="sltModelo" id="float" class="color">
              <?php
              if($id_modelo_produto == ""){
                  $id_modelo_produto = 0;
                  ?>
                   <option>Selecione</option>
                <?php
              }else{
                  ?>
          <option value="<?php echo($id_modelo_produto); ?>">
              <?php echo($id_modelo_produto);?></option>
          <?php

              }
              $sql = "SELECT id_modelo_produto, modelo as nome_modelo FROM tbl_modelo_produto Where id_modelo_produto <> ".$id_modelo_produto;
              $select=mysql_query($sql);

             while($rsModelo = mysql_fetch_array($select)){
                 ?>

              <option value="<?php echo($rsModelo['id_modelo_produto']); ?>">
              <?php echo($rsModelo['nome_modelo']); ?> </option>

          <?php
             }
          ?>

            </select>
        </div>
        <div class="preencher_inputs">
            <select name="sltCor" id="float" class="color">
              <?php
              if($id_cor == ""){
                  $id_cor = 0;
                  ?>
                   <option>Selecione</option>
                <?php
              }else{
                  ?>
          <option value="<?php echo($id_cor); ?>">
              <?php echo($id_cor);?></option>
          <?php

              }
              $sql = "SELECT id_cor, cor as nome_cor FROM tbl_cor Where id_cor <> ".$id_cor;
              $select=mysql_query($sql);

             while($rsCor = mysql_fetch_array($select)){
                 ?>

              <option value="<?php echo($rsCor['id_cor']); ?>">
              <?php echo($rsCor['nome_cor']); ?> </option>

          <?php
             }
          ?>

            </select>
        </div>
        <div class="preencher_inputs">
            <select name="sltCategoria" id="float" class="color">
              <?php

              if($id_categoria_produto == ""){
                  $id_categoria_produto = 0;
                  ?>
                   <option>Selecione</option>
                <?php
              }else{
                  ?>
              <option value="<?php echo($id_categoria_produto); ?>">
              <?php echo($id_categoria_produto);?></option>
              <?php

              }
              $sql = "SELECT id_categoria_produto, categoria as nome_categoria FROM tbl_categoria_produto Where id_categoria_produto <> ".$id_categoria_produto;
              $select=mysql_query($sql);

              while($rsCategoria = mysql_fetch_array($select)){
                 ?>

              <option value="<?php echo($rsCategoria['id_categoria_produto']); ?>">
              <?php echo($rsCategoria['nome_categoria']); ?> </option>

              <?php
              }
              ?>

            </select>
        </div>
        <div class="button">
          <input type="submit"   name="btnSalvar" value="<?php echo($btnSalvar)?>" >
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
      </div>
    </div>

  </div>
</body>
</html>
