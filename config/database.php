<?php
session_start();
$connect = @mysql_connect("localhost","root","") or die("Server is terrible");
mysql_select_db("db_cmecs",$connect) or die("i cant connect to it");

/*

session_start();
$connect = @mysql_connect("sql109.epizy.com","epiz_19667127","ZXasqw1212") or die("Server is terrible");
mysql_select_db("epiz_19667127_cmecs",$connect) or die("i cant connect to it");


*/

?>
