<?php
  // Importando o cabeçalho
  require_once("component/header.php");


  // conexão com o banco de dados
  require_once("../database/conect.php");
  Conexao_db();
?>

<!--
@autor Henrique Otremba dos santos
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
    <?php

     $sql="SELECT * from view_veiculo_simples where ativo=1";
     $select=mysql_query($sql);
     while($rsConsulta= mysql_fetch_array($select)){
       ?>
    <div class="container_item_veiculo margem_t_20 float_left">
        <div class="imagem_item_veiculo">
          <img src="view/<?php  echo($rsConsulta['imagem']) ?>" title="<?php echo($rsConsulta['modelo']) ?>" alt="Imagem de Carro"/>
        </div>
        <div class="descricao_nome align_center conteudo">
          <?php echo($rsConsulta['modelo']) ?>
        </div>
        <div class="descricao_marca align_center preenche_5 txt_preto conteudo">
          <?php echo($rsConsulta['fabricante']) ?>
        </div>
        <div class="descricao_data align_center txt_preto conteudo">
          <?php echo($rsConsulta['ano_fabricacao']) ?>
        </div>
      <div class="input-v-submit">
        <input class="detalhes-v" type="submit" name="btn_datalhes" value="Detalhes">
      </div>
    </div>
    <?php
      }
     ?>
  </div>
  <script>
    $('.detalhesVeiculos').click(function(){
      modalDetalhesVeiculos();
    })
  </script>

<!-- Importando Rodape -->
<?php
  require_once('component/footer.php');
?>
