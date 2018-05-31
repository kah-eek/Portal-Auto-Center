
<?php
session_start();
// echo($_SESSION['id_parceiro']);
  // echo($_SESSION['id_parceiro1']); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/parceiro/cms_adm_parceiro.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>
    <div class="container_conteudo_central_ap centro_lr">
      <!-- MENU LATERAL -->
      <div class="container_menu_l_ap float_left borda_preta_1 margem_l_20">
        <div class="container_img_menu_ap centro_lr borda_preta_1 margem_t_20">
          <div class="item_img_menu_l_ap ">

          </div>
        </div>
        <!-- NOME USUÁRIO -->
        <div class="container_nome_usuario margem_t_10">
          <div class="item_nome_usuario centro_lr align_center preenche_t_15 fs_18 negrito txt_branco">
            Nome de Usuário
          </div>
        </div>
      </div>
      <!-- GERENCIAMENTO -->
      <div class="container_gerenciamento_ap float_left">
        <!-- VEICULOS -->
        <div class="container_caixa_gerenciamento float_left borda_preta_1 margem_l_40 margem_t_10">
          <div id="gerenciarVeiculos" class="item_caixa_gerenciamento align_center preenche_t_15 fs_18 negrito margem_t_150 borda_preta_1">
            <a href="modal_cms_cadastro_veiculo.php">Cadastrar veiculo</a>
          </div>
        </div>
        <div class="container_caixa_gerenciamento float_left borda_preta_1 margem_l_40 margem_t_10">
          <div class="item_caixa_gerenciamento align_center preenche_t_15 fs_18 negrito margem_t_150 borda_preta_1">
            <a href="consultar_veiculo_parceiro.php">Gerenciar Veiculos</a>
          </div>
        </div>
        <!-- PRODUTOS -->
        <div class="container_caixa_gerenciamento float_left borda_preta_1 margem_l_40 margem_t_10">
          <div class="item_caixa_gerenciamento align_center preenche_t_15 fs_18 negrito margem_t_150 borda_preta_1">
            <a href="modal_cms_produtos_home.php">Cadastrar Produtos</a>
          </div>
        </div>
        <div class="container_caixa_gerenciamento float_left margem_l_5 borda_preta_1 margem_l_40 margem_t_10">
          <div class="item_caixa_gerenciamento align_center preenche_t_15 fs_18 negrito margem_t_150 borda_preta_1">
            <a href="modal_cms_visualiza_produtos_home.php">Gerenciar Produtos</a>
          </div>
        </div>
        <!-- SERVIÇOS -->
        <div class="container_caixa_gerenciamento float_left margem_l_5 borda_preta_1 margem_l_40 margem_t_10">
          <div class="item_caixa_gerenciamento align_center preenche_t_15 fs_18 negrito margem_t_150 borda_preta_1">
            <a href="modal_cms_cad_servicos.php">Cadastrar Serviços</a>
          </div>
        </div>
        <div class="container_caixa_gerenciamento float_left margem_l_5 borda_preta_1 margem_l_40 margem_t_10">
          <div class="item_caixa_gerenciamento align_center preenche_t_15 fs_18 negrito margem_t_150 borda_preta_1">
            <a href="modal_cms_gerenciar_produto.php">Gerenciar produtos</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
