<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  $conexao=mysql_connect('caiqueoliveira.mysql.dbaas.com.br', 'caiqueoliveira', 'caique@2018');

  mysql_select_db('caiqueoliveira');
#####################################################################################################################################################################################
  $id_compatibilidade_produto_veiculo="";
  $id_produto="";
  $id_veiculo="";
  $btnCadastro="Cadastrar";
// #####################################################################################################################################################################################
// if(isset($_GET['modo']))//MODO EXCLUIR
//   {
//       $modo=$_GET['modo'];
//
//       if($modo=='excluir')
//       {
//           $id_compatibilidade_produto_veiculo=$_GET['id_compatibilidade_produto_veiculo'];
//
//           $sql = "delete from tbl_compatibilidade_produto_veiculo where id_compatibilidade_produto_veiculo=".$id_compatibilidade_produto_veiculo;
//           mysql_query($sql);
//
//
//       header('location:modal_cms_compatibilidade_produto_veiculo.php');
// #####################################################################################################################################################################################
// }else if($modo=='consulta_editar')//MODO EDITAR
//        {
//            $btnCadastro="Editar";
//            $id_compatibilidade_produto_veiculo=$_GET['id_compatibilidade_produto_veiculo'];
//
//            $_SESSION['id']= $id_compatibilidade_produto_veiculo;
//
//           //  $sql = "SELECT tbl_anuncio_produto_parceiro.preco, tbl_anuncio_produto_parceiro.ativo, tbl_anuncio_produto_parceiro.id_produto, tbl_produto.nome as nome_produto FROM tbl_anuncio_produto_parceiro INNER JOIN
//           //  tbl_produto on tbl_anuncio_produto_parceiro.id_produto = tbl_produto.id_produto WHERE tbl_anuncio_produto_parceiro.id_anuncio_produto=".$id_anuncio_produto;
//
//            $sql="SELECT tbl_compatibilidade_produto_veiculo.id_veiculo, tbl_compatibilidade_produto_veiculo.id_produto, tbl_produto.nome as nome_produto FROM tbl_compatibilidade_produto_veiculo
//            INNER JOIN tbl_produto ON tbl_compatibilidade_produto_veiculo.id_produto = tbl_produto.id_produto WHERE tbl_compatibilidade_produto_veiculo.id_compatibilidade_produto_veiculo=".$id_compatibilidade_produto_veiculo;
//
//            $sql="SELECT tbl_compatibilidade_produto_veiculo.id_veiculo, tbl_compatibilidade_produto_veiculo.id_produto, tbl_veiculo.placa as nome_placa FROM tbl_compatibilidade_produto_veiculo
//            INNER JOIN tbl_veiculo ON tbl_compatibilidade_produto_veiculo.id_veiculo = tbl_veiculo.id_veiculo WHERE tbl_compatibilidade_produto_veiculo.id_compatibilidade_produto_veiculo=".$id_compatibilidade_produto_veiculo;
//
//            $select = mysql_query($sql);
//
//             if($rsConsulta=mysql_fetch_array($select)){
//
//                 $id_produto=$rsConsulta['id_produto'];
//                 $nomeProduto=$rsConsulta['nome_produto'];
//                 $id_veiculo=$rsConsulta['id_veiculo'];
//                 $nomePlaca=$rsConsulta['nome_placa'];
//
//           }
//        }
//    }
#####################################################################################################################################################################################
  //INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){
  $id_produto=$_POST["sltProduto"];
  $id_veiculo=$_POST["sltVeiculo"];

  if($_POST["btnCadastro"]=='Cadastrar'){
    $sql="INSERT INTO tbl_compatibilidade_produto_veiculo(id_produto,id_veiculo)
    VALUES ('".$id_produto."','".$id_veiculo."')";

  }else if($_POST["btnCadastro"]=='Editar'){
    $sql="UPDATE tbl_compatibilidade_produto_veiculo SET id_produto='".$id_produto."', id_veiculo='".$id_veiculo."' WHERE id_compatibilidade_produto_veiculo=".$_SESSION['id'];
  }
      mysql_query($sql);

      header('location:modal_cms_compatibilidade_produto_veiculo.php');
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
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_modal_compatibilidade_produto_veiculo.css">

  </head>
  <body>
   <form name="frmcadastroprodutoveiculo" method="post" action="modal_cms_compatibilidade_produto_veiculo.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Compatibilidade Veículo Parceiro.
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Produto
        </div>
        <div class="name_campo" >
          Veiculo
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
          <select name="sltVeiculo" id="float" class="color">
            <?php
            if($id_veiculo == ""){
                $id_veiculo = 0;
                ?>
                 <option>Selecione</option>
              <?php
            }else{
                ?>
        <option value="<?php echo($id_veiculo); ?>">
            <?php echo($id_veiculo);?></option>
        <?php

            }
            $sql = "SELECT id_veiculo, placa as nome_placa FROM tbl_veiculo Where id_veiculo <> ".$id_veiculo;
            $select=mysql_query($sql);

           while($rsProduto = mysql_fetch_array($select)){
               ?>

            <option value="<?php echo($rsProduto['id_veiculo']); ?>">
            <?php echo($rsProduto['nome_placa']); ?> </option>

        <?php
           }
        ?>
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
          Veículo
        </div>
        <div class="campos_table">
          Excluir
        </div>
        <div class="campos_table">
          Editar
        </div>

      <?php

      // $sql="SELECT tbl_anuncio_produto_parceiro.preco, tbl_anuncio_produto_parceiro.ativo, tbl_anuncio_produto_parceiro.id_produto, tbl_anuncio_produto_parceiro.id_anuncio_produto, tbl_produto.nome as nomeProduto
      // from tbl_anuncio_produto_parceiro inner join tbl_produto on tbl_anuncio_produto_parceiro.id_produto = tbl_produto.id_produto where tbl_anuncio_produto_parceiro.id_anuncio_produto
      // order by id_anuncio_produto desc";

      // $sql="SELECT tbl_compatibilidade_produto_veiculo.id_produto, tbl_compatibilidade_produto_veiculo.id_veiculo, tbl_compatibilidade_produto_veiculo.id_compatibilidade_produto_veiculo, tbl_produto.nome as nomeProduto
      // FROM tbl_compatibilidade_produto_veiculo INNER JOIN tbl_produto ON tbl_compatibilidade_produto_veiculo.id_produto = tbl_produto.id_produto WHERE tbl_compatibilidade_produto_veiculo.id_compatibilidade_produto_veiculo
      // ORDER BY id_compatibilidade_produto_veiculo DESC";
      //
      // $sql="SELECT tbl_compatibilidade_produto_veiculo.id_produto, tbl_compatibilidade_produto_veiculo.id_veiculo, tbl_compatibilidade_produto_veiculo.id_compatibilidade_produto_veiculo, tbl_produto.placa as nomePlaca
      // FROM tbl_compatibilidade_produto_veiculo INNER JOIN tbl_veiculo ON tbl_compatibilidade_produto_veiculo.id_veiculo = tbl_produto.id_veiculo WHERE tbl_compatibilidade_produto_veiculo.id_compatibilidade_produto_veiculo
      // ORDER BY id_compatibilidade_produto_veiculo DESC";

      $select=mysql_query($sql);

      while($rsConsulta=mysql_fetch_array($select)){
        ?>
        <div class="campos_table">
          <?php echo($rsConsulta['nomeProduto']) ?>
        </div>
        <?php echo($rsConsulta['nomePlaca']) ?>
        <div class="campos_table">
        </div>
        <div class="campos_table">
          <a href="modal_cms_compatibilidade_produto_veiculo.php?modo=excluir&id_compatibilidade_produto_veiculo=<?php echo($rsConsulta['id_compatibilidade_produto_veiculo'])?>">
              <img src="../pictures/icones/delete1.png">
          </a>
        </div>
        <div class="campos_table">
          <a href="modal_cms_compatibilidade_produto_veiculo.php?modo=consulta_editar&id_compatibilidade_produto_veiculo=<?php echo($rsConsulta['id_compatibilidade_produto_veiculo'])?>">
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
