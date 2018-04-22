<?php

// Imports
require_once('../controller/Imagem_class.php');

// Instância um objeto imagem e o popula com a imagem vinda do form
$imagem = new Imagem($_FILES['img_refresh_pic'], $_GET['path']);

echo $imagem->salvarImagem($imagem); // Retorna o caminho da imagem

?>
