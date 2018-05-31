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
      <body>
        <div class="Container_titulo">
          <div class="titulo">
            Nome
          </div>
          <div class="titulo">
            Preco
          </div>
          <div class="titulo">
            Garantia
          </div>
          <div class="titulo">
            Descrição
          </div>
        </div>
        <form name="frmPH" method="post" action="editar_servico_parceiro.php">
          <div class="Container_input">
            <div class="input">
              <input type="text" name="txtNome" value="<?php echo($_SESSION['nome']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtPreco" value="<?php echo($_SESSION['preco']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtGarantia" value="<?php echo($_SESSION['garantia']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtDescricao" value="<?php echo($_SESSION['descricao']); ?>">
            </div>
          </div>
          <div class="input input_submit">
            <input type="submit" name="btEditar" value="Editar">
          </div>
        </form>
      </body>
    </html>
