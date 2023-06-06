<?php 
 $db_host = "localhost";
 $db_name = "sistemasec";
 $db_user = "root";
 $db_pass = "";

$conn= new mysqli($db_host, $db_user, $db_pass, $db_name)or die("No se pudo conectar a MySQL".mysqli_error($con));
?>