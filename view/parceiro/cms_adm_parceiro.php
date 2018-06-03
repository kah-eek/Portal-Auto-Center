
<?php
session_start();
// echo($_SESSION['id_parceiro']);
  // echo($_SESSION['id_parceiro1']); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/padroes.css">
    <link rel="stylesheet" href="../css/parceiro/cms_adm_parceiro.css">
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
      
      <div class="item-menu">
        <a class="block-max" href="modal_cms_cadastro_veiculo.php">
          <p class="all">Cadastrar Veículo</p>
        </a>
      </div>

      <div class="item-menu">
        <a class="block-max" href="consultar_veiculo_parceiro.php">
          <p class="all">Gerenciar Veículos</p>
        </a>
      </div>

      <div class="item-menu">
        <a class="block-max" href="modal_cms_produtos_home.php">
          <p class="all">Cadastrar Produtos</p>
        </a>
      </div>

      <div class="item-menu">
        <a class="block-max" href="modal_cms_visualiza_produtos_home.php">
          <p class="all">Gerenciar Produtos</p>
        </a>
      </div>

      <div class="item-menu">
        <a class="block-max" href="modal_cms_cad_servicos.php">
          <p class="all">Cadastrar Serviços</p>
        </a>
      </div>

      <div class="item-menu">
        <a class="block-max" href="modal_cms_gerenciar_produto.php">
          <p class="all">Gerenciar Serviços</p>
        </a>
      </div>

      <div class="item-menu">
        <a class="block-max" href="servicos.php">
          <p class="all">Serviços solicitados</p>
        </a>
      </div>


    </div>

    <script src="../js/jquery.js"></script>

    <script>
      setInterval(function(){
        var rand = Math.floor(Math.random()*10); 

        $('.item-menu').eq(rand).css({
          transition:'0.5s',
          width:'430px',
          header:'400px',
          backgroundColor:'rgba(0,200,83,0.7)',
          color:'#fff',
          textShadow:'0 0 5px #000'
        });
      },2000);

      setInterval(function(){
        var rand = Math.floor(Math.random()*10); 

        $('.item-menu').eq(rand).css({
          transition:'1s',
          width:'410px',
          header:'380px',
          backgroundColor:'',
          color:'',
          textShadow:''
        });
      },500);

    </script>
    
  </body>
</html>
