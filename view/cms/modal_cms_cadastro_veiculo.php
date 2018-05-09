<?php
require_once("../../database/conect.php");
Conexao_db();

if(isset($_POST["btnSalvar"]))
{
    //Resgatar os dados fornecidos pelo usuario
    //usando o metod POST, conforme escolhido pelo Form
    $ano=$_POST["txtAno"];
    $placa=$_POST["txtPlaca"];
    $cor=$_POST["slcCor"];
    $modelo=$_POST["slcModelo"];
    $fabricante=$_POST["slcFabricante"];
    $portas=$_POST["slcQtdPortas"];
    $quilometragem=$_POST["txtQuilometragem"];
    $tipo=$_POST["slcTipoVeiculo"];


    //Monta o Script para enviar para o BD
    addslashes($sql = "insert into tbl_veiculo (ano_fabricacao, placa, id_cor, id_modelo, qtd_porta, quilometro_rodado, id_tipo_veiculo, id_modelo_veiculo) values ('".$ano."','".$placa."','".$cor."','".$modelo."',
    '".$portas."','".$quilometragem."','".$tipo."','".$fabricante."');");

    //Executa o script no BD
    mysql_query($sql);

    header('location:modal_cms_cadastro_veiculo.php');
    //Dar um echo so sql sempre que der erro no insert, para ver qual é o erro
   // echo($sql);
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastrar Veiculos</title>

    <script type="text/javascript">
      <!--
      function CarregarSelect(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0;
      }
      //-->
      </script>


  </head>
  <link rel="stylesheet" type="text/css" href="../css/cms/modal_cms_cadastro_veiculo.css">
  <link rel="stylesheet" href="../css/padroes.css">
  <body>
    <div class="cadastro_veiculo">
      <div class="nome_inputs">
        <div class="nome_input">
          Fabricante
        </div>
        <div class="nome_input">
          Modelo
        </div>
        <div class="nome_input">
          Ano
        </div>
        <div class="nome_input">
          Placa
        </div>
        <div class="nome_input">
          Cor
        </div>
        <div class="nome_input">
          Quantidade de Portas
        </div>
        <div class="nome_input">
          Quilometragem
        </div>
        <div class="nome_input">
          Tipo de veiculo
        </div>
      </div>
      <form name="frmCadastroVeiculo" method="POST" action="modal_cms_cadastro_veiculo.php">
        <div class="inputs">
          <div class="item">
            <select name="slcFabricante" onchange="CarregarSelect('parent',this,0)">
              <?php
              if (isset($_GET['idFab']))
              {
                  $IdFabricant = $_GET['idFab'];
                  $NomeFabricant = $_GET['nomeFab'];
                ?>

                    <option  selected value="<?php echo($IdFabricant); ?>"><?php echo($NomeFabricant); ?></option>

                <?php
              }else {
              ?>
                  <option value="">Selecione um item</option>
              <?php
              }

              ?>


              <?php
              $sql = "SELECT * FROM tbl_fabricante";
              $select = mysql_query($sql);
              while ($rsCV = mysql_fetch_array($select))
              {

                ?>
                <option value="modal_cms_cadastro_veiculo.php?idFab=<?php echo($rsCV['id_fabricante']) ?>&nomeFab=<?php echo($rsCV['fabricante']) ?>"><?php echo($rsCV['fabricante']) ?></option>
                <?php
              }
              ?>
            </select>
          </div>
          <div class="item">
            <?php
            if (isset($_GET['idFab']))
              $IdFabricant = $_GET['idFab'];
            else
              $IdFabricant = 0;


            ?>

            <select name="slcModelo">


              <option value="">Selecione um Item</option>
              <?php
              if ($IdFabricant<>0)
              {
                  $sql = "SELECT * FROM tbl_modelo_veiculo where id_fabricante = ".$IdFabricant;
                  $select = mysql_query($sql);
                  while ($rsCV = mysql_fetch_array($select))
                  {

                    ?>
                    <option value="<?php echo($rsCV['id_modelo_veiculo']) ?>"><?php echo($rsCV['modelo']) ?></option>
                    <?php
                  }
                }
                ?>
            </select>
          </div>
          <div class="item">
            <input type="text" name="txtAno" value="">
          </div>
          <div class="item">
            <input type="text" name="txtPlaca" value="">
          </div>
          <div class="item">
            <select name="slcCor">
              <?php
              $sql = "SELECT * FROM tbl_cor";
                $select = mysql_query($sql);
                while ($rsCV = mysql_fetch_array($select))
                {

              ?>
              <option value="<?php echo($rsCV['id_cor']) ?>"><?php echo($rsCV['cor']) ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="item">
            <select name="slcQtdPortas">
              <option value="2">2</option>
              <option value="4">4</option>
            </select>
          </div>
          <div class="item">
            <input type="text" name="txtQuilometragem" value="">
          </div>
          <!-- Tipo -->
          <div class="item">
            <select name="slcTipoVeiculo">
              <?php
              $sql = "SELECT * FROM tbl_tipo_veiculo";
                $select = mysql_query($sql);
                while ($rsCV = mysql_fetch_array($select))
                {

              ?>
              <option value="<?php echo($rsCV['id_tipo_veiculo']) ?>"><?php echo($rsCV['tipo']) ?></option>
              <?php
                }
              ?>
            </select>
          </div>
        </div>
        <div class="botaoSalvar">
          <input type="submit" name="btnSalvar" value="Salvar Veiculo">
        </div>
      </form>
    </div>
  </body>
</html>
