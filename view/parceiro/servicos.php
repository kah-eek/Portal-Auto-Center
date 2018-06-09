<?php
session_start();
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
    $id_usuario = $_SESSION['id_usuario'];
    $id_parceiro = $_SESSION['id_parceiro1'];

    $sql = "SELECT * from tbl_parceiro where id_usuario = ".$id_usuario;
          $select = mysql_query($sql);
      while ($rsVP = mysql_fetch_array($select))
      {
 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Serviços</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/padroes.css">
    <link rel="stylesheet" href="../css/parceiro/servicos.css">

  </head>
  <body>

    <header class="header">
      <img src="<?php echo($rsVP['foto_perfil']) ?>">

      <h1 class="page-title">Auto Fast</h1>

      <div class="saudacao">
        <p>Bem-vindo,</p>
        <p><?php echo($rsVP['razao_social']) ?></p>
      </div>
      <a class="return-button" href="cms_adm_parceiro.php">
        <i class="material-icons">
          keyboard_arrow_left
        </i>
      </a>
    </header>
    <?php
  }
     ?>

    <div class="blank-space"></div>

    <div class="main">

      <div class="conatiner-geral-con">

        <label class="label-titutlo-tela">Serviços Solicitados</label>
        <div class="divisor"></div>

        <div class="labels-tab">
          <div class="cont-label">
            <div class="item-tab">
              <p class="p">Nome do Cliente</p>
            </div>

            <div class="item-tab">
              <p class="p">Data</p>
            </div>

            <div class="item-tab">
              <p class="p">Serviço</p>
            </div>

            <div class="item-tab">
              <p class="p">Situação</p>
            </div>

            <div class="item-tab">
              <i class="material-icons">
                check
              </i>
            </div>

            <div class="item-tab">
              <i class="material-icons">
                thumb_down
              </i>
            </div>
          </div>
        </div>
        <div class="divisor"></div>

        <div class="itens-da-tbl">

          <?php
          $sql = "SELECT * FROM view_status_servico_por_parceiro where situacao = 'pendente' and id_parceiro = ".$id_parceiro;
              $select = mysql_query($sql) or die(mysql_error());
              // echo ($sql);
            while ($rsS = mysql_fetch_array($select))
            {
           ?>
              <div class="labels-tab">
                <div class="cont-label">
                  <div class="item-tab_res">
                    <p class="p no-weight"><?php echo($rsS['nome_cliente']) ?></p>
                  </div>

                  <div class="item-tab_res">
                    <p class="p no-weight"><?php echo($rsS['data_agendada']) ?></p>
                  </div>

                  <div class="item-tab_res">
                    <p class="p no-weight"><?php echo($rsS['nome_servico']) ?></p>
                  </div>

                   <div class="item-tab_res no-weight">
                    <p class="p no-weight"><?php echo($rsS['situacao']) ?></p>
                  </div>

                  <div class="item-tab_res para-la">
                    <a href="servicos.php?escolha=confirma&id=<?php echo($rsS['id_situacao_pedido']);?>">
                      <i class="material-icons">
                        check
                      </i>
                    </a>
                  </div>

                  <div class="item-tab para-la">
                    <a href="servicos.php?escolha=recusa&id=<?php echo($rsS['id_situacao_pedido']);?>">
                      <i class="material-icons">
                        thumb_down
                      </i>
                    </a>
                  </div>
                </div>
              </div>
          <?php
            }
          ?>
        </div>

        <div class="labels-tab-stat top-longe">
          <div class="cont-label-stat">
            <div class="item-tab-stat">
              <p class="p">Nome do Cliente</p>
            </div>

            <div class="item-tab-stat">
              <p class="p">Data</p>
            </div>

            <div class="item-tab-stat">
              <p class="p">Serviço</p>
            </div>

            <div class="item-tab-stat">
              <p class="p">Confirmados/Recusados</p>
            </div>
          </div>
        </div>

        <div class="divisor"></div>

        <?php
        $sql = "SELECT * FROM view_status_servico_por_parceiro where situacao = 'recusado' or situacao = 'confirmado' and id_parceiro = ".$id_parceiro;
            $select = mysql_query($sql) or die(mysql_error());
            // echo ($sql);
          while ($rsS = mysql_fetch_array($select))
          {
         ?>
             <div class="labels-tab-stat">
              <div class="cont-label-stat">
                <div class="item-tab-stat">
                  <p class="p no-weight"><?php echo($rsS['nome_cliente']) ?></p>
                </div>

                <div class="item-tab-stat">
                  <p class="p no-weight"><?php echo($rsS['data_agendada']) ?></p>
                </div>

                <div class="item-tab-stat">
                  <p class="p no-weight"><?php echo($rsS['nome_servico']) ?></p>
                </div>

                <div class="item-tab-stat">
                  <p class="p no-weight"><?php echo($rsS['situacao']) ?></p>
                </div>
              </div>
            </div>
        <?php
          }
        ?>

      </div>

    </div>

  </body>
</html>
