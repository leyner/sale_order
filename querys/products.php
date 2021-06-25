<?php 

require 'Conexion/conexion.php';

$query = "Select * from producto";
$mquery = mysqli_query($conn, $query);
$products = mysqli_fetch_all($mquery, MYSQLI_ASSOC);
?>

