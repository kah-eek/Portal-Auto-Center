<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  require_once("modulo.php");

  session_start();

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('db_auto_center');
#####################################################################################################################################################################################
  $id_imagem_veiculo_cliente="";
  $id_modelo_veiculo="";
  $imagem="";
  $btnCadastro="Cadastrar";
// #####################################################################################################################################################################################
if(isset($_GET['modo']))//MODO EXCLUIR
  {
      $modo=$_GET['modo'];

      if($modo=='excluir')
      {
          $id_imagem_veiculo_cliente=$_GET['id_imagem_veiculo_cliente'];

          $sql = "delete from tbl_imagem_veiculo_cliente where id_imagem_veiculo_cliente=".$id_imagem_veiculo_cliente;
          mysql_query($sql);


      header('location:modal_cms_imagem_veiculo_cliente.php');
#####################################################################################################################################################################################
}else if($modo=='consulta_editar')//MODO EDITAR
       {
           $btnCadastro="Editar";
           $id_imagem_veiculo_cliente=$_GET['id_imagem_veiculo_cliente'];

           $_SESSION['id']= $id_imagem_veiculo_cliente;

           $sql = "SELECT tbl_imagem_veiculo_cliente.imagem, tbl_imagem_veiculo_cliente.id_veiculo_cliente, tbl_modelo_veiculo.id_veiculo_cliente as nome_modelo FROM tbl_modelo_veiculo INNER JOIN
           tbl_veiculo_cliente on tbl_imagem_veiculo_cliente.id_veiculo_cliente = tbl_veiculo_cliente.id_veiculo_cliente WHERE tbl_imagem_veiculo_cliente.id_imagem_veiculo_cliente=".$id_imagem_veiculo_cliente;

           $select = mysql_query($sql);

            if($rsConsulta=mysql_fetch_array($select)){

                $imagem=$rsConsulta['imagem'];
                $id_modelo_veiculo=$rsConsulta['id_veiculo_cliente'];
                $nomeModelo=$rsConsulta['nome_modelo'];
          }
       }
   }
#####################################################################################################################################################################################
  //INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){
  $id_modelo_veiculo=$_POST["sltVeiculo"];
  $imagem=$_POST["imagem"];

  if($_POST["btnCadastro"]=='Cadastrar'){
    $sql="INSERT INTO tbl_imagem_veiculo_cliente(id_veiculo_cliente,imagem)
    VALUES ('".$id_modelo_veiculo."', '".$imagem."')";

  }else if($_POST["btnCadastro"]=='Editar'){
    $sql="UPDATE tbl_imagem_veiculo_cliente SET imagem='".$imagem."', ativo='".$cbxAtivo."', id_veiculo_cliente='".$id_modelo_veiculo."' WHERE id_imagem_veiculo_cliente=".$_SESSION['id'];
  }
      mysql_query($sql);

      header('location:modal_cms_imagem_veiculo_cliente.php');
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
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_modal_imagem_veiculo_cliente.css">

  </head>
  <body>
   <form name="frmcadastroimagemveiculocliente" method="post" action="modal_cms_imagem_veiculo_cliente.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Cadastrar Imagens de Veículos.
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Veículo
        </div>
        <div class="name_campo" >
          Imagem
        </div>
      </div>
      <div class="preencher_inputs">
          <select name="sltVeiculo" id="float" class="color">
            <?php
            if($id_modelo_veiculo == ""){
                $id_modelo_veiculo = 0;
                ?>
                 <option>Selecione</option>
              <?php
            }else{
                ?>
        <option value="<?php echo($id_modelo_veiculo); ?>">
            <?php echo($id_modelo_veiculo);?></option>
        <?php

            }
            $sql = "SELECT id_modelo_veiculo, modelo as nome_modelo FROM tbl_modelo_veiculo Where id_modelo_veiculo <> ".$id_modelo_veiculo;
            $select=mysql_query($sql);

           while($rsVeiculo = mysql_fetch_array($select)){
               ?>

            <option value="<?php echo($rsVeiculo['id_modelo_veiculo']); ?>">
            <?php echo($rsVeiculo['nome_modelo']); ?> </option>

        <?php
           }
        ?>
          </select>
      </div>
      <div class="preencher_inputs">
         <input type="file" name="imagem" value="<?php echo($imagem)?>" class="color">
      </div>
        <div class="button">
          <input type="submit" name="btnCadastro" value="<?php echo($btnCadastro); ?>" >
        </div>

      </div>
      <div class="container_visualizar">
      <div class="campos_table">
        Veículo
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

    $sql="SELECT tbl_imagem_veiculo_cliente.imagem, tbl_imagem_veiculo_cliente.id_veiculo_cliente, tbl_imagem_veiculo_cliente.id_imagem_veiculo_cliente, tbl_modelo_veiculo.id_veiculo_cliente as nomeModelo
    FROM tbl_imagem_veiculo_cliente INNER JOIN tbl_modelo_veiculo on tbl_imagem_veiculo_cliente.id_modelo_veiculo = tbl_veiculo_cliente.id_modelo_veiculo WHERE tbl_imagem_veiculo_cliente.id_imagem_veiculo_cliente
    ORDER BY id_imagem_veiculo_cliente desc";

    echo($sql);

    $select=mysql_query($sql);

    while($rsConsulta=mysql_fetch_array($select)){
      ?>
      <div class="campos_table">
        <?php echo($rsConsulta['nomeModelo']) ?>
      </div>
      <div class="campos_table">
        <?php echo($rsConsulta['imagem']) ?>
      </div>
      <div class="campos_table">
        <a href="modal_cms_imagem_veiculo_cliente.php?modo=excluir&id_imagem_veiculo_cliente=<?php echo($rsConsulta['$id_imagem_veiculo_cliente'])?>">
            <img src="../pictures/icones/delete1.png">
        </a>
      </div>
      <div class="campos_table">
        <a href="modal_cms_imagem_veiculo_cliente.php?modo=consulta_editar&id_imagem_veiculo_cliente=<?php echo($rsConsulta['$id_imagem_veiculo_cliente'])?>">
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