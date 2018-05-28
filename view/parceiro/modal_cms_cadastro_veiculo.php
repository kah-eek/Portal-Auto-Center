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
    $combustivel=$_POST["slcCombustivel"];


    //Monta o Script para enviar para o BD
    $sql = "insert into tbl_veiculo (ano_fabricacao, placa, id_cor, id_modelo, qtd_porta, quilometro_rodado, id_tipo_veiculo, id_modelo_veiculo) values ('".$ano."','".$placa."','".$cor."','".$modelo."',
    '".$portas."','".$quilometragem."','".$tipo."','".$fabricante."');";

    mysql_query($sql);

    $sql2 = "SELECT LAST_INSERT_ID();";
      $resultado1 = mysql_query ($sql2);
        if ($rs=mysql_fetch_array($resultado1))
        {
          $id_veiculo = $rs['LAST_INSERT_ID()'];
        }


    // $sql3 = "insert into tbl_tipo_combustivel (combustivel) values ('".$combustivel."')";
    //
    // mysql_query($sql3);

    $sql4 = "SELECT * FROM tbl_tipo_combustivel where id_tipo_combustivel =".$combustivel;
      $resultado2 = mysql_query ($sql4);
        if ($rs=mysql_fetch_array($resultado2))
        {
          $id_combustivel = $rs['id_tipo_combustivel'];
        }

      $sql5 = "insert into tbl_veiculo_tipo_combustivel (id_veiculo, id_tipo_combustivel) values ('".$id_veiculo."','".$id_combustivel."');";

        mysql_query($sql5);

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
    <link rel="stylesheet" href="../css/parceiro/cms_veiculos_cadastrados.css">
    <link rel="stylesheet" type="text/css" href="../css/cms/modal_cms_cadastro_veiculo.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>
    <div class="container_conteudo_central_vc">
      <!-- MENU LATERAL -->
      <div class="container_menu_l_vc float_left borda_preta_1 margem_l_20">
        <div class="container_img_menu_vc centro_lr borda_preta_1 margem_t_20">
          <div class="item_img_menu_l_vc ">

          </div>
        </div>
        <!-- NOME USUÁRIO -->
        <div class="container_nome_usuario_vc margem_t_10">
          <div class="item_nome_usuario_vc centro_lr align_center preenche_t_15 fs_18 negrito txt_branco">
            Nome de Usuário
          </div>
        </div>
      </div>
      <div class="cadastro_veiculo">
        <!-- Título de apresentação da página -->
        <div class="titulo_pagina_cv centro_lr preenche_t_10">
          <!-- Subtítulo -->
          <div class="subtitulo_cv fs_30 align_center centro_lr conteudo">
            <h2>Cadastre um Veículo</h2>
          </div>
        </div>
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
          <div class="nome_input">
            Tipo de combustivel
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
            <div class="item">
              <select name="slcCombustivel">
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
          </div>
          <div class="botaoSalvar">
            <input type="submit" name="btnSalvar" value="Salvar Veiculo">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
