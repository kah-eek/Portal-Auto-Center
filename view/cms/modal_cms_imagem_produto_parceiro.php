<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  require_once("modulo.php");

  session_start();

  require_once("../../database/conect.php");
  Conexao_db();
#####################################################################################################################################################################################
  $id_imagem_produto_parceiro="";
  $id_produto="";
  $imagem="";
  $cbxAtivo="";
  $btnCadastro="Cadastrar";
#####################################################################################################################################################################################
if(isset($_GET['modo']))//MODO EXCLUIR
  {
      $modo=$_GET['modo'];

      if($modo=='excluir')
      {
          $id_imagem_produto_parceiro=$_GET['id_imagem_produto_parceiro'];

          $sql = "delete from tbl_imagem_produto_parceiro where id_imagem_produto_parceiro=".$id_imagem_produto_parceiro;
          mysql_query($sql);


      header('location:modal_cms_imagem_produto_parceiro.php');
#####################################################################################################################################################################################
}else if($modo=='consulta_editar')//MODO EDITAR
       {
           $btnCadastro="Editar";
           $id_imagem_produto_parceiro=$_GET['id_imagem_produto_parceiro'];

           $_SESSION['id']= $id_imagem_produto_parceiro;

           $sql = "SELECT tbl_imagem_produto_parceiro.imagem, tbl_imagem_produto_parceiro.ativo, tbl_imagem_produto_parceiro.id_produto, tbl_produto.nome as nome_produto FROM tbl_imagem_produto_parceiro INNER JOIN
           tbl_produto on tbl_imagem_produto_parceiro.id_produto = tbl_produto.id_produto WHERE tbl_imagem_produto_parceiro.id_imagem_produto_parceiro=".$id_imagem_produto_parceiro;

           $select = mysql_query($sql);

            if($rsConsulta=mysql_fetch_array($select)){

                $imagem=$rsConsulta['imagem'];
                $id_produto=$rsConsulta['id_produto'];
                $nomeProduto=$rsConsulta['nome_produto'];
                $cbxAtivo=$rsConsulta['ativo'];

          }
       }
   }
#####################################################################################################################################################################################
  //INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){
  $id_produto=$_POST["sltProduto"];
  // $imagem=$_POST["imagem"];
  $imagem=Upload($_FILES["imagem"]);
  $cbxAtivo=$_POST["sltAtivo"];

  if($_POST["btnCadastro"]=='Cadastrar'){
    $sql="INSERT INTO tbl_imagem_produto_parceiro(id_produto,imagem,ativo)
    VALUES ('".$id_produto."', '".$imagem."', '".$cbxAtivo."')";

  }else if($_POST["btnCadastro"]=='Editar'){
    $sql="UPDATE tbl_imagem_produto_parceiro SET imagem='".$imagem."', ativo='".$cbxAtivo."', id_produto='".$id_produto."' WHERE id_imagem_produto_parceiro=".$_SESSION['id'];
  }
      mysql_query($sql);

      header('location:modal_cms_imagem_produto_parceiro.php');
      // echo($sql);
}
#####################################################################################################################################################################################
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/padroes.css">
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_modal_imagem_produto_parceiro.css">

  </head>
  <body>
   <form name="frmcadastroimagemprodutoparceiro" method="post" action="modal_cms_imagem_produto_parceiro.php" enctype="multipart/form-data">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Cadastrar Imagens de Produtos.
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Produto
        </div>
        <div class="name_campo" >
          Imagem
        </div>
        <div class="name_campo" >
          Ativo
        </div>
      </div>
      <div class="preencher_inputs">
          <select name="sltProduto" id="float" class="color">
            <?php
            if($id_produto == ""){
                $id_produto = 0;
                ?>
                 <option>Selecione</option>
              <?php
            }else{
                ?>
        <option value="<?php echo($id_produto); ?>">
            <?php echo($id_produto);?></option>
        <?php

            }
            $sql = "SELECT id_produto, nome as nome_produto FROM tbl_produto Where id_produto <> ".$id_produto;
            $select=mysql_query($sql);

           while($rsProduto = mysql_fetch_array($select)){
               ?>

            <option value="<?php echo($rsProduto['id_produto']); ?>">
            <?php echo($rsProduto['nome_produto']); ?> </option>

        <?php
           }
        ?>
          </select>
      </div>
      <div class="preencher_inputs">
         <input type="file" name="imagem" value="<?php echo($imagem)?>" class="color">
      </div>
      <div class="preencher_inputs">

        <select required name="sltAtivo" class="color">
          <option value="1">Sim</option>
          <option value="0">Não</option>
        </select>
      </div>

        <div class="button">
          <input type="submit" name="btnCadastro" value="<?php echo($btnCadastro); ?>" >
        </div>

      </div>
      <div class="container_visualizar">
        <div class="campos_table">
          Produto
        </div>
        <div class="campos_table">
          Imagem
        </div>
        <div class="campos_table">
          Excluir
        </div>
        <div class="campos_table">
          Editar
        </div>

      <?php

      $sql="SELECT tbl_imagem_produto_parceiro.imagem, tbl_imagem_produto_parceiro.ativo, tbl_imagem_produto_parceiro.id_produto, tbl_imagem_produto_parceiro.id_imagem_produto_parceiro, tbl_produto.nome as nomeProduto
      from tbl_imagem_produto_parceiro inner join tbl_produto on tbl_imagem_produto_parceiro.id_produto = tbl_produto.id_produto where tbl_imagem_produto_parceiro.id_imagem_produto_parceiro
      order by id_imagem_produto_parceiro desc";

      $select=mysql_query($sql);

      while($rsConsulta=mysql_fetch_array($select)){
        ?>
        <div class="campos_table">
          <?php echo($rsConsulta['nomeProduto']) ?>
        </div>
        <div class="campos_table">
          <?php echo($rsConsulta['imagem']) ?>
        </div>
        <div class="campos_table">
          <a href="modal_cms_imagem_produto_parceiro.php?modo=excluir&id_imagem_produto_parceiro=<?php echo($rsConsulta['$id_imagem_produto_parceiro'])?>">
              <img src="../pictures/icones/delete1.png">
          </a>
        </div>
        <div class="campos_table">
          <a href="modal_cms_imagem_produto_parceiro.php?modo=consulta_editar&id_imagem_produto_parceiro=<?php echo($rsConsulta['$id_imagem_produto_parceiro'])?>">
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
