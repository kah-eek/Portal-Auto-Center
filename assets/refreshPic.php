<?php

// Instância um objeto imagem e o popula com a imagem vinda do form
$imagem = new Imagem($_FILES['img_refresh_pic'], $_GET['path']);

$imagem->salvarImagem($imagem), // Retorna o caminho da imagem

?>
