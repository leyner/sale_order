<?php 

require 'Conexion/conexion.php';

$query = "Select * from empresa LIMIT 1";
$mquery = mysqli_query($conn, $query);
$company = mysqli_fetch_array($mquery);
?>

