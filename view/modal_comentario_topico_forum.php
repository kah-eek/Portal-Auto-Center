<?php

require_once("modulo.php");

session_start();

$foto="";
$mensagem="";
$id_comentario_topico_forum="";
$id_topico_forum="";
$id_cliente="";
$slt_topicos="";

$conexao=mysql_connect('localhost', 'root', 'bcd127');

mysql_select_db('dbautofast');
////////////////////////////////////////////////

if(isset($_POST["btnSalvar"]))
{
  $foto=Upload($_FILES["imagem"]);
  $mensagem=$_POST["txtMensagem"];
  $id_topico_forum=$_POST["sltTopicos"];

  if($_POST["btnSalvar"]=='Salvar')
  {
    $sql = "INSERT INTO tbl_comentario_topico_forum (id_topico_forum,id_cliente,mensagem,foto) values ('".$id_topico_forum."','1','".$mensagem."','".$foto."')";

  }

  mysql_query($sql);
  // echo ($sql);
  header('location:modal_comentario_topico_forum.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/comentario_topico_forum.css">
    <link rel="stylesheet" href="css/padroes.css">
  </head>
  <body>
    <div class="container_principal_ctf centro_lr">
      <form class="container_form_ctf" action="modal_comentario_topico_forum.php" method="post" enctype="multipart/form-data">
        <div class="container_img_rf centro_lr">

          <div class="item_img_rf">
            <input class="input_rf" type="file" name="imagem" value="">
          </div>

        </div>
        <div class="container_mensagem_rf centro_lr margem_t_20">
          <div class="item_mensagem_rf">
            <input class="input_rf" type="text" name="txtMensagem" placeholder="Insira uma Mensagem" value="">
          </div>
        </div>
        <div class="container_topicos margem_t_20 centro_lr">
          <select name="sltTopicos" id="float" class="color">
            <?php
            if($id_topico_forum == ""){
                $id_topico_forum = 0;
                ?>
                 <option>Selecione</option>
              <?php
            }else{
                ?>
        <option value="<?php echo($id_topico_forum); ?>">
            <?php echo($id_topico_forum);?></option>
        <?php

            }
            $sql = "SELECT id_topico_forum, titulo as nome_titulo FROM tbl_topico_forum Where id_topico_forum <> ".$id_topico_forum;
            $select=mysql_query($sql);

           while($rsTopico = mysql_fetch_array($select)){
               ?>

            <option value="<?php echo($rsTopico['id_topico_forum']); ?>">
            <?php echo($rsTopico['nome_titulo']); ?> </option>

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
