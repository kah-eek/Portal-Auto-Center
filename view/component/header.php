<?php

  // Arquivo CSS padrão de carregamento e outros
  $arquivo_css = 'view/css/loja';
  $header_css = 'view/css/header';
  $footer_css = 'view/css/footer';
  $normalize_css = 'view/css/normalize';
  $padroes_css = 'view/css/padroes';
  $carrosel_css = 'view/css/carrosel/style';
  $jquery = 'view/js/jquery.js';
  $modalCadastroCliente = 'view/js/modal.js';
  $logo_pac = 'view/pictures/logo/portal_auto_center';
  $facebook_icon = 'view/pictures/rede_social/facebook';
  $instagram_icon = 'view/pictures/rede_social/instagram';
  $twtter_icon = 'view/pictures/rede_social/twitter';
  $youtube_icon = 'view/pictures/rede_social/youtube';

  // Verifica se existe um outro arquivo fora do padrão a ser carregado
  if (isset($_GET['page'])) {
    $arquivo_css= 'css/'.$_GET['page'];
    $header_css = 'css/header';
    $footer_css = 'css/footer';
    $normalize_css = 'css/normalize';
    $padroes_css = 'css/padroes';
    $carrosel_css = 'css/carrosel/style';
    $jquery = 'js/jquery.js';
    $modalCadastroCliente = 'js/modal.js';
    $logo_pac = 'pictures/logo/portal_auto_center';
    $facebook_icon = 'pictures/rede_social/facebook';
    $instagram_icon = 'pictures/rede_social/instagram';
    $twtter_icon = 'pictures/rede_social/twitter';
    $youtube_icon = 'pictures/rede_social/youtube';
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Portal Auto Center</title>

    <link rel="stylesheet" type="text/css" href="<?=$padroes_css?>.css">
    <link rel="stylesheet" type="text/css" href="<?=$normalize_css?>.css">
    <link rel="stylesheet" type="text/css" href="<?=$header_css?>.css">
    <link rel="stylesheet" type="text/css" href="<?=$footer_css?>.css">
    <link rel="stylesheet" type="text/css" href="<?=$arquivo_css?>.css">

    <!-- Corrosel -->
    <link rel="stylesheet" type="text/css" href="<?=$carrosel_css?>.css">
    <!-- ##################################################### -->
    <!-- <script src="view/js/flip-card.js"></script> -->
    <script src="<?=$jquery?>"></script>
    <script src="<?=$modalCadastroCliente?>"></script>
    <script src="js/requestAPI/site.js"></script>

    <script src="js/carrosel/jquery.js"></script>
    <script src="js/carrosel/jcarousellite.js"></script>

  </head>
  <body class="body">

    <header>
      <div class="container_modal">
        <div class="modal centro_lr margem_t_100 bg_branco">

        </div>
      </div>
      <div class="container_menu sem_margem fixed">
        <div class="container_item_menu">
          <div class="item_menu float_left titulo ">
            <div class="icone_item_menu">
              <i class="material-icons">home</i>
            </div>
            <a href="<?php echo isset($_GET['page']) == true ? '../index.php' : '' ?>">
              HOME
            </a>
          </div>
          <div class="item_menu float_left titulo ">
            <div class="icone_item_menu">
              <i class="material-icons">directions_car</i>
            </div>
            <a href="<?php echo isset($_GET['page']) == true ? 'veiculos.php?page=veiculos' : 'view/veiculos.php?page=veiculos' ?>">
              CARROS
            </a>
          </div>
          <div class="item_menu float_left titulo ">
            <div class="icone_item_menu">
              <i class="material-icons">forum</i>
            </div>
            <a href="<?php echo isset($_GET['page']) == true ? 'forum.php?page=forum' : 'view/forum.php?page=forum' ?>">
              FÓRUM
            </a>
          </div>
          <div class="item_menu float_left titulo ">
            <div class="icone_item_menu">
              <i class="material-icons">photo_size_select_actual</i>
            </div>
            <a href="<?php echo isset($_GET['page']) == true ? 'galeria.php?page=galeria' : 'view/galeria.php?page=galeria' ?>">
            GALERIA
            </a>
          </div>
          <div class="item_menu1 float_left titulo ">
            <div class="icone_item_menu1">
              <i class="material-icons">person_add</i>
            </div>
            <a href="<?php echo isset($_GET['page']) == true ? 'cliente_parceiro.php?page=cliente_parceiro' : 'view/cliente_parceiro.php?page=cliente_parceiro' ?>">
              CLIENTE/<br>PARCEIRO
            </a>
          </div>
          <div class="item_menu float_left titulo ">
            <div class="icone_item_menu">
              <i class="material-icons">contact_mail</i>
            </div>
            <a href="<?php echo isset($_GET['page']) == true ? 'fale_conosco.php?page=fale_conosco' : 'view/fale_conosco.php?page=fale_conosco' ?>">
              CONTATO
            </a>
          </div>
          <div class="item_menu float_left titulo">
            <div class="icone_item_menu">
              <i class="material-icons">shopping_cart</i>
            </div>
            <a href="<?php echo isset($_GET['page']) == true ? 'fale_conosco.php?page=fale_conosco' : 'view/fale_conosco.php?page=fale_conosco' ?>">
              CARRINHO
            </a>
          </div>
        </div>
      </div>
      <div class="arruma_menu">

      </div>
      <div class="container_slogan_logo">
        <div class="container_segura_logo_slider centro_lr">
          <div class="container_item_logo">
            <img src="<?=$logo_pac?>.png" alt="Logo da Portal Auto Center" />
          </div>
          <div class="container_item_slogan titulo txt_branco ">
            Deixe que nós cuidamos de tudo para você.
          </div>
          <div id="loginRedeSocial" class="container_rede_social float_left fixed bg_verde_vivo sombra_preta_20 margem_l_74_cento bsuavizada_10 margem_t_115">
            <i class="material-icons material-icons flexa_esqueda fs_50">keyboard_arrow_left</i>
            <i title="Rede Social" class="rede_social material-icons fs_100">account_circle</i>
          </div>
        </div>
      </div>
    </header>
    <script>
    $('#loginRedeSocial').click(function(){
      modalLoginRedeSocial();
    })
    </script>
