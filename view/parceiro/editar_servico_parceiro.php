<?php
session_start();
require_once("../../database/conect.php");
Conexao_db();

    if(isset($_POST["btEditar"]))
    {
        //Resgatar os dados fornecidos pelo usuario
        //usando o metod POST, conforme escolhido pelo Form
        $nome=$_POST["txtNome"];
        $preco=$_POST["txtPreco"];
        $garantia=$_POST["txtGarantia"];
        $descricao=$_POST["txtDescricao"];
        $idProduto=$_SESSION["id_produto"];

        //Monta o Script para enviar para o BD
        //AQUI ESTA INCOMPLETO *************************************************************
        addslashes($sql = "update tbl_produto set nome = '".$nome."', preco ='".$preco."', garantia ='".$garantia."', descricao='".$descricao."' WHERE id_produto =".$idProduto);
        // echo ($sql);
        //Executa o script no BD
        mysql_query($sql);
    ?>
    <script>
        alert("Produto editado com sucesso!");
    </script>
    <?php
        header('location:modal_cms_gerenciar_produto.php');
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Editar Produtos</title>
        <link rel="stylesheet" href="../css/parceiro/editar_servico_home.css">
        <link rel="stylesheet" href="../css/parceiro/cms_agenda_parceiro.css">
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
        <a class="return-button" href="cms_adm_parceiro.php">
          <i class="material-icons">
            keyboard_arrow_left
          </i>
        </a>
      </header>

      <div class="blank-space"></div>

      <div class="main">
        <form name="frmPH" method="post" action="editar_servico_parceiro.php">
          
          <div class="cont-princ">

            <label class="label-pr-h">Editar Serviço</label>
            <div class="divisor"></div>

            <label for="txtNome" class="field-label">Nome do Serviço</label>
            <input id="txtNome" class="android-input input-text" value="<?php echo($_SESSION['nome']); ?>" type="text" name="txtNome">

            <label for="txtPreco" class="field-label">Preço do Serviço</label>
            <input id="txtPreco" class="android-input input-text" type="text" value="<?php echo($_SESSION['preco']); ?>" name="txtPreco">

            <select class="select-pac" name="slcGarantia">
              <option selected disabled value="">SELECIONE UMA GARANTIA</option>
              <option value="1 Mes">1 Meses</option>
              <option value="3 Meses">3 Meses</option>
              <option value="5 Meses">5 Meses</option>
              <option value="6 Meses">6 Meses</option>
              <option value="12 Meses">12 Meses</option>
            </select>

            <label for="txtDescricao" class="field-label">Descrição do Servicço</label>
            <input id="txtDescricao" class="android-input input-text" value="<?php echo($_SESSION['descricao']); ?>" type="text" name="txtDescricao">

          </div>

          <input class="input-submit-cad-veic" type="submit" name="btEditar" value="Editar Serviço">
          
        </form>
      </div>

      <script src="../js/jquery.js"></script>
      <script src="../js/pac_framework.js"></script>

    </body>
  </html>
