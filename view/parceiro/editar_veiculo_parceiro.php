<?php
require_once("../../database/conect.php");
Conexao_db();


if(isset($_GET)=="escolha")
	{
    $escolha = $_GET['escolha'];
    $id = $_GET['id'];
		//Resgatamos a chave primaria "codigo"
		//que foi passada no link do editar
		//e montamos o Select para pesquisa
		$_SESSION["id"]=$_GET["id"];
		$sql="select * from tbl_veiculo where id_veiculo=".$_SESSION["id"];

		//Executamos no Banco o Select each
		//guardamos na variavel local $select
		$select=mysql_query($sql);

		//Converte em Array o resultado do banco
		//e guarda na variavel rsconsulta
		$rsEV=mysql_fetch_array($select);

		//Resgatamos o resultado do banco
		//e guardamos em variavel locais
		$ano=$rsEV["ano_fabricacao"];
		$fabricante=$rsEV["id_modelo_veiculo"];
		$modelo=$rsEV["id_modelo"];
		$placa=$rsEV["placa"];
		$cor=$rsEV["id_cor"];
		$quilometragem=$rsEV["quilometro_rodado"];
    $tipoVeiculo=$rsEV["id_tipo_veiculo"];
    $qtdPortas=$rsEV["qtd_porta"];
    $botao="Editar";
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar Veiculo</title>
    <link rel="stylesheet" href="../css/parceiro/editar_veiculo_parceiro.css">
  </head>
  <form name="frmEV" method="get" action="editar_veiculos_parceiro.php">
    <body>
      <div class="item">
        <input type="text" name="" value="<?php echo($ano)?>">
      </div>
      <div class="item">
        <input type="text" name="" value="<?php echo($fabricante)?>">
      </div>
      <div class="item">
        <input type="text" name="" value="<?php echo($modelo)?>">
      </div>
      <div class="item">
        <input type="text" name="" value="<?php echo($placa)?>">
      </div>
      <div class="item">
        <input type="text" name="" value="<?php echo($cor)?>">
      </div>
      <div class="item">
        <input type="text" name="" value="<?php echo($quilometragem)?>">
      </div>
      <div class="item">
        <input type="text" name="" value="<?php echo($tipoVeiculo)?>">
      </div>
      <div class="item">
        <input type="text" name="" value="<?php echo($qtdPortas)?>">
      </div>
      <div class="item">
        <input type="submit" name="" value="<?php echo($botao)?>">
      </div>
    </body>
  </form>
</html>
