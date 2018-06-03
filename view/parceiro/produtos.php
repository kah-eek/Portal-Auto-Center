<?php
require_once("../../database/conect.php");
Conexao_db();

if(isset($_GET['escolha'])){
    $escolha = $_GET['escolha'];
    $id = $_GET['id'];

    //if da escolha excluir
    if($escolha == 'confirma'){
        $sql = "UPDATE tbl_situacao_pedido SET id_tipo_situacao_pedido ='7' WHERE id_situacao_pedido=".$id;
        mysql_query($sql);
        // echo ($sql);
        header('location:produtos.php');
      }elseif ($escolha == 'recusa') {
        $sql = "UPDATE tbl_situacao_pedido SET id_tipo_situacao_pedido ='9' WHERE id_situacao_pedido=".$id;
        mysql_query($sql);

        header('location:produtos.php');
      }
    }
 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="../css/parceiro/produtos.css">
    <link rel="stylesheet" href="../css/padroes.css">

  </head>
  <body>
    <div class="pendentes">
      <div class="nomeCliente borda_preta_1 align_center preenche_t_15">
        NOME PRODUTO
      </div>
      <div class="dataAgendada borda_preta_1 align_center preenche_t_15">
        PREÇO
      </div>
      <div class="servico borda_preta_1 align_center preenche_t_15">
        MODELO
      </div>
      <div class="sttPendente borda_preta_1 align_center preenche_t_15">
        CATEGORIA
      </div>
      <div class="sttPendente borda_preta_1 align_center preenche_t_15">
        SITUAÇÃO
      </div>
      <div class="confirmar">
          <i class="material-icons fs_40 preenche_t_5 preenche_l_5">
            thumb_up_alt
          </i>
      </div>
      <div class="recusar">
          <i class="material-icons fs_40 preenche_t_5 preenche_l_5">
            thumb_down_alt
          </i>
      </div>
      <?php
      $sql = "SELECT * FROM caiqueoliveira.view_status_produto where situacao = 'Aguardando envio';";
          $select = mysql_query($sql) or die(mysql_error());
          // echo ($sql);
        while ($rsS = mysql_fetch_array($select))
        {
       ?>
      <div class="nomeCliente borda_preta_b_1 align_center preenche_t_15">
        <?php echo($rsS['nome_produto']) ?>
      </div>
      <div class="dataAgendada borda_preta_b_1 align_center preenche_t_15">
        <?php echo($rsS['preco']) ?>
      </div>
      <div class="servico borda_preta_b_1 align_center preenche_t_15">
        <?php echo($rsS['modelo']) ?>
      </div>
      <div class="sttPendente borda_preta_b_1 align_center preenche_t_15">
        <?php echo($rsS['categoria']) ?>
      </div>
      <div class="sttPendente borda_preta_b_1 align_center preenche_t_15">
        <?php echo($rsS['situacao']) ?>
      </div>
      <div class="confirmar">
        <a href="produtos.php?escolha=confirma&id=<?php echo($rsS['id_situacao_pedido']);?>">
          <i class="material-icons fs_40 preenche_t_5 preenche_l_5">
            thumb_up_alt
          </i>
        </a>
      </div>
      <div class="recusar">
        <a href="produtos.php?escolha=recusa&id=<?php echo($rsS['id_situacao_pedido']);?>">
          <i class="material-icons fs_40 preenche_t_5 preenche_l_5">
            thumb_down_alt
          </i>
        </a>
      </div>
      <?php
        }
      ?>
    </div>
    <div class="confirmadosRecusados">
      <div class="nomeCliente borda_preta_1 align_center preenche_t_15">
        NOME PRODUTO
      </div>
      <div class="dataAgendada borda_preta_1 align_center preenche_t_15">
        PREÇO
      </div>
      <div class="servico borda_preta_1 align_center preenche_t_15">
        MODELO
      </div>
      <div class="servico borda_preta_1 align_center preenche_t_15">
        CATEGORIA
      </div>
      <div class="sttPendente borda_preta_1 align_center preenche_t_10">
        CONFIRMADOS/
        RECUSADOS
      </div>
      <?php
      $sql = "SELECT * FROM caiqueoliveira.view_status_produto where situacao = 'envio recusado' or situacao = 'Enviado';";
          $select = mysql_query($sql) or die(mysql_error());
          // echo ($sql);
        while ($rsS = mysql_fetch_array($select))
        {
       ?>
       <div class="nomeCliente borda_preta_b_1 align_center preenche_t_15">
         <?php echo($rsS['nome_produto']) ?>
       </div>
       <div class="dataAgendada borda_preta_b_1 align_center preenche_t_15">
         <?php echo($rsS['preco']) ?>
       </div>
       <div class="servico borda_preta_b_1 align_center preenche_t_15">
         <?php echo($rsS['modelo']) ?>
       </div>
       <div class="sttPendente borda_preta_b_1 align_center preenche_t_10">
         <?php echo($rsS['categoria']) ?>
       </div>
       <div class="sttPendente borda_preta_b_1 align_center preenche_t_10">
         <?php echo($rsS['situacao']) ?>
       </div>
      <?php
        }
      ?>

    </div>
  </body>
</html>
