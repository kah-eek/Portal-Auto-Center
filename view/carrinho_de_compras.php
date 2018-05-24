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
        <div class="div_secundaria">
          <div class="produtos">
            <div class="img_prod">
            </div>
            <div class="detalhe_prod">
            </div>
          </div>
          <div class="comprar_mais">
            <a href="<?php echo isset($_GET['page']) == true ? '../index.php' : '' ?>">
              Comprar Mais Produtos
            </a>
          </div>
        </div>
        <!-- <div class="div_terciaria">
        </div> -->
      </div>

    </div>


    <!-- Rodape -->
    <?php
      require_once('component/footer.php');
    ?>
