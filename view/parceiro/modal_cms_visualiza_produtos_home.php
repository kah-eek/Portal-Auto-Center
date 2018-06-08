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

          $_SESSION['id_modelo_produto'] =  $rsVP['id_modelo_produto'];
          $_SESSION['id_parceiro'] = $rsVP['id_parceiro'];
          $_SESSION['id_cor'] = $rsVP['id_cor'];
          $_SESSION['id_categoria_produto'] = $rsVP['id_categoria_produto'];
          $_SESSION['nome'] = $rsVP['nome'];
          $_SESSION['preco'] = $rsVP['preco'];
          $_SESSION['conteudo_embalagem'] = $rsVP['conteudo_embalagem'];
          $_SESSION['garantia'] = $rsVP['garantia'];
          $_SESSION['descricao'] = $rsVP['descricao'];
          $_SESSION['observacao'] = $rsVP['observacao'];
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
      $id_usuario = $_SESSION['id_usuario'];

      $sql = "SELECT * from tbl_parceiro where id_usuario = ".$id_usuario;
            $select = mysql_query($sql);
        while ($rsVP = mysql_fetch_array($select))
        {



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

      <div class="tabela-view-dados">


        <label class="label-ger-vei">Gerenciamento de Produtos</label>
        <div class="divisor"></div>

        <div class="labels-tab">
          <div class="cont-label">
            <div class="item-tab">
              <p class="p">Nome do Produto</p>
            </div>

            <div class="item-tab">
              <p class="p">Preço</p>
            </div>

            <div class="item-tab">
              <p class="p">Garantia</p>
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

        <div class="itens-da-tbl">

          <?php
          $sql = "SELECT * FROM view_produto_detalhado WHERE id_usuario =".$id_usuario;
                $select = mysql_query($sql);
            while ($rsVP = mysql_fetch_array($select))
            {
           ?>
             <div class="labels-tab">
                <div class="cont-label">
                  <div class="item-tab">
                    <p class="p no-weight"><?php echo($rsVP['nome']) ?></p>
                  </div>

                  <div class="item-tab">
                    <p class="p no-weight"><?php echo($rsVP['preco']) ?></p>
                  </div>

                  <div class="item-tab">
                    <p class="p no-weight"><?php echo($rsVP['garantia']) ?></p>
                  </div>

                  <div class="item-tab">
                    <a href="modal_cms_visualiza_produtos_home.php?escolha=editar&id=<?php echo($rsVP['id_produto']);?>">
                      <i class="material-icons">
                        edit
                      </i>
                    </a>
                  </div>

                  <div class="item-tab">
                    <a href="modal_cms_visualiza_produtos_home.php?escolha=excluir&id=<?php echo($rsVP['id_produto']);?>">
                      <i class="material-icons">
                        delete_forever
                      </i>
                    </a>
                  </div>
                </div>
              </div>
          <?php
           }
           ?>

        </div>

      </div>
    </div>
  </body>
</html>
