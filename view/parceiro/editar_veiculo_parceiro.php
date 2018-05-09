<?php
session_start();
require_once("../../database/conect.php");
Conexao_db();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar Veiculo</title>
    <link rel="stylesheet" href="../css/parceiro/editar_veiculo_parceiro.css">
		<?php
        if(isset($_POST["btEditar"]))
        {
            //Resgatar os dados fornecidos pelo usuario
            //usando o metod POST, conforme escolhido pelo Form
            $ano=$_POST["txtAno"];
            $fabricante=$_POST["txtFabricante"];
            $modelo=$_POST["txtModelo"];
            $placa=$_POST["txtPlaca"];
            $cor=$_POST["txtCor"];
            $quilometragem=$_POST["txtQuilometragem"];
            $tipoVeiculo=$_POST["txtTipo"];
            $qtdPortas=$_POST["txtQtdPortas"];
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
  </head>
  <form name="frmEV" method="post" action="editar_veiculo_parceiro.php">
    <body>
      <div class="item">
        <input type="text" name="txtAno" value="<?php echo($_SESSION['ano_fabricacao']); ?>">
      </div>
      <div class="item">
        <input type="text" name="txtFabricante" value="<?php echo($_SESSION['id_modelo_veiculo']); ?>">
      </div>
      <div class="item">
        <input type="text" name="txtModelo" value="<?php echo($_SESSION['id_modelo']); ?>">
      </div>
      <div class="item">
        <input type="text" name="txtPlaca" value="<?php echo($_SESSION['placa']); ?>">
      </div>
      <div class="item">
        <input type="text" name="txtCor" value="<?php echo($_SESSION['cor']); ?>">
      </div>
      <div class="item">
        <input type="text" name="txtQuilometragem" value="<?php echo($_SESSION['quilometragem']); ?>">
      </div>
      <div class="item">
        <input type="text" name="txtTipo" value="<?php echo($_SESSION['tipoVeiculo']); ?>">
      </div>
      <div class="item">
        <input type="text" name="txtQtdPortas" value="<?php echo($_SESSION['qtdPortas']); ?>">
      </div>
      <div class="item">
        <input type="submit" name="btEditar" value="Editar">
      </div>
			<div id="bt_voltar">
          <a href="consultar_veiculo_parceiro.php" style="text-decoration:none">
              Voltar(x)
          </a>
      </div>
    </body>
  </form>
</html>
