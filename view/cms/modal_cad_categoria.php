<?php

session_start();
$categoria="";
$botao="Salvar";

require_once('../../database/conect.php');
Conexao_db();
///////////////////////////////////////////////////

// if da escolha , visualizar ou excluir
if(isset($_GET['escolha']))
{
    $escolha = $_GET['escolha'];

    //if da escolha excluir
    if($escolha == 'excluir')
    {
      //Resgata o codigo passado na URL
      $id=$_GET['id'];

        $sql = "DELETE FROM tbl_categoria_topico_forum WHERE id_categoria_topico_forum= ".$id;
        mysql_query($sql);
        // echo ($sql)
        header('location:index.php#.php');

/////////////////////////////////////////////////////////
//Verificando se a variavel modo = consulta_editar
    }else if($escolha=='atualizar')
    {
      $botao="atualizar";
      //Resgata o codigo passado na URL
      $id=$_GET['id'];

      //Utilizando variavel Global no UPDATE do registro
      $_SESSION['id']=$id;

      // Montando o SELECT para buscar o registro
      $sql="SELECT * FROM tbl_categoria_topico_forum WHERE id_categoria_topico_forum=".$id;

      //Executa no BD o select
      $select = mysql_query($sql);

        //Verifica se o resultado do select tem registros e
        //converte o resultado em um array
        if($rsConsulta=mysql_fetch_array($select))
        {
          $categoria=$rsConsulta['categoria'];
        }

    }
}
/////////////////////////////////////////////////////////

if(isset($_POST["btnSalvar"]))
{
    //Resgatar os dados fornecidos pelo usuario
    //usando o metod POST, conforme escolhido pelo Form
    $categoria=$_POST["txtCategoria"];

    if($_POST["btnSalvar"]=='Salvar')
    {
      //Monta o Script para enviar para o BD
      $sql = "INSERT INTO tbl_categoria_topico_forum (categoria) values ('".$categoria."') ";

    }else if($_POST["btnSalvar"]=='atualizar')
      {
        $sql = "UPDATE tbl_categoria_topico_forum set '".$categoria."' where id=".$_SESSION['id'];

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
    <link rel="stylesheet" href="../css/cms/modal_cad_categoria.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>
    <div class="container_principal_c float_left">
      <div class="container_titulo_c margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
        <div class="item_titulo_c align_center preenche_t_20 fs_25 negrito">
          Cadastro de Categoria
        </div>
      </div>
        <form name="frmCadCategoria" method="post" action="modal_cad_categoria.php">
          <div class="container_segura_conteudo">

            <div class="container_visualiza_c centro_lr margem_t_10">
              <div class="container_topicos_c centro_lr">
                <div class="item_titulo_topicos_c float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
                  Add
                </div>
              </div>
              <div class="container_input margem_l_10">
                <div class="item_input">
                  <input class="item_input_t margem_t_5" type="text" name="txtCategoria" value="<?php echo($categoria) ?>">
                </div>
              </div>
            </div>

            <div class="container_bt float_left">
              <input class="item_bt" type="submit" name="btnSalvar" value="<?php echo($botao) ?>">
            </div>
          </div>

        <div class="container_exibe_conteudo float_left margem_t_100">
          <div class="item_titulo_topicos_c float_left preenche_t_10 fs_25 negrito margem_l_10 align_center borda_preta_1 bg_verde_vivo sombra_preta_20">
            Categorias
          </div>
          <?php
          $sql = "SELECT * FROM tbl_categoria_topico_forum";
            $select = mysql_query($sql);
            while ($rsConsulta = mysql_fetch_array($select))
            {

          ?>
          <div class="container_exibindo_categorias float_left margem_l_10">
            <div class="item_categoria">
              <?php echo($rsConsulta['categoria']) ?>
            </div>
          </div>
          <div class="container_exibindo_categorias float_left margem_l_10">
            <div class="item_delete">
              <a href="modal_cad_categoria.php?escolha=excluir&id=<?php echo($rsConsulta['id_categoria_topico_forum']);?>">Excluir

              <a href="modal_cad_categoria.php?escolha=atualizar&id=<?php echo($rsConsulta['id_categoria_topico_forum']);?>">Editar
            </div>
          </div>
          <?php
            }
          ?>
        </div>
      </form>
    </div>
  </body>
</html>
