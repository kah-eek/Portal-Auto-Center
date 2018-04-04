<?php
  // Importando o cabeçalho
  require_once("component/header.php");
?>

<!--
@autor Igor Rios
@data 31/03/2018
@descricao Página de Veiculos, Anuncio de veículos.
-->
  <div class="container_imagem_veiculos">
    <div class="fundo_opaco_veic preenche_t_250">
      <form action="veiculos.html" method="post">
        <div class="container_campo_pesquisa_veic centro_lr">
          <input required class="input_veic fs_60" type="text" name="txt_pesquisa" value="" placeholder="Search">

          <label for="btn_pesquisar">
            <i class="material-icons fs_50 txt_branco txt_sombra_1x1x1_preto outline_none display_block float_left sem_borda transparente preenche_t_10">
              search
            </i>
          </label>
          <input class="display_none" id="btn_pesquisar" type="submit" name="btn_pesquisar" value="">
        </div>
      </form>
    </div>
  </div>

  <!-- itens veículos -->
  <div class="container_segura_item_veic centro_lr transparente">
    <div class="container_item_veiculo borda_verde_vivo_2 bsuavizada_5 bg_cinza  margem_t_20 float_left">
        <div class="imagem_item_veiculo">
          <img src="pictures/veiculos/carro.jpg" title="Item Veículos" alt="Imagem de Carro"/>
        </div>
        <div class="descricao_nome align_center conteudo">
          Tígua
        </div>
        <div class="descricao_marca align_center preenche_5 txt_preto conteudo">
          VOLKSWAGEN
        </div>
        <div class="descricao_data align_center txt_preto conteudo">
          2012/2013
        </div>
      <div class="input_submit centro_lr transparente preenche_t_10">
        <input type="submit" name="btn_datalhes" value="Detalhes">
      </div>
    </div>

    <div class="container_item_veiculo borda_verde_vivo_2 bsuavizada_5 bg_cinza  margem_t_20 float_left">
        <div class="imagem_item_veiculo">
          <img src="pictures/veiculos/carro.jpg" title="Item Veículos" alt="Imagem de Carro"/>
        </div>
        <div class="descricao_nome align_center conteudo">
          Tígua
        </div>
        <div class="descricao_marca align_center preenche_5 txt_preto conteudo">
          VOLKSWAGEN
        </div>
        <div class="descricao_data align_center txt_preto conteudo">
          2012/2013
        </div>
      <div class="input_submit centro_lr transparente preenche_t_10">
        <input type="submit" name="btn_datalhes" value="Detalhes">
      </div>
    </div>

    <div class="container_item_veiculo borda_verde_vivo_2 bsuavizada_5 bg_cinza  margem_t_20 float_left">
        <div class="imagem_item_veiculo">
          <img src="pictures/veiculos/carro.jpg" title="Item Veículos" alt="Imagem de Carro"/>
        </div>
        <div class="descricao_nome align_center conteudo">
          Tígua
        </div>
        <div class="descricao_marca align_center preenche_5 txt_preto conteudo">
          VOLKSWAGEN
        </div>
        <div class="descricao_data align_center txt_preto conteudo">
          2012/2013
        </div>
      <div class="input_submit centro_lr transparente preenche_t_10">
        <input type="submit" name="btn_datalhes" value="Detalhes">
      </div>
    </div>

    <div class="container_item_veiculo borda_verde_vivo_2 bsuavizada_5 bg_cinza  margem_t_20 float_left">
        <div class="imagem_item_veiculo">
          <img src="pictures/veiculos/carro.jpg" title="Item Veículos" alt="Imagem de Carro"/>
        </div>
        <div class="descricao_nome align_center conteudo">
          Tígua
        </div>
        <div class="descricao_marca align_center preenche_5 txt_preto conteudo">
          VOLKSWAGEN
        </div>
        <div class="descricao_data align_center txt_preto conteudo">
          2012/2013
        </div>
      <div class="input_submit centro_lr transparente preenche_t_10">
        <input type="submit" name="btn_datalhes" value="Detalhes">
      </div>
    </div>
  </div>

<!-- Importando Rodape -->
<?php
  require_once('component/footer.php');
?>
