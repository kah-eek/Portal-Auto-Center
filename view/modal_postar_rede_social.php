<?php
require_once("../database/conect.php");
Conexao_db();

require_once("moduloPerfil.php");

$botao="Salvar";

if(isset($_POST["btnSalvar"]))
{
    //Resgatar os dados fornecidos pelo usuario
    //usando o metod POST, conforme escolhido pelo Form
    $titulo=$_POST["txtTitulo"];
    $descricao=$_POST["txtDescricao"];
    $imagem=Upload($_FILES["imagem"]);

    if($_POST["btnSalvar"]=='Salvar')
    {
      //Monta o Script para enviar para o BD
      $sql = "insert into tbl_post_rede_social (post, foto, titulo, id_usuario) values ('".$descricao."','".$imagem."','".$titulo."','1')";

    }
    //Executa o script no BD
    mysql_query($sql);

   header('location:modal_postar_rede_social.php');
    //Dar um echo so sql sempre que der erro no insert, para ver qual é o erro
   // echo($sql);
}

 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modal Postar</title>
    <link rel="stylesheet" href="css/modal_postar_rede_social.css">
    <link rel="stylesheet" type="text/css" href="css/padroes.css">
    <script src="js/jquery.js"></script>
  </head>
  <body>
    <form class="" enctype="multipart/form-data"  method="post">
      <div class="container_geral">
        <div class="container_foto">
            <div id="wrapper">
              <label for="fileUpload">
                <div id="image-holder"></div>
                <input name="imagem" id="fileUpload" type="file"  class="display_none"><br />
              </label>
            </div>
          <!-- <input id="input_imagem" type="file" name="input_imagem" value="" class="display_none"> -->
        </div>
        <div class="container_titulo">
          <div class="carregar_titulo">
            <input type="text" name="txtTitulo" value="TITULO...">
          </div>
        </div>
        <div class="container_descricao">
          <div class="carregar_descricao">
            <textarea name="txtDescricao" rows="13" cols="64"></textarea>
          </div>
        </div>
        <div class="container_botao">
          <div class="botao_postar">
            <input type="submit" name="btnSalvar" value="<?php echo($botao) ?>">
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
<script>

  $("#fileUpload").on('change', function () {

    if (typeof (FileReader) != "undefined") {

        var image_holder = $("#image-holder");
        image_holder.empty();

        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "image"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

</script>
