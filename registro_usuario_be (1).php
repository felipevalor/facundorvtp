<?php

include 'conexion.php';


$id = $_POST["id"] ;
$Nombre_completo = $_POST["Nombre_completo"] ;
$Correo_electronico = $_POST["Correo_electronico"] ;
$Numero_telefono = $_POST["Numero_telefono"] ;
$CUIT = $_POST["CUIT"] ;
$Dirreccion = $_POST["Direccion"] ;
$Ciudad = $_POST["Ciudad"] ;
$Provincia = $_POST["Provincia"] ;
$Contrasena = $_POST["Contrasena"] ;

$query = "INSERT INTO registrarse (id, Nombre_completo, Correo_electronico, Numero_telefono, CUIT, Direccion, Ciudad, Provincia, Contrasena) 
VALUES ('$id', '$Nombre_completo', '$Correo_electronico', '$Numero_telefono', '$CUIT', '$Dirreccion', '$Ciudad', '$Provincia', '$Contrasena')" ;



$ejecutar = mysqli_query($conexion, $query);


mysqli_close($conexion)

?>