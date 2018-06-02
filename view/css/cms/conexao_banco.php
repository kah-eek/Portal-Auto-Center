<?php

function Conexao_Database(){
  //CPNEXÃO COM BD.
  $conexao=mysql_connect('caiqueoliveira.mysql.dbaas.com.br','caiqueoliveira','caique@2018');
  mysql_select_db('caiqueoliveira');

}
 ?>
