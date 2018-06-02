<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  $conexao=mysql_connect('caiqueoliveira.mysql.dbaas.com.br', 'caiqueoliveira', 'caique@2018');

  mysql_select_db('caiqueoliveira');
#####################################################################################################################################################################################
  $id_cor="";
  $cor="";
  $btnCadastro="Cadastrar";
#####################################################################################################################################################################################
if(isset($_GET['modo']))//MODO EXCLUIR
  {
      $modo=$_GET['modo'];

      if($modo=='excluir')
      {
          $id_cor=$_GET['id_cor'];

          $sql = "delete from tbl_cor where id_cor=".$id_cor;
          mysql_query($sql);
          // echo('$sql');


      header('location:modal_cms_cores.php');
#####################################################################################################################################################################################
}else if($modo=='consulta_editar')//MODO EDITAR
       {
           $btnCadastro="Editar";
           $id_cor=$_GET['id_cor'];

           $_SESSION['id']= $id_cor;

           $sql = "select * from tbl_cor where id_cor=".$id_cor;

           $select = mysql_query($sql);

            if($rsConsulta=mysql_fetch_array($select)){

                $cor=$rsConsulta['cor'];

          }
       }
   }
#####################################################################################################################################################################################
  //INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){

  $cor=$_POST["txtCor"];

  if($_POST["btnCadastro"]=='Cadastrar'){
    $sql="INSERT INTO tbl_cor(cor)
    VALUES ('".$cor."')";

  }else if($_POST["btnCadastro"]=='Editar'){

      $sql ="update tbl_cor set cor='".$cor."' WHERE id_cor=".$_SESSION['id'];
    }
      mysql_query($sql);

      header('location:modal_cms_cores.php');
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
   <form name="frmcadastrocores" method="post" action="modal_cms_cores.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Cadastrar Cores.
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Cor
        </div>

      </div>

      <div class="preencher_inputs">
          <input type="txtCor" name="txtCor" value="<?php echo($cor); ?>" id="float" class="color">
      </div>


        <div class="button">
          <input type="submit" name="btnCadastro" value="<?php echo($btnCadastro); ?>" >
        </div>

      </div>
      <div class="container_visualizar">
        <div class="campos_table">
          Cores
        </div>
        <div class="campos_table">
          Excluir
        </div>
        <div class="campos_table">
          Editar
        </div>
        <?php

   $sql="select * from tbl_cor order by id_cor desc";

  $select=mysql_query($sql);

  while($rsConsulta=mysql_fetch_array($select)){
    ?>
    <div class="campos_table">
      <?php echo($rsConsulta['cor']) ?>
    </div>
    <div class="campos_table">
      <a href="modal_cms_cores.php?modo=excluir&id_cor=<?php echo($rsConsulta['id_cor'])?>">
          <img src="../pictures/icones/delete1.png">
      </a>
    </div>
    <div class="campos_table">
      <a href="modal_cms_cores.php?modo=consulta_editar&id_cor=<?php echo($rsConsulta['id_cor'])?>">
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
