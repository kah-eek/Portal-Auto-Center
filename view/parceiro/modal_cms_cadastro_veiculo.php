<?php
session_start();
require_once("../../database/conect.php");
Conexao_db();
$id_usuario = $_SESSION['id_usuario'];
$id_parceiro = $_SESSION['id_parceiro1'];

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
    $combustivel=$_POST["slcCombustivel"];


    //Monta o Script para enviar para o BD
    $sql = "insert into tbl_veiculo (ano_fabricacao, placa, id_cor, id_modelo, qtd_porta, quilometro_rodado, id_tipo_veiculo, id_modelo_veiculo) values ('".$ano."','".$placa."','".$cor."','".$modelo."',
    '".$portas."','".$quilometragem."','".$tipo."','".$fabricante."');";

    mysql_query($sql);
    // echo ($sql);
    $sql2 = "SELECT LAST_INSERT_ID();";
      $resultado1 = mysql_query ($sql2);
        if ($rs=mysql_fetch_array($resultado1))
        {
          $id_veiculo = $rs['LAST_INSERT_ID()'];
        }

    //
    // $sql3 = "SELECT * FROM tbl_parceiro as p where p.id_usuario =".$id_usuario;
    // //
    // mysql_query($sql3);
    // // echo $sql3;
    // $select8 = mysql_query($sql3);
    // $rsParceiro = mysql_fetch_array($select8);

    // $id_parceiro = $rsParceiro['id_parceiro'];
    $sql3 = "SELECT * FROM tbl_parceiro as p where p.id_usuario =".$id_usuario;
      $resultado3 = mysql_query ($sql3);
        if ($rs=mysql_fetch_array($resultado3))
        {
          $id_parceiro = $rs['id_parceiro'];
        }
    // $id_parceiro = 15;



    $sql4 = "SELECT * FROM tbl_tipo_combustivel where id_tipo_combustivel =".$combustivel;
      $resultado2 = mysql_query ($sql4);
        if ($rs=mysql_fetch_array($resultado2))
        {
          $id_combustivel = $rs['id_tipo_combustivel'];
        }

      $sql5 = "insert into tbl_veiculo_tipo_combustivel (id_veiculo, id_tipo_combustivel) values ('".$id_veiculo."','".$id_combustivel."');";

        mysql_query($sql5);
        // echo $sql5;


      $sql6 = "insert into tbl_veiculo_parceiro (id_parceiro, id_veiculo) values ('".$id_parceiro."','".$id_veiculo."');";

        mysql_query($sql6);
        // echo $sql6;


    header('location:modal_cms_cadastro_veiculo.php');
    //Dar um echo so sql sempre que der erro no insert, para ver qual é o erro
    // echo($sql);
    // echo($sql2);
    // echo($sql4);
    // echo($sql5);
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
      <!--
      function CarregarSelect(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0;
      }
      //-->
      </script>
    <!-- <link rel="stylesheet" href="../css/parceiro/cms_veiculos_cadastrados.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/cms/modal_cms_cadastro_veiculo.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body class="body">

    <header class="header">
      <img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=3159b23f37c4f3954e97072e00e975ab&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb">

      <h1 class="page-title">Auto Fast</h1>

      <div class="saudacao">
        <p>Bem-vindo</p>
        <p>Caique M. Oliveira</p>
      </div>
    </header>

    <div class="blank-space"></div>

    <div class="main">

      <form name="frmCadastroVeiculo" method="POST" action="modal_cms_cadastro_veiculo.php">

        <div class="form-container">
          <label for="slcFabricante" class="titulo-cad-ve">Cadastre um Veículo</label>

          <div class="divisor"></div>

          <select id="slcFabricante" class="select-pac" required name="slcFabricante" onchange="CarregarSelect('parent',this,0)">
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
                <option selected disabled value="">Fabricante</option>
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

          <?php
            if (isset($_GET['idFab']))
              $IdFabricant = $_GET['idFab'];
            else
              $IdFabricant = 0;


            ?>

            <select class="select-pac" required name="slcModelo">


              <option selected disabled value="">Modelo</option>
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

            <label for="txtAno" class="field-label">Ano do Veículo</label>
            <input id="txtAno" class="android-input input-text" type="text" name="txtAno">

            <label for="txtPlaca" class="field-label">Placa do Veículo</label>
            <input id="txtPlaca" class="android-input input-text" type="text" name="txtPlaca">

            <select class="select-pac" required name="slcCor">
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

            <select class="select-pac" required name="slcQtdPortas">
              <option selected disabled value="">Quantidade de Portas</option>
              <option value="2">2</option>
              <option value="4">4</option>
            </select>

            <label for="txtQuilometragem" class="field-label">Quilometragem do Veículo</label>
            <input id="txtQuilometragem" class="android-input input-text" type="text" name="txtQuilometragem">

            <select class="select-pac" required name="slcTipoVeiculo">
              <option selected disabled value="">Tipo de Veículo</option>
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

            <select class="select-pac" required name="slcCombustivel">
              <option selected disabled value="">Tipo de Combustível</option>
              <?php
              $sql = "SELECT * FROM tbl_tipo_combustivel";
                $select = mysql_query($sql);
                while ($rsCV = mysql_fetch_array($select))
                {

              ?>
              <option value="<?php echo($rsCV['id_tipo_combustivel']) ?>"><?php echo($rsCV['combustivel']) ?></option>
              <?php
                }
              ?>
            </select>    
        </div>

        <input class="input-submit-cad-veic" type="submit" name="btnSalvar" value="Salvar Veiculo">

      </form>  
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/pac_framework.js"></script>

  </body>
</html>
