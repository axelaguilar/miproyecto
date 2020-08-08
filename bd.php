<?php

$host="localhost";
$user="root";
$password="";
$database="taller1_dw";

// Connect to MySQL Database 
$con = mysqli_connect($host, $user, $password,$database) or die("Could not connect to database");

// Select MySQL Database 
//mysql_select_db($database, $db);
if(mysqli_connect_errno()){
	echo "No se puede conectar a la Base de Datos";
}

?>