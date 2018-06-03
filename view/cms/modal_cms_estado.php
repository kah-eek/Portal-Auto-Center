<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  require_once("../database/conect.php");
  Conexao_db();
#####################################################################################################################################################################################
  $id_estado="";
  $estado="";
  $btnCadastro="Cadastrar";
#####################################################################################################################################################################################
if(isset($_GET['modo']))//MODO EXCLUIR
  {
      $modo=$_GET['modo'];

      if($modo=='excluir')
      {
          $id_estado=$_GET['id_estado'];

          $sql = "delete from tbl_estado where id_estado=".$id_estado;
          mysql_query($sql);
          // echo('$sql');


      header('location:modal_cms_estado.php');
#####################################################################################################################################################################################
}else if($modo=='consulta_editar')//MODO EDITAR
       {
           $btnCadastro="Editar";
           $id_estado=$_GET['id_estado'];

           $_SESSION['id']= $id_categoria_produto;

           $sql = "select * from tbl_estado where id_estado=".$id_estado;

           $select = mysql_query($sql);

            if($rsConsulta=mysql_fetch_array($select)){

                $estado=$rsConsulta['estado'];

          }
       }
   }
#####################################################################################################################################################################################
  //INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){

  $estado=$_POST["txtEstado"];

  if($_POST["btnCadastro"]=='Cadastrar'){
    $sql="INSERT INTO tbl_estado(estado)
    VALUES ('".$estado."')";

  }else if($_POST["btnCadastro"]=='Editar'){

      $sql ="update tbl_estado set estado='".$estado."' WHERE id_estado=".$_SESSION['id'];
    }
      mysql_query($sql);

      header('location:modal_cms_estado.php');
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
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_modal_estado.css">

  </head>
  <body>
   <form name="frmcadastroestado" method="post" action="modal_cms_estado.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Cadastrar Estados.
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Estado
        </div>

      </div>

      <div class="preencher_inputs">
          <input type="txtEstado" name="txtEstado" value="<?php echo($estado); ?>" id="float" class="color">
      </div>


        <div class="button">
          <input type="submit" name="btnCadastro" value="<?php echo($btnCadastro); ?>" >
        </div>

      </div>
      <div class="container_visualizar">
        <div class="campos_table">
          Estado
        </div>
        <div class="campos_table">
          Excluir
        </div>
        <div class="campos_table">
          Editar
        </div>
        <?php

   $sql="select * from tbl_estado order by id_estado desc";

  $select=mysql_query($sql);

  while($rsConsulta=mysql_fetch_array($select)){
    ?>
    <div class="campos_table">
      <?php echo($rsConsulta['estado']) ?>
    </div>
    <div class="campos_table">
      <a href="modal_cms_estado.php?modo=excluir&id_estado=<?php echo($rsConsulta['$id_estado'])?>">
          <img src="../pictures/icones/delete1.png">
      </a>
    </div>
    <div class="campos_table">
      <a href="modal_cms_estado.php?modo=consulta_editar&id_estado=<?php echo($rsConsulta['$id_estado'])?>">
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
