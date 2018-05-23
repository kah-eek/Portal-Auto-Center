<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('db_auto_center');
#####################################################################################################################################################################################
  $id_categoria_produto="";
  $categoria="";
  $btnCadastro="Cadastrar";
#####################################################################################################################################################################################
if(isset($_GET['modo']))//MODO EXCLUIR
  {
      $modo=$_GET['modo'];

      if($modo=='excluir')
      {
          $id_categoria_produto=$_GET['id_categoria_produto'];

          $sql = "delete from tbl_categoria_produto where id_categoria_produto=".$id_categoria_produto;
          mysql_query($sql);
          // echo('$sql');


      header('location:modal_cms_categorias_produto.php');
#####################################################################################################################################################################################
}else if($modo=='consulta_editar')//MODO EDITAR
       {
           $btnCadastro="Editar";
           $id_categoria_produto=$_GET['id_categoria_produto'];

           $_SESSION['id']= $id_categoria_produto;

           $sql = "select * from tbl_categoria_produto where id_categoria_produto=".$id_categoria_produto;

           $select = mysql_query($sql);

            if($rsConsulta=mysql_fetch_array($select)){

                $categoria=$rsConsulta['categoria'];

          }
       }
   }
#####################################################################################################################################################################################
  //INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){

  $categoria=$_POST["txtCategoria"];

  if($_POST["btnCadastro"]=='Cadastrar'){
    $sql="INSERT INTO tbl_categoria_produto(categoria)
    VALUES ('".$categoria."')";

  }else if($_POST["btnCadastro"]=='Editar'){

      $sql ="update tbl_categoria_produto set categoria='".$categoria."' WHERE id_categoria_produto=".$_SESSION['id'];
    }
      mysql_query($sql);

      header('location:modal_cms_categorias_produto.php');
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
   <form name="frmcadastrocategoriaprodutos" method="post" action="modal_cms_categorias_produto.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Cadastrar Categorias de Produtos.
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Categoria
        </div>

      </div>

      <div class="preencher_inputs">
          <input type="txtCategoria" name="txtCategoria" value="<?php echo($categoria); ?>" id="float" class="color">
      </div>


        <div class="button">
          <input type="submit" name="btnCadastro" value="<?php echo($btnCadastro); ?>" >
        </div>

      </div>
      <div class="container_visualizar">
        <div class="campos_table">
          Categoria
        </div>
        <div class="campos_table">
          Excluir
        </div>
        <div class="campos_table">
          Editar
        </div>
        <?php

   $sql="select * from tbl_categoria_produto order by id_categoria_produto desc";

  $select=mysql_query($sql);

  while($rsConsulta=mysql_fetch_array($select)){
    ?>
    <div class="campos_table">
      <?php echo($rsConsulta['categoria']) ?>
    </div>
    <div class="campos_table">
      <a href="modal_cms_categorias_produto.php?modo=excluir&id_categoria_produto=<?php echo($rsConsulta['id_categoria_produto'])?>">
          <img src="../pictures/icones/delete1.png">
      </a>
    </div>
    <div class="campos_table">
      <a href="modal_cms_categorias_produto.php?modo=consulta_editar&id_categoria_produto=<?php echo($rsConsulta['id_categoria_produto'])?>">
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
