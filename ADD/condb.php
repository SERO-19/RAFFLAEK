<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_condb = "localhost";
$database_condb = "hunterhk_rafflaek";
$username_condb = "hunterhk_rk";
$password_condb = "w0uquq7yfh";
$condb = mysql_pconnect($hostname_condb, $username_condb, $password_condb) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES UTF8");
?>