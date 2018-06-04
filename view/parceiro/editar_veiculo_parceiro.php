<?php
session_start();
require_once("../../database/conect.php");
Conexao_db();

    if(isset($_POST["btEditar"]))
    {
        //Resgatar os dados fornecidos pelo usuario
        //usando o metod POST, conforme escolhido pelo Form
        $ano=$_POST["txtAno"];
        $fabricante=$_POST["slcFabricante"];
        $modelo=$_POST["slcModelo"];
        $placa=$_POST["txtPlaca"];
        $cor=$_POST["slcCor"];
        $quilometragem=$_POST["txtQuilometragem"];
        $tipoVeiculo=$_POST["slcTipoVeiculo"];
        $qtdPortas=$_POST["slcQtdPortas"];
        $idVeiculo=$_SESSION["id_veiculo"];

        //Monta o Script para enviar para o BD
        //AQUI ESTA INCOMPLETO *************************************************************
        addslashes($sql = "update tbl_veiculo set ano_fabricacao ='".$ano."', placa ='".$placa."', id_cor ='".$cor."', id_modelo = '".$modelo."', qtd_porta ='".$qtdPortas."', quilometro_rodado ='".$quilometragem."', id_tipo_veiculo ='".$tipoVeiculo."', id_modelo_veiculo='".$fabricante."' WHERE id_veiculo =".$idVeiculo);
        // echo ($sql);
        //Executa o script no BD
        mysql_query($sql);
    ?>
    <script>
        alert("Usuário editado com sucesso!");
    </script>
    <?php
            header('location:consultar_veiculo_parceiro.php');
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
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/padroes.css">
    <link rel="stylesheet" href="../css/parceiro/editar_veiculo_parceiro.css">
    <link rel="stylesheet" href="../css/parceiro/cms_agenda_parceiro.css">
  </head>
  <body class="body">

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
  
     ?>

    <div class="blank-space"></div>

    <div class="main">

      <form name="frmEV" method="post" action="editar_veiculo_parceiro.php">

        <div class="form-container">
          <label for="slcFabricante" class="titulo-cad-ve">Editar Veículo</label>

          <div class="divisor"></div>

          <label for="txtAno" class="field-label">Ano do Veículo</label>
          <input id="txtAno" value="<?php echo($_SESSION['ano_fabricacao']); ?>" class="android-input input-text" type="text" name="txtAno">

          <select class="select-pac" name="slcFabricante" onchange="CarregarSelect('parent',this,0)">
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
              <option value="editar_veiculo_parceiro.php?idFab=<?php echo($rsCV['id_fabricante']) ?>&nomeFab=<?php echo($rsCV['fabricante']) ?>"><?php echo($rsCV['fabricante']) ?></option>
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

            <select class="select-pac" name="slcModelo">


              <option selected disabled value="">Modelo</option>
              <?php
              if ($IdFabricant<>0)
              {
                  $sql = "SELECT * FROM tbl_modelo_veiculo where id_fabricante = ".$IdFabricant;
                  $select = mysql_query($sql);
                  while ($rsCV = mysql_fetch_array($select))
                  {

                    ?>
                    <option selected value="<?php echo($rsCV['id_modelo_veiculo']) ?>"><?php echo($rsCV['modelo']) ?></option>
                    <?php
                  }
                }
                ?>
            </select>


            <label for="txtPlaca" class="field-label">Placa do Veículo</label>
            <input id="txtPlaca" value="<?php echo($_SESSION['placa']); ?>" class="android-input input-text" type="text" name="txtPlaca">

            <select class="select-pac" name="slcCor">
              <option selected disabled value="">Cor</option>

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

            <label for="txtQuilometragem" class="field-label">Quilometragem do Veículo</label>
            <input id="txtQuilometragem" value="<?php echo($_SESSION['quilometragem']); ?>" class="android-input input-text" type="text" name="txtQuilometragem">

            <select class="select-pac" name="slcTipoVeiculo">
              <option disabled selected value="">Tipo de Veículo</option>
              <?php
              $sql = "SELECT * FROM tbl_tipo_veiculo";
                $select = mysql_query($sql);
                while ($rsCV = mysql_fetch_array($select))
                {

              ?>
              <option selected value="<?php echo($rsCV['id_tipo_veiculo']) ?>"><?php echo($rsCV['tipo']) ?></option>
              <?php
                }
              ?>
            </select>

             <select class="select-pac" name="slcQtdPortas">
                <option selected disabled value="">Portas</option>
                <option value="2">2</option>
                <option value="4">4</option>
              </select>

        </div>

        <input class="input-submit-cad-veic" type="submit" name="btEditar" value="Editar Veículo">

      </form>

    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/pac_framework.js"></script>

  </body>
</html>
