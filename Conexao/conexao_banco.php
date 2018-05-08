<?php

function Conexao_Database(){
    //CPNEXÃO COM BD.
    $conexao=mysql_connect('localhost','root','bcd127');
    mysql_select_db('db_auto_center');

}
 ?>
