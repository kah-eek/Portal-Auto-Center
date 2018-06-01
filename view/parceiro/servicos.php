<?php
require_once("../../database/conect.php");
Conexao_db();

if(isset($_GET['escolha'])){
    $escolha = $_GET['escolha'];
    $id = $_GET['id'];

    //if da escolha excluir
    if($escolha == 'confirma'){
        $sql = "UPDATE tbl_situacao_pedido SET id_tipo_situacao_pedido ='1' WHERE id_situacao_pedido=".$id;
        mysql_query($sql);
        // echo ($sql);
        header('location:servicos.php');
      }elseif ($escolha == 'recusa') {
        $sql = "UPDATE tbl_situacao_pedido SET id_tipo_situacao_pedido ='6' WHERE id_situacao_pedido=".$id;
        mysql_query($sql);

        header('location:servicos.php');
      }
    }
 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Serviços</title>
    <link rel="stylesheet" href="../css/parceiro/servicos.css">
    <link rel="stylesheet" href="../css/padroes.css">

  </head>
  <body>
    <div class="pendentes">
      <div class="nomeCliente align_center preenche_t_15">
        NOME
      </div>
      <div class="dataAgendada align_center preenche_t_15">
        DATA
      </div>
      <div class="servico align_center preenche_t_15">
        SERVIÇO
      </div>
      <div class="sttPendente align_center preenche_t_15">
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
      $sql = "SELECT * FROM dbautofast.view_status_servico where situacao = 'pendente';";
          $select = mysql_query($sql) or die(mysql_error());
          // echo ($sql);
        while ($rsS = mysql_fetch_array($select))
        {
       ?>
      <div class="nomeCliente align_center preenche_t_15">
        <?php echo($rsS['nome_cliente']) ?>
      </div>
      <div class="dataAgendada align_center preenche_t_15">
        <?php echo($rsS['data_agendada']) ?>
      </div>
      <div class="servico align_center preenche_t_15">
        <?php echo($rsS['nome_servico']) ?>
      </div>
      <div class="sttPendente align_center preenche_t_15">
        <?php echo($rsS['situacao']) ?>
      </div>
      <div class="confirmar">
        <a href="servicos.php?escolha=confirma&id=<?php echo($rsS['id_situacao_pedido']);?>">
          <i class="material-icons fs_40 preenche_t_5 preenche_l_5">
            thumb_up_alt
          </i>
        </a>
      </div>
      <div class="recusar">
        <a href="servicos.php?escolha=recusa&id=<?php echo($rsS['id_situacao_pedido']);?>">
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
      <div class="nomeCliente align_center preenche_t_15">
        NOME
      </div>
      <div class="dataAgendada align_center preenche_t_15">
        DATA
      </div>
      <div class="servico align_center preenche_t_15">
        SERVIÇO
      </div>
      <div class="sttPendente align_center preenche_t_10">
        CONFIRMADOS/
        RECUSADOS
      </div>
      <?php
      $sql = "SELECT * FROM dbautofast.view_status_servico where situacao = 'recusado' or situacao = 'confirmado';";
          $select = mysql_query($sql) or die(mysql_error());
          // echo ($sql);
        while ($rsS = mysql_fetch_array($select))
        {
       ?>
       <div class="nomeCliente align_center preenche_t_15">
         <?php echo($rsS['nome_cliente']) ?>
       </div>
       <div class="dataAgendada align_center preenche_t_15">
         <?php echo($rsS['data_agendada']) ?>
       </div>
       <div class="servico align_center preenche_t_15">
         <?php echo($rsS['nome_servico']) ?>
       </div>
       <div class="sttPendente align_center preenche_t_10">
         <?php echo($rsS['situacao']) ?>
       </div>
      <?php
        }
      ?>

    </div>
  </body>
</html>
