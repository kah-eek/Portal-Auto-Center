<?php
  session_start();
  $cor="";
  $botao="Salvar";

  require_once('../../database/conect.php');
  Conexao_db();

if(isset($_GET['escolha']))
{
  $escolha = $_GET['escolha'];

  //if da escolha excluir
  if($escolha == 'excluir')
  {
    //Resgata o codigo passado na URL
    $id=$_GET['id'];

    $sql = "DELETE FROM tbl_cor WHERE id_cor= ".$id;

    mysql_query($sql);
    // echo ($sql)
    header('location:index.php#.php');
/////////////////////////////////////////////////////
//Verificando se a variavel modo = consulta_editar
  }else if($escolha=='atualizar')
  {
    $botao="atualizar";
    //Resgata o codigo passado na URL
    $id=$_GET['id'];

    //Utilizando variavel Global no UPDATE do registro
    $_SESSION['id']=$id;

    // Montando o SELECT para buscar o registro
    $sql="SELECT * FROM tbl_cor WHERE id_cor=".$id;

    //Executa no BD o select
    $select = mysql_query($sql);

    //Verifica se o resultado do select tem registros e
    //converte o resultado em um array
    if($rsConsulta=mysql_fetch_array($select))
    {
      $cor=$rsConsulta['cor'];
    }

  }

}
//////////////////////////////////////////////////
if(isset($_POST['btnSalvar']))
{

  //Resgatar os dados fornecidos pelo usuario
  //usando o metod POST, conforme escolhido pelo Form
  $cor=$_POST["txtCor"];

  if($_POST["btnSalvar"]=='Salvar')
  {
    //Monta o Script para enviar para o BD
    $sql = "INSERT INTO tbl_cor (cor) values ('".$cor."') ";

  }else if($_POST["btnSalvar"]=='atualizar')
    {
      $sql = "UPDATE tbl_cor set cor = '".$cor."' where id_cor=".$_SESSION['id'];
    }

    //Executa o script no BD
    mysql_query($sql);

   header('location:index.php#');
    //Dar um echo na variavel sql sempre que der erro no insert, para ver qual é o erro
  //  echo($sql);

}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/cms/modal_cad_cor.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>
    <div class="container_principal_mc">
      <div class="container_titulo_mc centro_lr float_left">
        <div class="item_tiutlo_mc fs_40 preenche_t_20 align_center">
          Cadastro de Cores
        </div>
      </div>
      <form class="frmCadCor centro_lr" action="modal_cad_cor.php" method="post">
        <div class="container_subs_mc float_left">
          <div class="item_subs_mc float_left align_center preenche_t_20 fs_20 negrito">
            Cor
          </div>
          <div class="item_subs_mc float_left align_center fs_20 negrito margem_l_30">
            <div class="item_input_mc float_left">
              <input class="input_mc" type="text" name="txtCor" placeholder="Cor" value="<?php echo($cor) ?>">
            </div>
          </div>
          <div class="item_subs float_left align_center fs_20 negrito">
            <div class="item_input_mc float_left">
              <input class="submit_mc margem_l_150 margem_t_10" type="submit" name="btnSalvar" value="<?php echo($botao) ?>">
            </div>
          </div>
        </div>

        <div class="container_visualizar_cor float_left margem_t_50">
          <div class="item_visualizar_cor fs_40 preenche_t_20 align_center">
            Visualizar Cores
          </div>
        </div>
        <?php
        $sql = "SELECT * FROM tbl_cor";
          $select = mysql_query($sql);
          while ($rsConsulta = mysql_fetch_array($select))
          {

        ?>
        <div class="container_exibindo_acoes_mc float_left">
          <div class="item_exibindo_acoes_mc">
            <?php echo($rsConsulta['cor']) ?>
          </div>
        </div>
        <div class="container_escolhas_mc float_left">
          <div class="item_escolhas_mc float_left fs_20 preenche_t_20 align_center">
            <a href="modal_cad_cor.php?escolha=excluir&id=<?php echo($rsConsulta['id_cor']);?>">Excluir
          </div>
          <div class="item_escolhas_mc float_left fs_20 preenche_t_20 align_center">
            <a href="modal_cad_cor.php?escolha=atualizar&id=<?php echo($rsConsulta['id_cor']);?>">Editar
          </div>
        </div>
        <?php
        }
        ?>
      </form>
    </div>
  </body>
</html>
