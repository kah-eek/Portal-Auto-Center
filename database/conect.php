<?php

function Conexao_db()
{
// mysql_connect('localhost','root','bcd127');
// mysql_select_db('dbautofast');

mysql_connect('caiqueoliveira.mysql.dbaas.com.br','caiqueoliveira','caique@2018');
mysql_select_db('caiqueoliveira');

//mysql_connect('192.168.0.2','pc2820172','senai127');
//mysql_select_db('dbpc2820172');

    mysql_query("SET NAMES 'utf8'");
    mysql_query('SET character_set_connection=utf8');
    mysql_query('SET character_set_client=utf8');
    mysql_query('SET character_set_results=utf8');

}


?>
