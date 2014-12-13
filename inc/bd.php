<?php 
$db = mysql_connect ("$mysql_host","$mysql_user","$mysql_pass");
mysql_select_db ("$mysql_db",$db);
mysql_query ("SET NAMES utf8");
?>