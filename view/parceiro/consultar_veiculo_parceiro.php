<?php

require_once("../../database/conect.php");
Conexao_db();
// if da escolha , visualizar ou excluir
if(isset($_GET['escolha'])){
    $escolha = $_GET['escolha'];
    $id = $_GET['id'];

    //if da escolha excluir
    if($escolha == 'excluir'){
        $sql = "DELETE FROM tbl_veiculo WHERE id_veiculo= ".$id;
        mysql_query($sql);
        // echo ($sql);
        header('location:consultar_veiculo_parceiro.php');
      }
    }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Consultar Veiculos</title>
     <link rel="stylesheet" href="../css/parceiro/consultar_veiculo_parceiro.css">
     <!-- <link rel="stylesheet" href="../../css/padroes.css"> -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
   </head>
   <body>
     <form name="frmParceiro" method="get" action="consultar_veiculo_parceiro.php">
       <div class="container_geral">
         <div class="container_ok">
           <div class="item_dados">
             Ano de Frabricação
           </div>
           <div class="item_dados ">
             Placa
           </div>
           <div class="item_dados">
             Quilometragem
           </div>
           <div class="item_dados">
             <div class="excluir">
               <i class="material-icons" style="font-size:30px;">delete_forever</i>
             </div>
             <div class="editar">
               <i class="material-icons" style="font-size:30px;">remove_red_eye</i>
             </div>
           </div>
         </div>
         <?php
         $sql = "SELECT * FROM tbl_veiculo";
           $select = mysql_query($sql);
           while ($rsVP = mysql_fetch_array($select))
           {
          ?>
         <div class="container_vizu">
           <div class="item_visu">
             <?php echo($rsVP['ano_fabricacao']) ?>
           </div>
           <div class="item_visu">
             <?php echo($rsVP['placa']) ?>
           </div>
           <div class="item_visu">
             <?php echo($rsVP['quilometro_rodado']) ?>
           </div>
           <div class="item_visu">
             <div class="excluir_visu">
               <a href="consultar_veiculo_parceiro.php?escolha=excluir&id=<?php echo($rsVP['id_veiculo']);?>">
                 <i class="material-icons" style="font-size:30px;">delete_forever</i>
               </a>
             </div>
             <div class="editar_visu">
               <a href="editar_veiculo_parceiro.php?escolha=visualizar&id=<?php echo($rsVP['id_veiculo']);?>">
                 <i class="material-icons" style="font-size:30px;">remove_red_eye</i>
               </a>
             </div>
           </div>
         </div>
         <?php
          }
          ?>
       </div>
     </form>
   </body>
 </html>
