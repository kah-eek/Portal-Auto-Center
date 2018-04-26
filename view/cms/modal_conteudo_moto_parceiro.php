<?php

  // Imports
  require_once('../../controller/Parceiro_class.php');

  echo $_GET['nomeParceiro'];

  $parceiro = Parceiro::obterDadosParceiroByName($_GET['nomeParceiro']);

  var_dump($parceiro);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_galeria.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/carrosel/jquery.js"></script>
    <script src="../js/carrosel/jcarousellite.js"></script>
  </head>
  <body>
    <div class="container_interna_moto">
      <!-- Lugar onde a imagem principal aparece -->
      <div class="segura_principal">
        <div class="principal sombra_preta_10">
          <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste" class="blur">
          <div class="segura_botao display_none conteudo negrito">
            <div class="ocultar">
              <div class="ti">
                Ocultar
              </div>
              <button type="button" class="bt" name="bt_ocultar_moto"><img  src="../pictures/icons/visualizar.svg" alt="Moto teste"></button>
            </div>
            <div class="excluir">
              <div class="ti">
                Deletar
              </div>
              <button type="button" class="bt" name="bt_delete_moto"><img src="../pictures/icons/delete.svg" alt="Moto teste"></button>
            </div>
          </div>
        </div>
      </div>
      <!-- Informativo sobre a imagem selecionada -->
      <div class="segura_inf">
        <div class="texto_inf conteudo sombra_preta_2 transparente fs_18">
          <div class="inf_parceiro">
            Parceiro:
          </div>
          <div class="inf_img">
            efnbf ibiuabibfi iubafibi ijfosn fmeimsm m
          </div>
        </div>
      </div>
      <!-- Demais imagens referente ao parceiro -->
      <div class="segura_outras">
        <div class="menu_carrosel">
          <a href="#" class="prev_moto" title="Anterior">
            <img src="../pictures/icons/previous.svg" alt="Voltar">
          </a>
        </div>
        <div class="carrossel_moto sombra_preta_10">
          <ul>
            <li><img src="../pictures/galeria/moto_um.jpg" alt="Moto teste"></li>
            <li><img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste"></li>
            <li><img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste"></li>
            <li><img src="../pictures/galeria/moto_quatro.jpg" alt="Moto teste"></li>
            <li><img src="../pictures/galeria/moto_um.jpg" alt="Moto teste"></li>
            <li><img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste"></li>
            <li><img src="../pictures/galeria/moto_tres.jpg" alt="Moto teste"></li>
            <li><img src="../pictures/galeria/moto_quatro.jpg" alt="Moto teste"></li>
          </ul>
        </div>
        <div class="menu_carrosel">
          <a href="#" class="next_moto" title="Próximo">
            <img src="../pictures/icons/next.svg" alt="Avançar">
          </a>
        </div>
      </div>
    </div>

    <script>
      $(function(){
        $(".carrossel_moto"). jCarouselLite({
            btnPrev: '.prev_moto',
            btnNext: '.next_moto',
            visible: 3
        })
      });
    </script>

  </body>
</html>
