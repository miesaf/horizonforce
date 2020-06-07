<?php
$mysql_hostname = "localhost";
$mysql_user = "u597185849_sabri";
$mysql_password = "sabrinaFARHAN2k19";
$mysql_database = "u597185849_hofo";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>