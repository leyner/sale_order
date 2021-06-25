<?php 

$server = "localhost";
$user = "root";
$pass = "";
$bd = "sale_order";

$conn = mysqli_connect($server, $user, $pass, $bd);
    if (!$conn) { 
        die('<strong>No pudo conectarse:</strong> '); 
    }
 

?>