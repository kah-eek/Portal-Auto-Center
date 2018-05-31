<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('dbautofast');
#####################################################################################################################################################################################
  $id_socorro_ja="";
  $id_parceiro="";
  $btnCadastro="Atender";
#####################################################################################################################################################################################
  //INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){
  $id_parceiro=$_POST["sltParceiro"];
  $id_socorro_ja=$_POST["sltSocorro"];

  if($_POST["btnCadastro"]=='Atender'){
    $sql = "insert into tbl_socorrista_socorro_ja (id_parceiro, id_socorro_ja) values ('".$id_parceiro."','".$id_socorro_ja."');";

    mysql_query($sql);
  }

      header('location:socorro_socorrista_ja.php');
      // echo($sql);
      // // echo($sql1);

}
#####################################################################################################################################################################################
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/padroes.css">
    <link rel="stylesheet" type="text/css" href="../css/parceiro/socorro_socorrista_ja.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/util.js"></script>
  </head>
  <body>
   <form name="frmcadastrosocorrosocorristaja" method="post" action="socorro_socorrista_ja.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Socorro Socorrista
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Parceiro
        </div>
        <div class="name_campo" >
          Socorro
        </div>

      </div>
      <div class="preencher_inputs">
          <select name="sltParceiro" id="float" class="color">
            <?php
            if($id_parceiro == ""){
                $id_parceiro = 0;
                ?>
                 <option>Selecione</option>
              <?php
            }else{
                ?>
        <option value="<?php echo($id_parceiro); ?>">
            <?php echo($id_parceiro);?></option>
        <?php

            }
            $sql = "SELECT id_parceiro, nome_fantasia as nome_fantasia FROM tbl_parceiro Where id_parceiro <> ".$id_parceiro;
            $select=mysql_query($sql);

           while($rsParceiro = mysql_fetch_array($select)){
               ?>

            <option value="<?php echo($rsParceiro['id_parceiro']); ?>">
            <?php echo($rsParceiro['nome_fantasia']); ?> </option>

        <?php
           }
        ?>
          </select>
      </div>
      <div class="preencher_inputs">
        <select name="sltSocorro" id="float" class="color">
            <?php
            if($id_socorro_ja == ""){
                $id_socorro_ja = 0;
                ?>
                 <option>Selecione</option>
              <?php
            }else{
                ?>
        <option value="<?php echo($id_socorro_ja); ?>">
            <?php echo($id_socorro_ja);?></option>
        <?php

            }
            $sql = "SELECT id_socorro_ja, problema as nome_problema FROM tbl_socorro_ja Where id_socorro_ja <> ".$id_socorro_ja;
            $select=mysql_query($sql);

           while($rsSocorro = mysql_fetch_array($select)){
               ?>

            <option value="<?php echo($rsSocorro['id_socorro_ja']); ?>">
            <?php echo($rsSocorro['nome_problema']); ?> </option>

        <?php
           }
        ?>
        </select>
      </div>
        <div class="button">
          <input type="submit" name="btnCadastro" value="<?php echo($btnCadastro); ?>" >
        </div>

      </div>
      <div class="alarde">
        sssssssssssss
        <!-- <div class="inf">
          Atendimento
        </div> -->
        <!-- <div class="information">

        </div>
        <div class="informacao">
          Endereço
        </div> -->
        
      </div>
    </div>
</body>
</html>
