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
        $sql = "DELETE FROM tbl_veiculo WHERE id_veiculo= ".$id;
        mysql_query($sql);
        // echo ($sql);
        header('location:consultar_veiculo_parceiro.php');
      }else if($escolha == 'editar'){
          $sql="select * from tbl_veiculo where id_veiculo=".$id;

          $select = mysql_query($sql);
          $rsVP = mysql_fetch_array($select);

          $_SESSION['ano_fabricacao'] = $rsVP['ano_fabricacao'];
          $_SESSION['id_modelo_veiculo'] = $rsVP['id_modelo_veiculo'];
          $_SESSION['id_modelo'] = $rsVP['id_modelo'];
          $_SESSION['placa'] = $rsVP['placa'];
          $_SESSION['cor'] = $rsVP['id_cor'];
          $_SESSION['quilometragem'] = $rsVP['quilometro_rodado'];
          $_SESSION['tipoVeiculo'] = $rsVP['id_tipo_veiculo'];
          $_SESSION['qtdPortas'] = $rsVP['qtd_porta'];
          $_SESSION['id_veiculo'] = $rsVP['id_veiculo'];
          $_SESSION['botao'] = "Editar";


          if($_SESSION['ano_fabricacao'] !=null){
              header('location:editar_veiculo_parceiro.php');
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
    <link rel="stylesheet" href="../css/parceiro/consultar_veiculo_parceiro.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>
    
    <header class="header">
      <img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=3159b23f37c4f3954e97072e00e975ab&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb">

      <h1 class="page-title">Auto Fast</h1>

      <div class="saudacao">
        <p>Bem-vindo</p>
        <p>Caique M. Oliveira</p>
      </div>
      <a class="return-button" href="cms_adm_parceiro.php">
        <i class="material-icons">
          keyboard_arrow_left
        </i>
      </a>
    </header>

    <div class="blank-space"></div>

    <div class="main">

      <div class="tabela-view-dados">
        

        <label class="label-ger-vei">Gerenciamento de Veículos</label>
        <div class="divisor"></div>

        <div class="labels-tab">
          <div class="cont-label">
            <div class="item-tab">
              <p class="p">Ano de Fabricação</p>
            </div>

            <div class="item-tab">
              <p class="p">Placa</p>
            </div>
            
            <div class="item-tab">
              <p class="p">Quilometragem</p>
            </div>
            
            <div class="item-tab">
              <i class="material-icons">
                edit
              </i>
            </div>

            <div class="item-tab">
              <i class="material-icons">
                delete_forever
              </i>
            </div>
          </div>
        </div>
        <div class="divisor"></div>

        <?php
          $sql = "SELECT * FROM tbl_veiculo AS v

                INNER JOIN tbl_veiculo_parceiro AS vp ON vp.id_veiculo = v.id_veiculo

                INNER JOIN tbl_parceiro AS p ON p.id_parceiro = vp.id_parceiro

                INNER JOIN tbl_usuario AS u ON u.id_usuario = p.id_usuario

                WHERE u.id_usuario =".$id_usuario;
                $select = mysql_query($sql);
            while ($rsVP = mysql_fetch_array($select))
            {
           ?>
           <div class="labels-tab">
              <div class="cont-label">
                <div class="item-tab">
                  <p class="p"><?php echo($rsVP['ano_fabricacao']) ?></p>
                </div>

                <div class="item-tab">
                  <p class="p"><?php echo($rsVP['placa']) ?></p>
                </div>
                
                <div class="item-tab">
                  <p class="p"><?php echo($rsVP['quilometro_rodado']) ?></p>
                </div>
                
                <div class="item-tab">
                  <i class="material-icons">
                    edit
                  </i>
                </div>

                <div class="item-tab">
                  <i class="material-icons">
                    delete_forever
                  </i>
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
