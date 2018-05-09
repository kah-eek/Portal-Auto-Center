<?php
require_once("../../database/conect.php");
Conexao_db();
if(isset($_GET['escolha'])){
    $escolha = $_GET['escolha'];
    $id = $_GET['id'];

    //if da escolha excluir
    if($escolha == 'excluirFabricante'){
        $sql = "DELETE FROM tbl_fabricante WHERE id_fabricante=".$id;
        mysql_query($sql);
        // echo ($sql);
        header('location:modal_cms_cadastro_modelo_fabricante.php');
    }elseif($escolha == 'excluirModelo'){
        $sql = "DELETE FROM tbl_modelo_veiculo WHERE id_modelo_veiculo=".$id;
        mysql_query($sql);
        // echo ($sql);
        header('location:modal_cms_cadastro_modelo_fabricante.php');
    }
}

if(isset($_POST["btnSalvarFab"]))
{
    //Resgatar os dados fornecidos pelo usuario
    //usando o metod POST, conforme escolhido pelo Form
    $fabricante=$_POST["txtFabricante"];

    addslashes($sql = "insert into tbl_fabricante (fabricante) values ('".$fabricante."');");

    //Executa o script no BD
    mysql_query($sql);

    header('location:modal_cms_cadastro_modelo_fabricante.php');
    //Dar um echo so sql sempre que der erro no insert, para ver qual é o erro
    // echo ($sql);
}elseif(isset($_POST["btnSalvarModelo"])){

  $slcFabricante=$_POST["slcFabricante"];
  $modelo=$_POST["txtModelo"];

  addslashes($sql = "insert into tbl_modelo_veiculo (id_fabricante, modelo) values ('".$slcFabricante."','".$modelo."');");

  //Executa o script no BD
  mysql_query($sql);

  header('location:modal_cms_cadastro_modelo_fabricante.php');
  //Dar um echo so sql sempre que der erro no insert, para ver qual é o erro
 // echo($sql);
}
 ?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" type="text/css" href="../css/cms/modal_cms_cadastro_modelo_fabricante.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  <body>
    <div class="container_cadastra">
      <form class="" action="modal_cms_cadastro_modelo_fabricante.php" method="post">
        <div class="container_cadFabricante">
          CADASTRAR FABRICANTE
          <input type="text" name="txtFabricante" value="">
          <input type="submit" name="btnSalvarFab" value="Salvar">
        </div>
      </form>
      <form class="" action="modal_cms_cadastro_modelo_fabricante.php" method="post">
        <div class="container_modelo">
          CADASTRAR MODELO
          <select name="slcFabricante">
            <?php
            $sql = "SELECT * FROM tbl_fabricante";
            $select = mysql_query($sql);
            while ($rsMF = mysql_fetch_array($select))
            {

              ?>
            <option value="<?php echo($rsMF['id_fabricante']) ?>"><?php echo($rsMF['fabricante']) ?></option>
            <?php
            }
             ?>
          </select>
          <input type="text" name="txtModelo" value="">
          <input type="submit" name="btnSalvarModelo" value="Salvar">
        </div>
      </form>
    </div>
    <form class="" action="modal_cms_cadastro_modelo_fabricante.php" method="get">
      <div class="container_view_fab">
      <?php
      $sql = "SELECT * FROM tbl_fabricante";
      $select = mysql_query($sql);
      while ($rsMF = mysql_fetch_array($select))
      {
        ?>
        <div class="fabricantes">
        <?php echo ($rsMF['fabricante']); ?>
        <a href="modal_cms_cadastro_modelo_fabricante.php?escolha=excluirFabricante&id=<?php echo($rsMF['id_fabricante']);?>">
          <i class="material-icons" style="font-size:30px;">delete_forever</i>
        </a>
        <a href="modal_cms_cadastro_modelo_fabricante.php?escolha=editarFabricante&id=<?php echo($rsMF['id_fabricante']);?>">
          <i class="material-icons" style="font-size:30px;">remove_red_eye</i>
        </a>
        </div>
      <?php
        }
       ?>
       </div>
     </form>
     <form class="" action="modal_cms_cadastro_modelo_fabricante.php" method="get">
      <div class="container_view_mod">
        <?php
        $sql = "SELECT * FROM tbl_modelo_veiculo";
        $select = mysql_query($sql);
        while ($rsMF = mysql_fetch_array($select))
        {
          ?>
        <div class="modelos">
          <?php echo ($rsMF['modelo']); ?>
          <a href="modal_cms_cadastro_modelo_fabricante.php?escolha=excluirModelo&id=<?php echo($rsMF['id_modelo_veiculo']);?>">
            <i class="material-icons" style="font-size:30px;">delete_forever</i>
          </a>
          <a href="modal_cms_cadastro_modelo_fabricante.php?escolha=editarModelo&id=<?php echo($rsMF['id_modelo_veiculo']);?>">
            <i class="material-icons" style="font-size:30px;">remove_red_eye</i>
          </a>
        </div>
        <?php
          }
         ?>
      </div>
    </form>
  </body>
</html>
