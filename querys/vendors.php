<?php 

require 'Conexion/conexion.php';

$query = "Select * from proveedor";
$mquery = mysqli_query($conn, $query);
$proveedores = mysqli_fetch_all($mquery,MYSQLI_ASSOC);
?>

