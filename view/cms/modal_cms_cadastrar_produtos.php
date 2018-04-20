<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/cms/cms_modal_cadastrar_produtos.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <div class="container_principal_cadastrar_produto float_left">

    <div class="container_titulo_cnp margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_cnp align_center preenche_t_20 fs_25 negrito">
        Cadastrar Novo Produto
      </div>
    </div>
    <!-- FORM CADASTRO DE PRODUTO -->
    <form class="form_cadastro_produto centro_lr margem_t_30" action="modal_cms_cadastrar_produtos.php" method="post">

      <div class="container_segura_infs float_left borda_preta_1 sombra_preta_20">
        <!-- INPUT NOME DO PRODUTO -->
        <div class="segura_input_cnp float_left margem_t_20 preenche_t_5">
          <input class="input_text_cnp txt_preto margem_l_20" placeholder="Nome do Produto" type="text" name="txt_nome_produto" value="">
        </div>

        <!-- INPUT QUANTIDADE DE EMBALAGEM -->
        <div class="segura_input_cnp float_left margem_t_20 preenche_t_5">
          <input class="input_text_cnp txt_preto margem_l_20" placeholder="Quantidade de Embalagem" type="text" name="txt_qtd_embalagem" value="">
        </div>

        <!-- DIV SELECT -->
        <div class="container_select margem_t_20 float_left">
          <select class="slc_tg borda_preta_1 margem_l_20" name="slc_tempo">
            <option value="">Tempo de Garantia</option>
          </select>
        </div>

        <!-- INPUT QUANTIDADE DE EMBALAGEM -->
        <div class="segura_input_cnp float_left margem_t_20 preenche_t_5">
          <input class="input_text_cnp txt_preto margem_l_20" placeholder="Observações" type="text" name="txt_obs" value="">
        </div>

        <div class="container_txtarea float_left margem_t_20">
          <div class="item_txtarea margem_l_20">
            <textarea class="textarea_desc fs_18" name="txt_area_cnp" rows="8" cols="80" placeholder="Descrição"></textarea>
          </div>
        </div>

        <!-- INPUT QUANTIDADE DE EMBALAGEM -->
        <div class="segura_input_cnp float_left margem_t_40 preenche_t_5">
          <input class="input_text_cnp txt_preto margem_l_220" placeholder="Valor do Produto $$" type="text" name="txt_valor_produto" value="">
        </div>
      </div>

      <div class="container_imagem float_left">
        <div class="item_imagem_cnp centro_lr margem_t_40 bg_verde_vivo sombra_preta_10">

        </div>
      </div>
    </form>
  </div>
</html>
