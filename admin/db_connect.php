<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "zsi_db";
// Create connection
$link = mysql_connect($servername, $username, $password);
mysql_select_db($db_name);
mysql_set_charset('utf8',$link);
?>
