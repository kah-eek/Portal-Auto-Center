<!--
@autor Henrique Otremba dos Santos
@data 06/05/2018
@descricao Página do faleconosco da pac
-->
<?php
//************conexão com o Msql************************
require_once('../database/conect.php');
Conexao_db();
//******************************************************
if(isset($_POST["BtnSalvar"]))
{
    //Resgatar os dados fornecidos pelo usuario
    //usando o metod POST, conforme escolhido pelo Form
    $nome=$_POST["txtNome"];
    $email=$_POST["txtEmail"];
    $sugestao=$_POST["txtsugestao"];

    //Monta o Script para enviar para o BD
    addslashes($sql = "insert into tbl_fale_conosco (nome, email, pergunta_sugestao_critica) values ('".$nome."','".$email."','".$sugestao."') ");

    //Executa o script no BD
    mysql_query($sql);

   header('location:fale_conosco.php?page=fale_conosco');
    //Dar um echo so sql sempre que der erro no insert, para ver qual é o erro
   // echo($sql);

}

 ?>

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

          <form name="frmFaleConosco" method="post" action="fale_conosco.php">

            <!-- Label do campo - Nome -->
            <div class="label_campo margem_b_10 preenche_l_100">
              <label class="conteudo fs_18" for="txt_nome">Nome:</label>
            </div>
            <!-- Campo - Nome -->
            <div class="campo_texto margem_b_30 preenche_l_100">
              <input placeholder="Digite seu nome" type="text" name="txtNome" value="" class="input_text txt_preto sem_sombra" required pattern="[a-z A-Z ã Ã õ Õ é É ô Ô ç Ç]*"
                                   title="Permitido apenas letras" onkeypress="return validar(event,'number')">
            </div>
            <!-- ___________________________________________________________________ -->

            <!-- Label do campo - E-mail -->
            <div class="label_campo margem_b_10 preenche_l_100">
              <label class="conteudo fs_18" for="txt_email">E-mail:</label>
            </div>
            <!-- Campo - E-mail -->
            <div class="campo_texto margem_b_30 preenche_l_100">
              <input required placeholder="Digite seu email" type="email" name="txtEmail" value="" class="input_text sem_sombra txt_preto fs_20" >
            </div>
            <!-- ___________________________________________________________________ -->


            <!-- Label do campo - Mensagem -->
            <div class="label_campo margem_b_20 preenche_l_100">
              <label class="conteudo fs_18" for="txt_mensagem">Mensagem:</label>
            </div>
            <!-- Campo - Mensagem -->
            <div class="campo_texto_textarea margem_b_30 preenche_l_100">
              <textarea required class="no_resize conteudo fs_20" name="txtsugestao" maxlength="500" rows="8" cols="81"></textarea>
              <!-- <input class="input_text sem_sombra txt_preto fs_20" id="txt_mensagem" type="text" name="txt_mensagem" value=""> -->
            </div>
            <!-- ___________________________________________________________________ -->

            <!-- Container do botão de enviar o formulário -->
            <div class="container_botao_enviar titulo margem_t_115">
              <input class="input_submit bg_verde_vivo negrito espacamento_letra_2" type="submit" name="BtnSalvar" value="Enviar">
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
