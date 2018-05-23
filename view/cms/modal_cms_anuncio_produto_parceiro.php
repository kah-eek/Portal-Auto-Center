<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('db_auto_center');
#####################################################################################################################################################################################
  $id_anuncio_produto="";
  $id_produto="";
  $preco="";
  $cbxAtivo="";
  $btnCadastro="Cadastrar";
#####################################################################################################################################################################################
if(isset($_GET['modo']))//MODO EXCLUIR
  {
      $modo=$_GET['modo'];

      if($modo=='excluir')
      {
          $id_anuncio_produto=$_GET['id_anuncio_produto'];

          $sql = "delete from tbl_anuncio_produto_parceiro where id_anuncio_produto=".$id_anuncio_produto;
          mysql_query($sql);


      header('location:modal_cms_anuncio_produto_parceiro.php');
#####################################################################################################################################################################################
}else if($modo=='consulta_editar')//MODO EDITAR
       {
           $btnCadastro="Editar";
           $id_anuncio_produto=$_GET['id_anuncio_produto'];

           $_SESSION['id']= $id_anuncio_produto;

           $sql = "SELECT tbl_anuncio_produto_parceiro.preco, tbl_anuncio_produto_parceiro.ativo, tbl_anuncio_produto_parceiro.id_produto, tbl_produto.nome as nome_produto FROM tbl_anuncio_produto_parceiro INNER JOIN
           tbl_produto on tbl_anuncio_produto_parceiro.id_produto = tbl_produto.id_produto WHERE tbl_anuncio_produto_parceiro.id_anuncio_produto=".$id_anuncio_produto;

           $select = mysql_query($sql);

            if($rsConsulta=mysql_fetch_array($select)){

                $preco=$rsConsulta['preco'];
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
  $preco=$_POST["txtPreco"];
  $cbxAtivo=$_POST["sltAtivo"];

  if($_POST["btnCadastro"]=='Cadastrar'){
    $sql="INSERT INTO tbl_anuncio_produto_parceiro(id_produto,preco,ativo)
    VALUES ('".$id_produto."', $preco, '".$cbxAtivo."')";

  }else if($_POST["btnCadastro"]=='Editar'){
    $sql="UPDATE tbl_anuncio_produto_parceiro SET preco='".$preco."', ativo='".$cbxAtivo."', id_produto='".$id_produto."' WHERE id_anuncio_produto=".$_SESSION['id'];
  }
      mysql_query($sql);

      header('location:modal_cms_anuncio_produto_parceiro.php');
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
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_anuncio_produto_parceiro.css">

  </head>
  <body>
   <form name="frmcadastroanuncioprodutosparceiro" method="post" action="modal_cms_anuncio_produto_parceiro.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Cadastrar Anúncios de Produtos.
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Produto
        </div>
        <div class="name_campo" >
          Preço
        </div>
        <div class="name_campo">
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
          <input type="txtPreco" name="txtPreco" value="<?php echo($preco); ?>" id="float" class="color">
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
          Preço
        </div>
        <div class="campos_table">
          Excluir
        </div>
        <div class="campos_table">
          Editar
        </div>

      <?php

      $sql="SELECT tbl_anuncio_produto_parceiro.preco, tbl_anuncio_produto_parceiro.ativo, tbl_anuncio_produto_parceiro.id_produto, tbl_anuncio_produto_parceiro.id_anuncio_produto, tbl_produto.nome as nomeProduto
      from tbl_anuncio_produto_parceiro inner join tbl_produto on tbl_anuncio_produto_parceiro.id_produto = tbl_produto.id_produto where tbl_anuncio_produto_parceiro.id_anuncio_produto
      order by id_anuncio_produto desc";

      $select=mysql_query($sql);

      while($rsConsulta=mysql_fetch_array($select)){
        ?>
        <div class="campos_table">
          <?php echo($rsConsulta['nomeProduto']) ?>
        </div>
        <div class="campos_table">
          <?php echo($rsConsulta['preco']) ?>
        </div>
        <div class="campos_table">
          <a href="modal_cms_anuncio_produto_parceiro.php?modo=excluir&id_anuncio_produto=<?php echo($rsConsulta['id_anuncio_produto'])?>">
              <img src="../pictures/icones/delete1.png">
          </a>
        </div>
        <div class="campos_table">
          <a href="modal_cms_anuncio_produto_parceiro.php?modo=consulta_editar&id_anuncio_produto=<?php echo($rsConsulta['id_anuncio_produto'])?>">
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
