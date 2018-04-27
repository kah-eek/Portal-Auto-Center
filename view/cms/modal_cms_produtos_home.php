<?php
  // Imports
  require_once('../../controller/produto_class.php');
  require_once('../../controller/MySql_class.php');
  require_once('../../model/ProdutoDAO.php');
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Produtos Cadastrados
      </div>
    </div>
    <div class="container_produto_ph margem_t_10 float_left margem_l_50">
    <!-- PARTE PRODUTO -->
      <?php

      // Obtém os produtos existentes no DB
      $produtosSimples = Produto::obterDetalhesSimplesProdutos();

      for ($i=0; $i < sizeof($produtosSimples); $i++) {
        ?>

        <div class="item_produto_ph float_left margem_l_40 margem_t_30">
          <!-- IMAGEM -->
          <div class="container_img_produto_ph float_left centro_lr">
            <div class="item_img_produto_ph centro_lr margem_t_20 bg_branco">
              <img src="<?=$produtosSimples[$i]->imagem?>" alt="">
            </div>
          </div>
          <!-- NOME E VALOR DO PRODUTO -->
          <div class="container_caixa_desc_ph float_left centro_lr">
            <div class="item_caixa_desc_ph preenche_t_10 fs_25 negrito align_center borda_preta_1 bg_verde_vivo sombra_preta_20 margem_t_10 centro_lr">
              <?=$produtosSimples[$i]->nome?>
            </div>
          </div>

          <div class="container_caixa_desc_ph float_left centro_lr">
            <div class="item_caixa_desc_ph preenche_t_10 fs_25 negrito align_center borda_preta_1 bg_verde_vivo sombra_preta_20 margem_t_20 centro_lr">
              <?=$produtosSimples[$i]->preco?>
            </div>
          </div>
        </div>
        <!-- PARTE CHECKBOX -->
        <div class="container_ckb_ph float_left bg_verde_vivo margem_t_180">

          <div class="item_ckb_ph float_left margem_l_15 margem_t_10">
            <input class="item_ckb margem_l_10" type="checkbox" name="ckb_ph" value="">
          </div>

          <div class="txt_ativo float_left">
            <div class="item_txt_ativo preenche_t_10 fs_25 align_center">
              Ativo
            </div>
          </div>
        </div>
        <?php
        }
        ?>
    </div>
  </div>
</html>
