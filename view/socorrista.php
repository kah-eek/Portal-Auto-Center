<?php
  // require_once("../conexao_banco.php");
  //
  // Conexao_Database();

  session_start();

  $conexao=mysql_connect('localhost', 'root', 'bcd127');

  mysql_select_db('dbautofast');
#####################################################################################################################################################################################
  $id_socorro_ja="";
  $id_cliente="";
  $id_endereco="";
  $logradouro="";
  $numero="";
  $cidade="";
  $id_estado="";
  $cep="";
  $bairro="";
  $complemento="";
  $problema="";
  $cbxAtivo="";
  $btnCadastro="Enviar";
#####################################################################################################################################################################################
  //INSERINDO PRODUTO NO BD.
if(isset($_POST["btnCadastro"])){
  $id_cliente=$_POST["sltCliente"];
  $logradouro=$_POST["txtLogradouro"];
  $numero=$_POST["txtNumero"];
  $cidade=$_POST["txtCidade"];
  $id_estado=$_POST["sltEstado"];
  $cep=$_POST["txtCep"];
  $bairro=$_POST["txtBairro"];
  $complemento=$_POST["txtComplemento"];
  $problema=$_POST["txtProblema"];

  if($_POST["btnCadastro"]=='Enviar'){
    $sql = "insert into tbl_endereco (logradouro, numero, cidade, id_estado, cep, bairro, complemento) values ('".$logradouro."','".$numero."','".$cidade."','".$id_estado."','".$cep."','".$bairro."','".$complemento."');";

    mysql_query($sql);

    $sql2 = "SELECT LAST_INSERT_ID();";
      $resultado1 = mysql_query ($sql2);
        if ($rs=mysql_fetch_array($resultado1))
        {
          $id_endereco=$rs['LAST_INSERT_ID()'];
        }

    $sql1="Insert Into tbl_socorro_ja(problema, id_endereco, id_cliente, atendido)values('".$problema."', '".$id_endereco."', '".$id_cliente."', '0');";

    mysql_query($sql1);
  }

      header('location:socorrista.php');
      // echo($sql);
      // echo($sql1);

}
#####################################################################################################################################################################################
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/padroes.css">
    <link rel="stylesheet" type="text/css" href="css/socorrista.css">

  </head>
  <body>
   <form name="frmcadastrosocorro" method="post" action="socorrista.php">
  <div class="container_principal_ph float_left">
    <div class="container_titulo_ph margem_t_50 borda_preta_1 bg_verde_vivo sombra_preta_20 centro_lr">
      <div class="item_titulo_ph align_center preenche_t_20 fs_25 negrito">
        Socorro Já
      </div>
    </div>
    <div class="campos">
      <div class="names_campos">
        <div class="name_campo">
          Cliente
        </div>
        <div class="name_campo" >
          Logradouro
        </div>
        <div class="name_campo" >
          Número
        </div>
        <div class="name_campo" >
          Cidade
        </div>
        <div class="name_campo" >
          Estado
        </div>
        <div class="name_campo" >
          Cep
        </div>
        <div class="name_campo" >
          Bairro
        </div>
        <div class="name_campo" >
          Complemento
        </div>
        <div class="name_campo">
          Problema
        </div>
      </div>
      <div class="preencher_inputs">
          <select name="sltCliente" id="float" class="color">
            <?php
            if($id_cliente == ""){
                $id_cliente = 0;
                ?>
                 <option>Selecione</option>
              <?php
            }else{
                ?>
        <option value="<?php echo($id_cliente); ?>">
            <?php echo($id_cliente);?></option>
        <?php

            }
            $sql = "SELECT id_cliente, nome as nome_cliente FROM tbl_cliente Where id_cliente <> ".$id_cliente;
            $select=mysql_query($sql);

           while($rsCliente = mysql_fetch_array($select)){
               ?>

            <option value="<?php echo($rsCliente['id_cliente']); ?>">
            <?php echo($rsCliente['nome_cliente']); ?> </option>

        <?php
           }
        ?>
          </select>
      </div>
      <div class="preencher_inputs">
          <input type="txtLogradouro" name="txtLogradouro" value="<?php echo($logradouro); ?>" id="float" class="color">
      </div>
      <div class="preencher_inputs">
          <input type="txtNumero" name="txtNumero" value="<?php echo($numero); ?>" id="float" class="color">
      </div>
      <div class="preencher_inputs">
          <input type="txtCidade" name="txtCidade" value="<?php echo($cidade); ?>" id="float" class="color">
      </div>
      <div class="preencher_inputs">
        <select name="sltEstado" id="float" class="color">
            <?php
            if($id_estado == ""){
                $id_estado = 0;
                ?>
                 <option>Selecione</option>
              <?php
            }else{
                ?>
        <option value="<?php echo($id_estado); ?>">
            <?php echo($id_estado);?></option>
        <?php

            }
            $sql = "SELECT id_estado, estado as nome_estado FROM tbl_estado Where id_estado <> ".$id_estado;
            $select=mysql_query($sql);

           while($rsEstado = mysql_fetch_array($select)){
               ?>

            <option value="<?php echo($rsEstado['id_estado']); ?>">
            <?php echo($rsEstado['nome_estado']); ?> </option>

        <?php
           }
        ?>
        </select>
      </div>
      <div class="preencher_inputs">
          <input type="txtCep" name="txtCep" value="<?php echo($cep); ?>" id="float" class="color">
      </div>
      <div class="preencher_inputs">
          <input type="txtBairro" name="txtBairro" value="<?php echo($bairro); ?>" id="float" class="color">
      </div>
      <div class="preencher_inputs">
          <input type="txtComplemento" name="txtComplemento" value="<?php echo($complemento); ?>" id="float" class="color">
      </div>
      <textarea rows="4" cols="20" name="txtProblema" value="<?php echo($problema); ?>">
      </textarea>




      <div class="preencher_inputs">
      </div>

        <div class="button">
          <input type="submit" name="btnCadastro" value="<?php echo($btnCadastro); ?>" >
        </div>

      </div>
    </div>
</body>
</html>
