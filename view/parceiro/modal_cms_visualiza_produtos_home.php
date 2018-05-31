<?php
session_start();
require_once("../../database/conect.php");
Conexao_db();
$id_usuario = $_SESSION['id_usuario'];
// if da escolha , visualizar ou excluir
if(isset($_GET['escolha'])){
    $escolha = $_GET['escolha'];
    $id = $_GET['id'];

    //if da escolha excluir
    if($escolha == 'excluir'){
        $sql = "DELETE FROM tbl_produto WHERE id_produto= ".$id;
        mysql_query($sql);
        // echo ($sql);
        header('location:modal_cms_visualiza_produtos_home.php');
      }else if($escolha == 'editar'){
          $sql="select * from tbl_produto where id_produto=".$id;

          $select = mysql_query($sql);
          $rsVP = mysql_fetch_array($select);

          $_SESSION['id_modelo_produto'] = $rsVP['id_modelo_produto'];
          $_SESSION['id_parceiro'] = $rsVP['id_parceiro'];
          $_SESSION['id_cor'] = $rsVP['id_cor'];
          $_SESSION['id_categoria_produto'] = $rsVP['id_categoria_produto'];
          $_SESSION['nome'] = $rsVP['nome'];
          $_SESSION['preco'] = $rsVP['preco'];
          $_SESSION['conteudo_embalagem'] = $rsVP['conteudo_embalagem'];
          $_SESSION['garantia'] = $rsVP['garantia'];
          $_SESSION['descricao'] = $rsVP['descricao'];
          $_SESSION['observacao'] = "observacao";
          $_SESSION['id_produto'] = $rsVP['id_produto'];
          $_SESSION['botao'] = "editar";


          if($_SESSION['id_modelo_produto'] !=null){
              header('location:editar_produto_home.php');
              //echo($_SESSION['idNivelUsuario']);
          }else{
              echo("Deu ruim!!!");
          }
        }
      }


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/parceiro/cms_agenda_parceiro.css">
    <link rel="stylesheet" href="../css/parceiro/modal_cms_visualiza_produtos_home.css">
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
        <!-- conteudo -->
      <form name="frmParceiro" method="get" action="consultar_veiculo_parceiro.php">
        <div class="container_geral">
          <div class="container_titulo">
            <div class="item_titulo fs_30">
              <h2>Gerenciamento de Produtos</h2>
            </div>
          </div>
          <div class="divisor_vc">

          </div>
          <div class="container_ok margem_t_30">
            <div class="item_dados align_center conteudo fs_18">
              Nome
            </div>
            <div class="item_dados align_center conteudo fs_18">
              Preço
            </div>
            <div class="item_dados align_center conteudo fs_18">
              Garantia
            </div>
            <div class="item_dados">
              <div class="excluir align_center ">
                <i class="material-icons" style="font-size:30px;">delete_forever</i>
              </div>
              <div class="editar align_center">
                <i class="material-icons" style="font-size:30px;">remove_red_eye</i>
              </div>
            </div>
          </div>
          <div class="divisor_vc">

          </div>
          <div class="container_itens">
          <?php
          $sql = "SELECT * FROM view_produto_detalhado WHERE id_usuario =".$id_usuario;
                $select = mysql_query($sql);
            while ($rsVP = mysql_fetch_array($select))
            {
           ?>
            <div class="container_sla">
              <div class="item_visu align_center preenche_t_15">
                <?php echo($rsVP['nome']) ?>
              </div>
              <div class="item_visu align_center preenche_t_15">
                <?php echo($rsVP['preco']) ?>
              </div>
              <div class="item_visu align_center preenche_t_15">
                <?php echo($rsVP['garantia']) ?>
              </div>
              <div class="item_visu">
                <div class="excluir_visu preenche_t_10 align_center">
                  <a href="modal_cms_visualiza_produtos_home.php?escolha=excluir&id=<?php echo($rsVP['id_produto']);?>">
                    <i class="material-icons" style="font-size:30px;">delete_forever</i>
                  </a>
                </div>
                <div class="editar_visu preenche_t_10 align_center">
                  <a href="modal_cms_visualiza_produtos_home.php?escolha=editar&id=<?php echo($rsVP['id_produto']);?>">
                    <i class="material-icons" style="font-size:30px;">remove_red_eye</i>
                  </a>
                </div>
              </div>
            </div>

          <?php
           }
           ?>
          </div>
          <div class="bt_retornar">
            <a href="cms_adm_parceiro.php" style="text-decoration:none">
              <img class="img_retorno" src="../pictures/adm_parceiro/retornar.png" width"20" alt="">
            </a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
