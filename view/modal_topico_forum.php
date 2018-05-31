<?php

require_once("modulo.php");

  session_start();

  $foto="";
  $mensagem="";
  $titulo="";
  $id_categoria_topico_forum="";
  $id_cliente="";
  $slt_categoria="";

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('dbautofast');
//////////////////////////////////////////////////////

if(isset($_POST["btnSalvar"]))
{
  $foto=Upload($_FILES["imagem"]);
  $mensagem=$_POST["txtMensagem"];
  $titulo=$_POST["txtTitulo"];
  $id_categoria_topico_forum=$_POST["sltCategoria"];
  // $id_cliente=$_POST["id_cliente"];

  if($_POST["btnSalvar"]=='Salvar')
  {

    $sql = "INSERT INTO tbl_topico_forum (foto,mensagem,titulo,id_categoria_topico_forum,id_cliente) values ('".$foto."','".$mensagem."','".$titulo."','".$id_categoria_topico_forum."','1')";

  }

  mysql_query($sql);
  // echo ($sql);
  header('location:modal_topico_forum.php');

}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/modal_topico_forum.css">
    <link rel="stylesheet" href="css/padroes.css">
  </head>
  <body>
    <div class="container_principal_mf centro_lr">
      <form class="container_form_mf" action="modal_topico_forum.php" method="post" enctype="multipart/form-data">
        <div class="container_imagem_cliente centro_lr">

          <div class="item_imagem_cliente">
            <input class="input_mf" type="file" name="imagem" value="<?php echo($foto); ?>">
          </div>

        </div>
        <div class="container_mensagem centro_lr margem_t_20">
          <div class="item_mensagem">
            <input class="input_mf" type="text" name="txtMensagem" placeholder="Insira uma Mensagem" value="">
          </div>
        </div>
        <div class="container_titulo_topico margem_t_20 centro_lr">
          <div class="item_titulo_topico">
            <input class="input_mf" type="text" placeholder="Insira um Titulo" name="txtTitulo" value="">
          </div>
        </div>
        <div class="container_categorias margem_t_20 centro_lr">
          <select name="sltCategoria" id="float" class="color">
            <?php

            if($id_categoria_topico_forum == ""){
                $id_categoria_topico_forum = 0;
                ?>
                 <option>Selecione</option>
              <?php
            }else{
                ?>
            <option value="<?php echo($id_categoria_topico_forum); ?>">
            <?php echo($id_categoria_topico_forum);?></option>
            <?php

            }
            $sql = "SELECT id_categoria_topico_forum, categoria as categoria FROM tbl_categoria_topico_forum Where id_categoria_topico_forum <> ".$id_categoria_topico_forum;
            $select=mysql_query($sql);

            while($rsCategoria = mysql_fetch_array($select)){
               ?>

            <option value="<?php echo($rsCategoria['id_categoria_topico_forum']); ?>">
            <?php echo($rsCategoria['categoria']); ?> </option>

            <?php
            }
            ?>

          </select>
        </div>
        <div class="container_bt margem_t_50">
          <input class="btn_salvar" type="submit" name="btnSalvar" value="Salvar">
        </div>
      </form>
    </div>
  </body>
</html>
