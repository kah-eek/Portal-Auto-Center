<?php  ?>

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
    <div class="container_geral">
      <div class="container_foto">
          <div id="wrapper">
            <label for="fileUpload">
              <div id="image-holder"></div>
              <input id="fileUpload" type="file"  class="display_none"><br />
            </label>
          </div>
        <!-- <input id="input_imagem" type="file" name="input_imagem" value="" class="display_none"> -->
      </div>
      <div class="container_titulo">
        <div class="carregar_titulo">
          <input type="text" name="" value="TITULO...">
        </div>
      </div>
      <div class="container_descricao">
        <div class="carregar_descricao">
          <textarea name="descricao" rows="13" cols="64"></textarea>
        </div>
      </div>
      <div class="container_botao">
        <div class="botao_postar">
          <input type="submit" name="" value="Postar">
        </div>
      </div>
    </div>
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
