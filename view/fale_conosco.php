  <?php
    // Importando o cabeçalho
    require_once("component/header.php");
  ?>
    <!--
    @autor Caique M Oliveira
    @data 31/03/2018
    @descricao Página de contato da PAC
    -->

    <!-- Contáiner principal -->
    <div class="container_principal">
      <!-- Fundo escuro -->
      <div class="container_fundo_escuro preenche_50">
        <!-- Contáiner conteúdo centralizado -->
        <div class="container_conteudo_centralizado bg_branco sombra_preta_50 centro_lr">

          <!-- Título de apresentação da página -->
          <div class="titulo_pagina preenche_t_50">
            <!-- Subtítulo -->
            <div class="subtitulo fs_30 align_center centro_lr conteudo">
              <h2>Entre em contato com a nossa equipe</h2>
            </div>

            <!-- Título -->
            <div class="titulo_principal fs_50 align_center titulo centro_lr">
              Fale Conosco
            </div>
          </div>

          <!-- Divisor de conteúdo -->
          <div class="divisor"></div>

          <form action="" method="POST">

            <!-- Label do campo - Nome -->
            <div class="label_campo margem_b_10 preenche_l_100">
              <label class="conteudo fs_18" for="txt_nome">Nome:</label>
            </div>
            <!-- Campo - Nome -->
            <div class="campo_texto margem_b_30 preenche_l_100">
              <input required class="input_text sem_sombra txt_preto fs_20" id="txt_nome" type="text" name="txt_nome" value="">
            </div>
            <!-- ___________________________________________________________________ -->

            <!-- Label do campo - E-mail -->
            <div class="label_campo margem_b_10 preenche_l_100">
              <label class="conteudo fs_18" for="txt_email">E-mail:</label>
            </div>
            <!-- Campo - E-mail -->
            <div class="campo_texto margem_b_30 preenche_l_100">
              <input required class="input_text sem_sombra txt_preto fs_20" id="txt_email" type="text" name="txt_email" value="">
            </div>
            <!-- ___________________________________________________________________ -->


            <!-- Label do campo - Mensagem -->
            <div class="label_campo margem_b_20 preenche_l_100">
              <label class="conteudo fs_18" for="txt_mensagem">Mensagem:</label>
            </div>
            <!-- Campo - Mensagem -->
            <div class="campo_texto_textarea margem_b_30 preenche_l_100">
              <textarea required id="txt_mensagem" class="no_resize conteudo fs_20" name="txt_mensagem" maxlength="500" rows="8" cols="81"></textarea>
              <!-- <input class="input_text sem_sombra txt_preto fs_20" id="txt_mensagem" type="text" name="txt_mensagem" value=""> -->
            </div>
            <!-- ___________________________________________________________________ -->

            <!-- Container do botão de enviar o formulário -->
            <div class="container_botao_enviar titulo margem_t_215">
              <input class="input_submit bg_verde_vivo negrito espacamento_letra_2" type="submit" name="btn_enviar" value="Enviar">
            </div>
            <!-- ___________________________________________________________________ -->

          </form>

        </div>
      </div>
    </div>


    <!-- Rodape -->
    <?php
      require_once('component/footer.php');
    ?>
