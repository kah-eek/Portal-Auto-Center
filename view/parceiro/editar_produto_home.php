<?php
session_start();
require_once("../../database/conect.php");
Conexao_db();

    if(isset($_POST["btEditar"]))
    {
        //Resgatar os dados fornecidos pelo usuario
        //usando o metod POST, conforme escolhido pelo Form
        $modelo=$_POST["txtModelo"];
        $categoria=$_POST["txtCategoria"];
        $nome=$_POST["txtNome"];
        $preco=$_POST["txtPreco"];
        $cor=$_POST["txtCor"];
        $conteudo=$_POST["txtConteudo"];
        $garantia=$_POST["txtGarantia"];
        $descricao=$_POST["txtDescricao"];
        $Obs=$_POST["txtObs"];
        $idProduto=$_SESSION["id_produto"];

        //Monta o Script para enviar para o BD
        //AQUI ESTA INCOMPLETO *************************************************************
        addslashes($sql = "update tbl_produto set id_modelo_produto ='".$modelo."', id_cor ='".$cor."', id_categoria_produto ='".$categoria."', nome = '".$nome."', preco ='".$preco."', conteudo_embalagem ='".$conteudo."', garantia ='".$garantia."', descricao='".$descricao."', observacao='".$Obs."' WHERE id_produto =".$idProduto);
        // echo ($sql);
        //Executa o script no BD
        mysql_query($sql);
    ?>
    <script>
        alert("Produto editado com sucesso!");
    </script>
    <?php
            header('location:modal_cms_visualiza_produtos_home.php');
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Editar Produtos</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/padroes.css">
        <link rel="stylesheet" href="../css/parceiro/editar_produto_home.css">
        <link rel="stylesheet" href="../css/parceiro/cms_agenda_parceiro.css">
      </head>
      <body class="body">

    <header class="header">
      <img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=3159b23f37c4f3954e97072e00e975ab&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb">

      <h1 class="page-title">Auto Fast</h1>

      <div class="saudacao">
        <p>Bem-vindo</p>
        <p>Caique M. Oliveira</p>
      </div>
      <a class="return-button" href="cms_adm_parceiro.php">
        <i class="material-icons">
          keyboard_arrow_left
        </i>
      </a>
    </header>

    <div class="blank-space"></div>

    <div class="main">

      <form name="frmCadastroVeiculo" method="POST" action="modal_cms_cadastro_veiculo.php">

        <div class="form-container">
          <label for="slcFabricante" class="titulo-cad-ve">Editar Produto</label>

          <div class="divisor"></div>

          <?php
            if (isset($_GET['idFab']))
              $IdFabricant = $_GET['idFab'];
            else
              $IdFabricant = 0;


            ?>

            <select class="select-pac" required name="slcFabricante">


              <option selected disabled value="">Fabricante</option>
              <?php
              if ($IdFabricant<>0)
              {
                  $sql = "SELECT * FROM do frabricanteo where id_fabricante = ".$IdFabricant;
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

             <select class="select-pac" required name="slcCor">


              <option selected disabled value="">Cor do produto</option>
              <?php
              if ($IdFabricant<>0)
              {
                  $sql = "SELECT * FROM da cor = ".$IdFabricant;
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

            <select class="select-pac" required name="slcCategoria">


              <option selected disabled value="">Categoria</option>
              <?php
              if ($IdFabricant<>0)
              {
                  $sql = "SELECT * FROM da categoria = ".$IdFabricant;
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

            <label for="txtNome" class="field-label">Nome do Produto</label>
            <input id="txtNome" value="<?php echo($_SESSION['nome']); ?>" class="android-input input-text" type="text" name="txtNome">

            <label for="txtPreco" class="field-label">Preço do Produto</label>
            <input id="txtPreco" value="<?php echo($_SESSION['preco']); ?>" class="android-input input-text" type="text" name="txtPreco">

            <label for="txtConteudo" class="field-label">Conteúdo presente na Embalagem</label>
            <input id="txtConteudo" value="<?php echo($_SESSION['conteudo_embalagem']); ?>" class="android-input input-text" type="text" name="txtConteudo">

            <select class="select-pac" required name="slcGarantia">
              <option selected disabled value="">Garantia</option>
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

            <label for="txtDescricao" class="field-label">Descrição</label>
            <input id="txtDescricao" value="<?php echo($_SESSION['descricao']); ?>" class="android-input input-text" type="text" name="txtDescricao">

            <label for="txtObs" class="field-label">Observação</label>
            <input id="txtObs" value="<?php echo($_SESSION['observacao']); ?>" class="android-input input-text" type="text" name="txtObs">

        </div>

        <input class="input-submit-cad-veic" type="submit" name="btEditar" value="Editar Produto">

      </form>  
      
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/pac_framework.js"></script>

  </body>

</html>
