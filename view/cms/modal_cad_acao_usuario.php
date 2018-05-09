<?php

  session_start();
  $acao="";
  $botao="Salvar";

  mysqli_connect('localhost','root','bcd127','db_auto_center');

if(isset($_GET['escolha']))
{
  $escolha = $_GET['escolha'];

  //if da escolha excluir
  if($escolha == 'excluir')
  {
    //Resgata o codigo passado na URL
    $id=$_GET['id'];

    $sql = "DELETE FROM tbl_acao_usuario WHERE id_acao_usuario= ".$id;

    mysqli_query($sql);
    // echo ($sql)
    header('location:index.php#.php');
/////////////////////////////////////////////////////////////
//Verificando se a variavel modo = consulta_editar
  }else if($escolha=='atualizar')
  {
    $botao="atualizar";
    //Resgata o codigo passado na URL
    $id=$_GET['id'];

    //Utilizando variavel Global no UPDATE do registro
    $_SESSION['id']=$id;

    // Montando o SELECT para buscar o registro
    $sql="SELECT * FROM tbl_acao_usuario WHERE id_acao_usuario=".$id;

    //Executa no BD o select
    $select = mysql_query($sql);

    //Verifica se o resultado do select tem registros e
    //converte o resultado em um array
    if($rsConsulta=mysql_fetch_array($select))
    {
      $acao=$rsConsulta['acao'];
    }

  }

}
///////////////////////////////////////////////////////////////////////
if(isset($_POST["btnSalvar"]))
{
  //Resgatar os dados fornecidos pelo usuario
  //usando o metod POST, conforme escolhido pelo Form
  $acao=$_POST["txtAcao"];

  if($_POST["btnSalvar"]=='Salvar')
  {
    //Monta o Script para enviar para o BD
    $sql = "INSERT INTO tbl_acao_usuario (acao) values ('".$acao."') ";

  }else if($_POST["btnSalvar"]=='atualizar')
    {
      $sql = "UPDATE tbl_acao_usuario set '".$acao."' where id=".$_SESSION['id'];

    }

    //Executa o script no BD
    mysqli_query($sql);

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
    <link rel="stylesheet" href="../css/cms/modal_cad_acao_usuario.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>
    <div class="container_principal_u">
      <div class="container_titulo_u centro_lr float_left">
        <div class="item_titulo_u fs_40 preenche_t_20 align_center">
          Cadastro Ação Usuário
        </div>
      </div>
      <form class="frmCadUsuario centro_lr" action="modal_cad_usuario.php" method="post">
        <div class="container_subs float_left">
          <div class="item_subs float_left align_center preenche_t_20 fs_20 negrito">
            Ação
          </div>
          <div class="item_subs float_left align_center fs_20 negrito">
            <div class="item_input_u float_left">
              <input class="input_u margem_l_20" type="text" name="txtAcao" placeholder="Ação" value="<?php echo($acao) ?>">
            </div>
          </div>
          <div class="item_subs float_left align_center fs_20 negrito">
            <div class="item_input_u float_left">
              <input class="submit_u  margem_t_10" type="submit" name="btnSalvar" value="<?php echo($botao) ?>">
            </div>
          </div>
        </div>

        <div class="container_titulo_visualizar float_left margem_t_50">
          <div class="item_titulo_visualizar fs_40 preenche_t_20 align_center">
            Visualizar Ações
          </div>
        </div>
        <?php
        $sql = "SELECT * FROM tbl_acao_usuario";
          $select = mysql_query($sql);
          while ($rsConsulta = mysql_fetch_array($select))
          {

        ?>
        <div class="container_exibindo_acoes float_left">
          <div class="item_exibindo_acoes">
            <?php echo($rsConsulta['acao']) ?>
          </div>
        </div>
        <div class="container_escolhas float_left">
          <div class="item_escolhas float_left fs_20 preenche_t_20 align_center">
            <a href="modal_cad_acao_usuario.php?escolha=excluir&id=<?php echo($rsConsulta['id_acao_usuario']);?>">Excluir
          </div>
          <div class="item_escolhas float_left fs_20 preenche_t_20 align_center">
            <a href="modal_cad_acao_usuario.php?escolha=atualizar&id=<?php echo($rsConsulta['id_acao_usuario']);?>">Editar
          </div>
        </div>
        <?php
        }
        ?>
      </form>
    </div>
  </body>
</html>
