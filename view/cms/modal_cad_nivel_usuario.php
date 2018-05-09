<?php

session_start();
$nivel="";
$botao="Salvar";

$conexao=mysqli_connect('localhost','root','bcd127','db_auto_center');
////////////////////////////////////////////////////////

// if da escolha... visualizar ou excluir
if(isset($_GET['escolha']))
{
  $escolha = $_GET['escolha'];

  //if da escolha excluir
  if($escolha == 'excluir')
  {
    //Resgata o codigo passado na URL
    $id=$_GET['id'];

    $sql = "DELETE FROM tbl_nivel_usuario WHERE id_nivel_usuario= ".$id;
    mysql_query($sql);
    // echo ($sql)
    header('location:index.php#.php');
//////////////////////////////////////////////////////
//Verificando se a variavel modo = consulta_editar
  }else if($escolha=='atualizar')
  {
    $botao="atualizar";

    //Resgata o codigo passado na URL
    $id=$_GET['id'];

    //Utilizando variavel Global no UPDATE do registro
    $_SESSION['id']=$id;

    // Montando o SELECT para buscar o registro
    $sql="SELECT * FROM tbl_nivel_usuario WHERE id_nivel_usuario=".$id;

    //Executa no BD o select
    $select = mysql_query($sql);

    //Verifica se o resultado do select tem registros e
    //converte o resultado em um array
    if($rsConsulta=mysql_fetch_array($select))
    {
      $nivel=$rsConsulta['nivel'];
    }

  }

}
//////////////////////////////////////////////////////////////
if(isset($_POST["btnSalvar"]))
{
  //Resgatar os dados fornecidos pelo usuario
  //usando o metod POST, conforme escolhido pelo Form
  $nivel=$_POST["txtNivel"];

  if($_POST["btnSalvar"]=='Salvar')
  {
    //Monta o Script para enviar para o BD
    $sql = "INSERT INTO tbl_nivel_usuario (nivel) values ('".$nivel."') ";

  }else if($_POST["btnSalvar"]=='atualizar')
    {
      $sql = "UPDATE tbl_nivel_usuario SET nivel = '".$nivel."' where id_nivel_usuario=".$_SESSION['id'];

    }
    //Executa o script no BD
    mysql_query($sql);

   header('location:index.php#');
    //Dar um echo so sql sempre que der erro no insert, para ver qual é o erro
  //  echo($sql);

}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/cms/modal_cad_nivel_usuario.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>
    <div class="container_nivel_usuario">
      <div class="container_titulo_n">
        <div class="item_titulo_n negrito fs_40 align_center centro_lr preenche_t_20">
          Cadastro de Níveis
        </div>
      </div>
      <form class="frmCadNivel centro_lr" action="modal_cad_nivel_usuario.php" method="post">
        <div class="container_sub_n float_left margem_t_20">
          <div class="item_sub_n preenche_t_10 fs_20 align_center negrito">
            Nível
          </div>
        </div>
        <div class="container_input_n float_left margem_t_20 margem_l_30">
          <div class="item_input_n">
            <input class="input_n" type="text" placeholder="Nível" name="txtNivel" value="<?php echo($nivel) ?>">
          </div>
        </div>
        <div class="container_bt_n float_left margem_t_20 margem_l_20">
          <div class="item_bt_n">
            <input class="submit_n" type="submit" name="btnSalvar" value="<?php echo($botao) ?>">
          </div>
        </div>
        <div class="container_titulo_exibe_n float_left margem_t_100">
          <div class="item_titulo_exibe_n align_center preenche_t_10 fs_25">
            Níveis Cadastrados
          </div>
        </div>
        <?php
        $sql = "SELECT * FROM tbl_nivel_usuario";
          $select = mysql_query($sql);
          while ($rsConsulta = mysql_fetch_array($select))
          {

        ?>
        <div class="container_mostrando_dados float_left">
          <div class="item_mostrando_dados float_left">
            <?php echo($rsConsulta['nivel']) ?>
          </div>
          <div class="item_escolhas_n float_left">
            <div class="escolha float_left preenche_t_15 fs_20 borda_preta_1 align_center">
              <a href="modal_cad_nivel_usuario.php?escolha=excluir&id=<?php echo(rsConsulta['id_nivel_usuario']);?>"></a>Excluir
            </div>
            <div class="escolha float_left preenche_t_15 fs_20 borda_preta_1 align_center">
              <a href="modal_cad_nivel_usuario.php?escolha=atualizar&id=<?php echo($rsConsulta['id_nivel_usuario']);?>">Editar
            </div>
          </div>
        </div>
        <?php
          }
        ?>
      </form>
    </div>
  </body>
</html>
