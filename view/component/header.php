<?php

  // Arquivo CSS padrão de carregamento
  $arquivo_css = 'view/css/loja';
  $header_css = 'view/css/header';
  $footer_css = 'view/css/footer';
  $normalize_css = 'view/css/normalize';
  $padroes_css = 'view/css/padroes';
  $jquery = 'view/js/jquery.js';
  $logo_pac = 'view/pictures/logo/portal_auto_center';

  // Verifica se existe um outro arquivo fora do padrão a ser carregado
  if (isset($_GET['page'])) {
    $arquivo_css= 'css/'.$_GET['page'];
    $header_css = 'css/header';
    $footer_css = 'css/footer';
    $normalize_css = 'css/normalize';
    $padroes_css = 'css/padroes';
    $jquery = 'js/jquery.js';
    $logo_pac = 'pictures/logo/portal_auto_center';
  }

?>
<!DOCTYPE html>
<html lang="br">
  <head>
    <meta charset="utf-8">
    <title>Portal Auto Center</title>

    <link rel="stylesheet" type="text/css" href="<?=$padroes_css?>.css">
    <link rel="stylesheet" type="text/css" href="<?=$normalize_css?>.css">
    <link rel="stylesheet" type="text/css" href="<?=$header_css?>.css">
    <link rel="stylesheet" type="text/css" href="<?=$footer_css?>.css">
    <link rel="stylesheet" type="text/css" href="<?=$arquivo_css?>.css">

    <!-- Corrosel -->
    <link rel="stylesheet" type="text/css" href="view/css/carrosel/style.css">
    <!-- ##################################################### -->
    <!-- <script src="view/js/flip-card.js"></script> -->
    <script src="<?=$jquery?>"></script>
  </head>
  <body class="body">
    <header>
      <div class="container_menu sem_margem fixed">
        <div class="container_item_menu">
          <div class="item_menu float_left titulo ">
            <div class="icone_item_menu">
              <i class="material-icons">home</i>
            </div>
            <a href="<?php if(isset($_GET['page'])) echo '../index.php' ?>">
              HOME
            </a>
          </div>
          <div class="item_menu float_left titulo ">
            <div class="icone_item_menu">
              <i class="material-icons">directions_car</i>
            </div>
            <a href="view/veiculos.php?page=veiculos">
              CARROS
            </a>
          </div>
          <div class="item_menu float_left titulo ">
            <div class="icone_item_menu">
              <i class="material-icons">forum</i>
            </div>
            FÓRUM
          </div>
          <div class="item_menu float_left titulo ">
            <div class="icone_item_menu">
              <i class="material-icons">photo_size_select_actual</i>
            </div>
            GALERIA
          </div>
          <div class="item_menu1 float_left titulo ">
            <div class="icone_item_menu1">
              <i class="material-icons">person_add</i>
            </div>
            CLIENTE/<br>PARCEIRO
          </div>
          <div class="item_menu float_left titulo ">
            <div class="icone_item_menu">
              <i class="material-icons">contact_mail</i>
            </div>
            <a href="view/fale_conosco.php?page=fale_conosco">
              CONTATO
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
        </div>
      </div>
    </header>
