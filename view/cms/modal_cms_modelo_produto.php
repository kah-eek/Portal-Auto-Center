<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('dbautofast');
#####################################################################################################################################################################################
  $id_modelo_produto="";
  $id_fabricante_produto="";
  $modelo="";
  $peso="";
  $altura="";
  $comprimento="";
  $btnCadastro="Cadastrar";
#####################################################################################################################################################################################
if(isset($_GET['modo']))//MODO EXCLUIR
  {
      $modo=$_GET['modo'];

      if($modo=='excluir')
      {
          $id_modelo_produto=$_GET['id_modelo_produto'];

          $sql = "delete from tbl_modelo_produto where id_modelo_produto=".$id_modelo_produto;
          mysql_query($sql);
          // echo('$sql');


      header('location:modal_cms_modelo_produto.php');
#####################################################################################################################################################################################
}else if($modo=='consulta_editar')//MODO EDITAR
       {
           $btnCadastro="Editar";
           $id_anuncio_produto=$_GET['id_modelo_produto'];

           $_SESSION['id']= $id_modelo_produto;

           $sql="SELECT tbl_modelo_produto.modelo, tbl_modelo_produto.peso, tbl_modelo_produto.altura, tbl_modelo_produto.comprimento, tbl_modelo_produto.id_fabricante_produto,
           tbl_fabricante_produto.fabricante as nome_fabricante FROM tbl_modelo_produto INNER JOIN tbl_fabricante_produto on tbl_modelo_produto.id_fabricante_produto =
           tbl_fabricante_produto.id_fabricante_produto WHERE tbl_modelo_produto.id_modelo_produto=".$id_modelo_produto;

           $select = mysql_query($sql);

            if($rsConsulta=mysql_fetch_array($select)){

                $modelo=$rsConsulta['modelo'];
                $peso=$rsConsulta['peso'];
                $altura=$rsConsulta['altura'];
                $comprimento=$rsConsulta['comprimento'];
                $id_fabricante_produto=$rsConsulta['id_fabricante_produto'];
                $nomeFabricante=$rsConsulta['nome_fabricante'];

          }
       }
   }
#####################################################################################################################################################################################
  //INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){
  $id_fabricante_produto=$_POST["sltFabricante"];
  $modelo=$_POST["txtModelo"];
  $peso=$_POST["txtPeso"];
  $altura=$_POST["txtAltura"];
  $comprimento=$_POST["txtComprimento"];


  if($_POST["btnCadastro"]=='Cadastrar'){
    $sql="INSERT INTO tbl_modelo_produto(id_fabricante_produto,modelo,peso,altura,comprimento)
    VALUES ('".$id_fabricante_produto."', '".$modelo."', '".$peso."', '".$altura."', '".$comprimento."')";

  }else if($_POST["btnCadastro"]=='Editar'){
    $sql="UPDATE tbl_modelo_produto SET id_fabricante_produto='".$id_fabricante_produto."', modelo='".$modelo."',
    peso='".$peso."', altura='".$altura."', comprimento='".$comprimento."' WHERE id_modelo_produto=".$_SESSION['id'];
  }
      mysql_query($sql);

      header('location:modal_cms_modelo_produto.php');
      //  echo($sql);
}
#####################################################################################################################################################################################
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/padroes.css">
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_modal_modelo_produto.css">

  </head>
  <body>
   <form name="frmcadastromodeloproduto" method="post" action="modal_cms_modelo_produto.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Cadastrar Modelo de Produtos.
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Fabricante
        </div>
        <div class="name_campo">
          Modelo
        </div>
        <div class="name_campo" >
          Peso
        </div>
        <div class="name_campo">
          Altura
        </div>
        <div class="name_campo">
          Comprimento
        </div>
      </div>
      <div class="preencher_inputs">
          <select name="sltFabricante" id="float" class="color">
            <?php
            if($id_fabricante_produto == ""){
                $id_fabricante_produto = 0;
                ?>
                 <option>Selecione</option>
              <?php
            }else{
                ?>
        <option value="<?php echo($id_fabricante_produto); ?>">
            <?php echo($id_fabricante_produto);?></option>
        <?php

            }
            $sql = "SELECT id_fabricante_produto, fabricante as nome_fabricante FROM tbl_fabricante_produto Where id_fabricante_produto <> ".$id_fabricante_produto;
            $select=mysql_query($sql);

           while($rsFabricante = mysql_fetch_array($select)){
               ?>

            <option value="<?php echo($rsFabricante['id_fabricante_produto']); ?>">
            <?php echo($rsFabricante['nome_fabricante']); ?> </option>

        <?php
           }
        ?>
          </select>
      </div>
      <div class="preencher_inputs">
          <input type="txtModelo" name="txtModelo" value="<?php echo($modelo); ?>" id="float" class="color">
      </div>
      <div class="preencher_inputs">
          <input type="txtPeso" name="txtPeso" value="<?php echo($peso); ?>" id="float" class="color">
      </div>
      <div class="preencher_inputs">
          <input type="txtAltura" name="txtAltura" value="<?php echo($altura); ?>" id="float" class="color">
      </div>
      <div class="preencher_inputs">
          <input type="txtComprimento" name="txtComprimento" value="<?php echo($comprimento); ?>" id="float" class="color">
      </div>

        <div class="button">
          <input type="submit" name="btnCadastro" value="<?php echo($btnCadastro); ?>" >
        </div>

      </div>
      <div class="container_visualizar">
        <div class="campos_table">
          Fabricante
        </div>
        <div class="campos_table">
          Modelo
        </div>
        <div class="campos_table">
          Peso
        </div>
        <div class="campos_table">
          Altura
        </div>
        <div class="campos_table">
          Comprimento
        </div>
        <div class="campos_table">
          Excluir
        </div>
        <div class="campos_table">
          Editar
        </div>
        <?php

  $sql="SELECT tbl_modelo_produto.id_fabricante_produto, tbl_modelo_produto.modelo, tbl_modelo_produto.peso,
   tbl_modelo_produto.altura,tbl_modelo_produto.comprimento, tbl_modelo_produto.id_modelo_produto, tbl_fabricante_produto.fabricante as nomeFabricante
   from tbl_modelo_produto inner join tbl_fabricante_produto on tbl_modelo_produto.id_modelo_produto = tbl_fabricante_produto.id_fabricante_produto
   where tbl_modelo_produto.id_modelo_produto
   order by id_modelo_produto desc";

  $select=mysql_query($sql);

  while($rsConsulta=mysql_fetch_array($select)){
    ?>
    <div class="campos_table">
      <?php echo($rsConsulta['nomeFabricante']) ?>
    </div>
    <div class="campos_table">
      <?php echo($rsConsulta['modelo']) ?>
    </div>
    <div class="campos_table">
      <?php echo($rsConsulta['peso']) ?>
    </div>
    <div class="campos_table">
      <?php echo($rsConsulta['altura']) ?>
    </div>
    <div class="campos_table">
      <?php echo($rsConsulta['comprimento']) ?>
    </div>
    <div class="campos_table">
      <a href="modal_cms_modelo_produto.php?modo=excluir&id_modelo_produto=<?php echo($rsConsulta['id_modelo_produto'])?>">
          <img src="../pictures/icones/delete1.png">
      </a>
    </div>
    <div class="campos_table">
      <a href="modal_cms_modelo_produto.php?modo=consulta_editar&id_modelo_produto=<?php echo($rsConsulta['id_modelo_produto'])?>">
          <img src="../pictures/icones/edit.png">
      </a>
    </div>
    <?php
      }
    ?>


        </div>
    </div>
</body>
</html>
