<?php

  // Imports
  require_once('../../controller/Parceiro_class.php');
  require_once('../../controller/MySql_class.php');
  require_once('../../model/ParceiroDAO.php');

  $dadosParceiro = Parceiro::obterDadosParceiroById($_GET['id']);

  var_dump($dadosParceiro);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/cms/cms_modal_exibir_dados_cliente.css">
  </head>
  <body>
    <!-- Label dos dados a sereme exibidos -->
    <div class="labelExibicaoDados preenche_25 titulo fs_18">
      Parceiro
    </div>

    <!-- Divisor de conteúdo -->
    <div class="divisor_l"></div>


  </body>
</html>
