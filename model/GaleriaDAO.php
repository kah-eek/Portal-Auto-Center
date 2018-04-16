<?php
  require_once('conexao_banco.php');

  $upload_dir = "../pictures/galeria";
  $nome_arq = basename($_FILES['btnImagem']['name']);

  if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){
     $upload_file = $upload_dir . $nome_arq;
}
      if(move_uploaded_file($_FILES['btnImagem']['tmp_name'], $upload_file)){
       $sql = "INSERT INTO tbl_produto(imagem) VALUES('".$upload_file."')";
       mysqli_query($conexao, $sql);
}
 ?>
