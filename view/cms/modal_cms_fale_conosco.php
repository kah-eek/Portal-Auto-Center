<?php
  // Imports
  require_once('../../controller/FaleConosco_class.php');
  require_once('../../controller/MySql_class.php');
  require_once('../../model/FaleConoscoDAO.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/cms/cms_modal_fale_conosco.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <div class="container_principal_fc float_left">
    <div class="container_titulo_fc margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_fc align_center preenche_t_20 fs_25 negrito">
        Fale Conosco
      </div>
    </div>
    <!-- VISUALIZAÇÃO DE CLIENTE -->
    <div class="container_visualiza_fc centro_lr margem_t_10">
      <div class="container_topicos_fc centro_lr">
        <div class="item_titulo_topicos_fc float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
          Nome
        </div>

        <div class="item_titulo_topicos_fc float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
          E-mail
        </div>

        <div class="item_titulo_topicos_fc float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
          Mensagem
        </div>

        <div class="ativo_ver_fc float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
          Delete
        </div>

        <div class="ativo_ver_fc float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
          Ver
        </div>
      </div>
      <?php

        // Obtém os clientes existentes no DB
        $faleConosco = FaleConosco::cadastrosFaleConosco();
        // var_dump($faleConosco);

        for ($i=0; $i < sizeof($faleConosco); $i++) {
      ?>

      <!-- DADOS QUE VIRÃO DO BANCO -->
        <div class="container_dados_topicos_fc margem_t_5">

            <div class="item_dados_topicos_fc float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <?=$faleConosco[$i]->nome?>
            </div>

            <div class="item_dados_topicos_fc float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <?=$faleConosco[$i]->email?>
            </div>

            <div class="item_dados_topicos_fc float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20 justificado">
              <?=$faleConosco[$i]->pergunta_sugestao_critica?>
            </div>
            <form id="frmExcluirFale" name="frmExcluirFale" action="index.html" method="post">
              <div class="ativo_ver_dados_fc float_left preenche_t_10 margem_l_10 align_center borda_preta_1 sombra_preta_20">
                <!-- <label for="btndeletaRegistro"> -->
                <a onclick="excluir(<?=$faleConosco[$i]->id_fale_conosco?>)" href="#">
                  <i class="material-icons" style="font-size:30px;">delete_forever</i>
                </a>
                <!-- </label> -->
                <!-- <input id="btndeletaRegistro" type="submit" name="btndeletaRegistro" value="" hidden> -->
              </div>
            </form>
            <div class="ativo_ver_dados_fc float_left preenche_t_10 margem_l_10 align_center borda_preta_1 sombra_preta_20">
              <i class="material-icons" style="font-size:30px;">visibility</i>
            </div>
        </div>
      <?php
        }
      ?>
  </div>
</html>
<script>
  function excluir(id_fale_conosco){

    $.ajax({
      type: 'POST',
      url: '../../router.php?controller=faleConosco&modo=excluir',
      data: {'id':id_fale_conosco},
      // processData: false,
      // contentType: false,
      cache:false,
      dataType:'json',
      success:function(response){
        console.log(response);

        if (response.status){alert('Dados excluidos com sucesso');}
      },
      error:function(jqXHR, textStatus, errorThrown){
        console.error(textStatus);
        console.error(jqXHR);
        console.error(errorThrown);
      }
    });

  }
</script>
