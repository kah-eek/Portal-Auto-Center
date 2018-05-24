<!--
@autor Letícia S. Jesus
@data 22/05/2018
@descricao Página do Carrinho de Compras da PAC
-->
<?php
//************conexão com o Msql************************
require_once('../database/conect.php');
Conexao_db();
//******************************************************

 ?>

  <?php
    // Importando o cabeçalho
    require_once("component/header.php");
  ?>
    <!--
    @autor Letícia S. Jesus
    @data 22/05/2018
    @descricao Página do Carrinho de Compras da PAC
    -->

    <!-- Contáiner principal -->
    <div class="container_principal">
      <!-- Divisão de Telas -->
      <div class="div_primaria">
        <div class="texto">
            CARRINHO
        </div>
        <div class="line">
        </div>
        <div class="div_secundaria">
          <div class="produtos">
            <div class="img_prod">

            </div>
            <div class="detalhe_prod">
            </div>
          </div>
          <div class="comprar_mais">
            <!-- <a href="loja.php"> -->
              Comprar Mais Produtos
            </a>
          </div>
        </div>
        <div class="div_terciaria">
            <div class="container_secundaria">
              <div class="texto2">
                RESUMO
              </div>
              <div class="line2">
              </div>
              <div class="container_terciaria">
                <div class="divisao_container">
                  <div class="div_cont">
                    <div class="texto3">
                      Produto
                    </div>
                    <div class="texto3">
                      Data Agendada
                    </div>
                  </div>
                </div>
                <div class="divisao_container">
                  <div class="div_cont">
                    <div class="inputs">
                      <input class="format_input" type="txtPedido" name="txtPedido" value="">
                    </div>
                    <div class="inputs">
                      <input class="format_inputs" type="date" name="dataAgendada" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="finalizar_compra">
                <input class="tratamento" type="submit" name="btnFinalizar" value="Finalizar Compra">
              </div>
            </div>
        </div>
      </div>

    </div>


    <!-- Rodape -->
    <?php
      require_once('component/footer.php');
    ?>
