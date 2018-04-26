<?php

  // Imports
  require_once('../../controller/Parceiro_class.php');
  require_once('../../controller/Veiculo_class.php');

  $parceiro = Parceiro::obterDadosParceiroByName($_GET['nomeParceiro']);
  $imagens = Veiculo::getImagensVeiculoByNomeParceiro($_GET['nomeParceiro']);

  // print_r($parceiro);
  print_r($imagens);

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
        <div id="foto_principal" class="principal sombra_preta_10">
          <img id="img_foto_principal" src="<?=$imagens[0]->imagem?>" alt="Moto teste" class="blur">
          <!-- <img src="../pictures/galeria/moto_dois.jpg" alt="Moto teste" class="blur"> -->
          <div class="segura_botao display_none conteudo negrito">
            <div class="ocultar">
              <div class="ti">
                Ocultar
              </div>
              <a id="ocultar_foto_principal" href="#">
                <i class="material-icons bt fs_30">remove_red_eye</i>
              </a>
              <!-- <button type="button" class="bt" name="bt_ocultar_moto"><img  src="../pictures/icons/visualizar.svg" alt="Moto teste"></button> -->
            </div>
            <div class="excluir">
              <div class="ti">
                Deletar
              </div>
              <a href="#">
                <i class="material-icons fs_30 bt">delete_forever</i>
              </a>
              <!-- <button type="button" class="bt" name="bt_delete_moto"><img src="../pictures/icons/delete.svg" alt="Moto teste"></button> -->
            </div>
          </div>
        </div>
      </div>
      <!-- Informativo sobre a imagem selecionada -->
      <div class="segura_inf">
        <div class="texto_inf conteudo sombra_preta_2 transparente fs_18">
          <div class="inf_parceiro">
            Parceiro: <?=$parceiro->nome_fantasia?>
          </div>
          <div class="inf_img">
            E-mail: <?=$parceiro->email?> <br>
            Telefone: <?=$parceiro->telefone?> <br>
            Cidade: <?=$parceiro->cidade?> <br>
            Estado: <?=$parceiro->estado?> <br>
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
            <?php
              for ($i=0; $i < sizeof($imagens); $i++)
              {
            ?>
                <li><img onclick="obterCLick('<?=$imagens[$i]->imagem?>', <?=$imagens[$i]->id_imagem_veiculo_parceiro?>)" src="<?=$imagens[$i]->imagem?>" alt="Veiculo"></li>
            <?php
              }
            ?>
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
            visible: 1
        })

        $('#ocultar_foto_principal').click(function(e){
          e.preventDefault();
          console.log('ok');
        });

      });

      function obterCLick(caminhoImg, idVeiculoParceiro)
      {
        // Troca a imagem da foto principal (#img_foto_principal)
        $('#img_foto_principal').attr('src',caminhoImg);

        // Insere o data atribute na div foto_principal
        $('#foto_principal').attr('data-id',idVeiculoParceiro);

        // OBTENDO O DATA ATRIBUTE
        console.log($('#foto_principal').data('id'));

      }

    </script>

  </body>
</html>
