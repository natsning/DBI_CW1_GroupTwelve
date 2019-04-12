<?php 
//these variables are used for database connection 
$host = "localhost"; 
$user = "hfyyt4_sakila1"; 
$password = "data.(sakila)"; 
$database_name = "hfyyt4_sakilatestfile"; 

//connect to the database. 
mysql_connect($host, $user, $password)or die("no connection"); 
mysql_select_db($database_name)or die("no database");  
?>