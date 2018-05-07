<?php
require_once("../../database/conect.php");
Conexao_db();
// inicianda a variavel de sessao
session_start();

// if da escolha , visualizar ou excluir
if(isset($_GET['escolha'])){
    $escolha = $_GET['escolha'];
    $id = $_GET['id_fale_conosco'];

    //if da escolha excluir
    if($escolha == 'excluir'){
        $sql = "DELETE FROM tbl_fale_conosco WHERE id_fale_conosco= ".$id;
        mysql_query($sql);
        echo ($sql);
        header('location:cms_modal_fale_conosco.php');
      }
    }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/cms/cms_modal_fale_conosco.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <div class="container_principal_fc float_left">
    <div class="container_titulo_fc margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_fc align_center preenche_t_20 fs_25 negrito">
        Fale Conosco
      </div>
    </div>
    <form name="frmCms" method="get" action="modal_cms_fale_conosco.php">
    <!-- VISUALIZAÇÃO DE CLIENTE -->
      <div class="container_visualiza_fc centro_lr margem_t_10">
        <div class="container_topicos_fc centro_lr">
          <div class="item_titulo_topicos_fc float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Nome
          </div>

          <div class="item_titulo_topicos_fc float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            E-mail
          </div>

          <div class="item_titulo_topicos_fc float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Mensagem
          </div>

          <div class="ativo_ver_fc float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Delete
          </div>

          <div class="ativo_ver_fc float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Ver
          </div>
        </div>
        <?php
        $sql = "SELECT * FROM tbl_fale_conosco";
          $select = mysql_query($sql);
          while ($rsFC = mysql_fetch_array($select))
          {

        ?>

        <!-- DADOS QUE VIRÃO DO BANCO -->
          <div class="container_dados_topicos_fc margem_t_5">

              <div class="item_dados_topicos_fc float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
                <?php echo($rsFC['nome']) ?>
              </div>

              <div class="item_dados_topicos_fc float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20">
                <?php echo($rsFC['email']) ?>
              </div>

              <div class="item_dados_topicos_fc float_left preenche_t_15 margem_l_10 align_center borda_preta_1 sombra_preta_20 justificado">
                <?php echo($rsFC['pergunta_sugestao_critica']) ?>
              </div>
                <div class="ativo_ver_dados_fc float_left preenche_t_10 margem_l_10 align_center borda_preta_1 sombra_preta_20">
                  <!-- <label for="btndeletaRegistro"> -->
                  <a href="#escolha=excluir&id=<?php echo($rsFC['id_fale_conosco']);?>">
                    <i class="material-icons" style="font-size:30px;">delete_forever</i>
                  </a>
                  <!-- </label> -->
                  <!-- <input id="btndeletaRegistro" type="submit" name="btndeletaRegistro" value="" hidden> -->
                </div>
              <!-- <div class="ativo_ver_dados_fc float_left preenche_t_10 margem_l_10 align_center borda_preta_1 sombra_preta_20">
                <i class="material-icons" style="font-size:30px;">visibility</i>
              </div> -->
          </div>
        <?php
          }
        ?>
    </div>
  </form>
</html>
