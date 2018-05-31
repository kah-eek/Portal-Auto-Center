<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('dbautofast');
#####################################################################################################################################################################################
  $id_fabricante_produto="";
  $fabricante="";
  $btnCadastro="Cadastrar";
#####################################################################################################################################################################################
if(isset($_GET['modo']))//MODO EXCLUIR
  {
      $modo=$_GET['modo'];

      if($modo=='excluir')
      {
          $id_fabricante_produto=$_GET['id_fabricante_produto'];

          $sql = "delete from tbl_fabricante_produto where id_fabricante_produto=".$id_fabricante_produto;
          mysql_query($sql);
          // echo('$sql');


      header('location:modal_cms_fabricante_produtos.php');
#####################################################################################################################################################################################
}else if($modo=='consulta_editar')//MODO EDITAR
       {
           $btnCadastro="Editar";
           $id_fabricante_produto=$_GET['id_fabricante_produto'];

           $_SESSION['id']= $id_fabricante_produto;

           $sql = "select * from tbl_fabricante_produto where id_fabricante_produto=".$id_fabricante_produto;

           $select = mysql_query($sql);

            if($rsConsulta=mysql_fetch_array($select)){

                $fabricante=$rsConsulta['fabricante'];

          }
       }
   }
#####################################################################################################################################################################################
  //INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){

  $fabricante=$_POST["txtFabricante"];

  if($_POST["btnCadastro"]=='Cadastrar'){
    $sql="INSERT INTO tbl_fabricante_produto(fabricante)
    VALUES ('".$fabricante."')";

  }else if($_POST["btnCadastro"]=='Editar'){

      $sql ="update tbl_fabricante_produto set fabricante='".$fabricante."' WHERE id_fabricante_produto=".$_SESSION['id'];
    }
      mysql_query($sql);

      header('location:modal_cms_fabricante_produtos.php');
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
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_modal_categorias_produtos.css">

  </head>
  <body>
   <form name="frmcadastrofabricanteprodutos" method="post" action="modal_cms_fabricante_produtos.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Cadastrar Fabricantes.
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Fabricante
        </div>

      </div>

      <div class="preencher_inputs">
          <input type="txtFabricante" name="txtFabricante" value="<?php echo($fabricante); ?>" id="float" class="color">
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
          Excluir
        </div>
        <div class="campos_table">
          Editar
        </div>
        <?php

   $sql="select * from tbl_fabricante_produto order by id_fabricante_produto desc";

  $select=mysql_query($sql);

  while($rsConsulta=mysql_fetch_array($select)){
    ?>
    <div class="campos_table">
      <?php echo($rsConsulta['fabricante']) ?>
    </div>
    <div class="campos_table">
      <a href="modal_cms_fabricante_produtos.php?modo=excluir&id_fabricante_produto=<?php echo($rsConsulta['id_fabricante_produto'])?>">
          <img src="../pictures/icones/delete1.png">
      </a>
    </div>
    <div class="campos_table">
      <a href="modal_cms_fabricante_produtos.php?modo=consulta_editar&id_fabricante_produto=<?php echo($rsConsulta['id_fabricante_produto'])?>">
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
