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
        <link rel="stylesheet" href="../css/parceiro/editar_produto_home.css">
        <link rel="stylesheet" href="../css/parceiro/cms_agenda_parceiro.css">
        <link rel="stylesheet" href="../css/padroes.css">
      </head>
      <body>
        <div class="Container_titulo">
          <div class="titulo">
            Modelo
          </div>
          <div class="titulo">
            Cor
          </div>
          <div class="titulo">
            Categoria
          </div>
          <div class="titulo">
            Nome
          </div>
          <div class="titulo">
            Preco
          </div>
          <div class="titulo">
            Conteudo embalagem
          </div>
          <div class="titulo">
            Garantia
          </div>
          <div class="titulo">
            Descrição
          </div>
          <div class="titulo">
            Observação
          </div>
        </div>
        <form name="frmPH" method="post" action="editar_produto_home.php">
          <div class="Container_input">
            <div class="input">
              <input type="text" name="txtModelo" value="<?php echo($_SESSION['id_modelo_produto']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtCor" value="<?php echo($_SESSION['id_cor']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtCategoria" value="<?php echo($_SESSION['id_categoria_produto']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtNome" value="<?php echo($_SESSION['nome']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtPreco" value="<?php echo($_SESSION['preco']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtConteudo" value="<?php echo($_SESSION['conteudo_embalagem']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtGarantia" value="<?php echo($_SESSION['garantia']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtDescricao" value="<?php echo($_SESSION['descricao']); ?>">
            </div>
            <div class="input">
              <input type="text" name="txtObs" value="<?php echo($_SESSION['observacao']); ?>">
            </div>
          </div>
          <div class="input input_submit">
            <input type="submit" name="btEditar" value="Editar">
          </div>
        </form>
      </body>
    </html>
