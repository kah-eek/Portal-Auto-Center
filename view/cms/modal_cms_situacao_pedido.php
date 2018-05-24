<?php
// require_once("../conexao_banco.php");
//
// Conexao_Database();

session_start();

$conexao=mysql_connect('localhost', 'root', 'bcd127');

mysql_select_db('db_auto_center');
#####################################################################################################################################################################################
$id_tipo_situacao_pedido="";
$situacao="";
$btnCadastro="Cadastrar";
#####################################################################################################################################################################################
if(isset($_GET['modo']))//MODO EXCLUIR
{
    $modo=$_GET['modo'];

    if($modo=='excluir')
    {
        $id_tipo_situacao_pedido=$_GET['id_tipo_situacao_pedido'];

        $sql = "delete from tbl_tipo_situacao_pedido where id_tipo_situacao_pedido=".$id_tipo_situacao_pedido;
        mysql_query($sql);
        // echo('$sql');


    header('location:modal_cms_situacao_pedido.php');
#####################################################################################################################################################################################
}else if($modo=='consulta_editar')//MODO EDITAR
     {
         $btnCadastro="Editar";
         $id_tipo_situacao_pedido=$_GET['id_tipo_situacao_pedido'];

         $_SESSION['id']= $id_tipo_situacao_pedido;

         $sql = "select * from tbl_tipo_situacao_pedido where id_cor=".$id_tipo_situacao_pedido;

         $select = mysql_query($sql);

          if($rsConsulta=mysql_fetch_array($select)){

              $id_tipo_situacao_pedido=$rsConsulta['situacao'];

        }
     }
 }
#####################################################################################################################################################################################
//INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){

$id_tipo_situacao_pedido=$_POST["txtPedido"];

if($_POST["btnCadastro"]=='Cadastrar'){
  $sql="INSERT INTO tbl_tipo_situacao_pedido(situacao)
  VALUES ('".$situacao."')";

}else if($_POST["btnCadastro"]=='Editar'){

    $sql ="update tbl_tipo_situacao_pedido set situacao='".$situacao."' WHERE id_tipo_situacao_pedido=".$_SESSION['id'];
  }
    mysql_query($sql);

    header('location:modal_cms_situacao_pedido.php');
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
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_modal_situacao_pedido.css">

  </head>
  <body>
   <form name="frmcadastropedido" method="post" action="modal_cms_situacao_pedido.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Cadastrar Situação de Pedido.
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Situação
        </div>

      </div>

      <div class="preencher_inputs">
          <input type="txtPedido" name="txtPedido" value="<?php echo($situacao); ?>" id="float" class="color">
      </div>


        <div class="button">
          <input type="submit" name="btnCadastro" value="<?php echo($btnCadastro); ?>" >
        </div>

      </div>
      <div class="container_visualizar">
        <div class="campos_table">
          Situação
        </div>
        <div class="campos_table">
          Excluir
        </div>
        <div class="campos_table">
          Editar
        </div>
        <?php

   $sql="select * from tbl_tipo_situacao_pedido order by id_tipo_situacao_pedido desc";

  $select=mysql_query($sql);

  while($rsConsulta=mysql_fetch_array($select)){
    ?>
    <div class="campos_table">
      <?php echo($rsConsulta['situacao']) ?>
    </div>
    <div class="campos_table">
      <a href="modal_cms_situacao_pedido.php?modo=excluir&id_tipo_situacao_pedido=<?php echo($rsConsulta['id_tipo_situacao_pedido'])?>">
          <img src="../pictures/icones/delete1.png">
      </a>
    </div>
    <div class="campos_table">
      <a href="modal_cms_situacao_pedido.php?modo=consulta_editar&id_tipo_situacao_pedido=<?php echo($rsConsulta['id_tipo_situacao_pedido'])?>">
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
