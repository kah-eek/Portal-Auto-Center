<?php
session_start();
require_once("../../database/conect.php");
Conexao_db();

    if(isset($_POST["btEditar"]))
    {
        //Resgatar os dados fornecidos pelo usuario
        //usando o metod POST, conforme escolhido pelo Form
        $ano=$_POST["txtAno"];
        $fabricante=$_POST["txtFabricante"];
        $modelo=$_POST["txtModelo"];
        $placa=$_POST["txtPlaca"];
        $cor=$_POST["txtCor"];
        $quilometragem=$_POST["txtQuilometragem"];
        $tipoVeiculo=$_POST["txtTipo"];
        $qtdPortas=$_POST["txtQtdPortas"];
        $idVeiculo=$_SESSION["id_veiculo"];

        //Monta o Script para enviar para o BD
        //AQUI ESTA INCOMPLETO *************************************************************
        addslashes($sql = "update tbl_veiculo set ano_fabricacao ='".$ano."', placa ='".$placa."', id_cor ='".$cor."', id_modelo = '".$modelo."', qtd_porta ='".$qtdPortas."', quilometro_rodado ='".$quilometragem."', id_tipo_veiculo ='".$tipoVeiculo."', id_modelo_veiculo='".$fabricante."' WHERE id_veiculo =".$idVeiculo);
        // echo ($sql);
        //Executa o script no BD
        mysql_query($sql);
    ?>
    <script>
        alert("Usuário editado com sucesso!");
    </script>
    <?php
            header('location:consultar_veiculo_parceiro.php');
    }
    ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/parceiro/editar_veiculo_parceiro.css">
    <link rel="stylesheet" href="../css/parceiro/cms_agenda_parceiro.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>
    <div class="container_conteudo_central_apc">
      <!-- MENU LATERAL -->
      <div class="container_menu_l_apc float_left borda_preta_1 margem_l_20">
        <div class="container_img_menu_apc centro_lr borda_preta_1 margem_t_20">
          <div class="item_img_menu_l_apc ">

          </div>
        </div>
        <!-- NOME USUÁRIO -->
        <div class="container_nome_usuario_apc margem_t_10">
          <div class="item_nome_usuario_apc centro_lr align_center preenche_t_15 fs_18 negrito txt_branco">
            Nome de Usuário
          </div>
        </div>
      </div>
      <form name="frmEV" method="post" action="editar_veiculo_parceiro.php">
        <body>
          <div class="container_segura_tudo float_left">
            <div class="container_titulo align_center">
              <div class="item_titulo fs_30">
                <h2>Alterando Informações de Veículo</h2>
              </div>
            </div>
            <div class="divisor">

            </div>

            <div class="container_segura_input_ev">
              <!-- Label do campo - Ano -->
              <div class="label_campo_ev margem_b_10">
                <label class="conteudo fs_18" for="txtAno">Ano:</label>
              </div>
              <!-- Campo - Ano -->
              <div class="campo_texto_ev margem_b_30 centro_lr">
                <input class="input_text txt_preto sem_sombra" placeholder="Digite o Ano do Veículo" type="text" name="txtAno" value="<?php echo($_SESSION['ano_fabricacao']); ?>">
              </div>
            </div>

            <div class="container_segura_input_ev">
              <!-- Label do campo - Ano -->
              <div class="label_campo_ev margem_b_10">
                <label class="conteudo fs_18" for="txtAno">Fabricante:</label>
              </div>
              <!-- Campo - Ano -->
              <div class="campo_texto_ev margem_b_30 centro_lr">
                <input class="input_text txt_preto sem_sombra" type="text" name="txtFabricante" value="<?php echo($_SESSION['id_modelo_veiculo']); ?>">
              </div>
            </div>

            <div class="container_segura_input_ev">
              <!-- Label do campo - Ano -->
              <div class="label_campo_ev margem_b_10">
                <label class="conteudo fs_18" for="txtAno">Modelo:</label>
              </div>
              <!-- Campo - Ano -->
              <div class="campo_texto_ev margem_b_30 centro_lr">
                <input class="input_text txt_preto sem_sombra" type="text" name="txtModelo" value="<?php echo($_SESSION['id_modelo']); ?>">
              </div>
            </div>

            <div class="container_segura_input_ev">
              <!-- Label do campo - Ano -->
              <div class="label_campo_ev margem_b_10">
                <label class="conteudo fs_18" for="txtAno">Placa:</label>
              </div>
              <!-- Campo - Ano -->
              <div class="campo_texto_ev margem_b_30 centro_lr">
                <input class="input_text txt_preto sem_sombra" type="text" name="txtPlaca" value="<?php echo($_SESSION['placa']); ?>">
              </div>
            </div>

            <div class="container_segura_input_ev">
              <!-- Label do campo - Ano -->
              <div class="label_campo_ev margem_b_10">
                <label class="conteudo fs_18" for="txtAno">Cor:</label>
              </div>
              <!-- Campo - Ano -->
              <div class="campo_texto_ev margem_b_30 centro_lr">
                <input class="input_text txt_preto sem_sombra" type="text" name="txtCor" value="<?php echo($_SESSION['cor']); ?>">
              </div>
            </div>

            <div class="container_segura_input_ev">
              <!-- Label do campo - Ano -->
              <div class="label_campo_ev margem_b_10">
                <label class="conteudo fs_18" for="txtAno">Quilometragem:</label>
              </div>
              <!-- Campo - Ano -->
              <div class="campo_texto_ev margem_b_30 centro_lr">
                <input class="input_text txt_preto sem_sombra" type="text" name="txtQuilometragem" value="<?php echo($_SESSION['quilometragem']); ?>">
              </div>
            </div>

            <div class="container_segura_input_ev">
              <!-- Label do campo - Ano -->
              <div class="label_campo_ev margem_b_10">
                <label class="conteudo fs_18" for="txtAno">Tipo de Veículo:</label>
              </div>
              <!-- Campo - Ano -->
              <div class="campo_texto_ev margem_b_30 centro_lr">
                <input class="input_text txt_preto sem_sombra" type="text" name="txtTipo" value="<?php echo($_SESSION['tipoVeiculo']); ?>">
              </div>
            </div>

            <div class="container_segura_input_ev">
              <!-- Label do campo - Ano -->
              <div class="label_campo_ev margem_b_10">
                <label class="conteudo fs_18" for="txtAno">Quantidade de Portas:</label>
              </div>
              <!-- Campo - Ano -->
              <div class="campo_texto_ev margem_b_30 centro_lr">
                <input class="input_text txt_preto sem_sombra" type="text" name="txtQtdPortas" value="<?php echo($_SESSION['qtdPortas']); ?>">
              </div>
            </div>

              <div class="botaoSalvar_ev">
                <input class="input_submit bg_verde_vivo negrito espacamento_letra_2" type="submit" name="btEditar" value="Editar">
              </div>
              <div id="bt_voltar">
                <a href="consultar_veiculo_parceiro.php" style="text-decoration:none">

                  <img class="img_retorno" src="../pictures/adm_parceiro/retornar.png" width"20" alt="">
                </a>
              </div>
          </div>
        </body>
      </form>
    </div>
  </body>
</html>
