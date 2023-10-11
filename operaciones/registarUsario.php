<?php
include("../include/conexion.php");

$dni=$_POST['dni'];
$apellidosNombres=$_POST['apellidosNombres'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$fechaNacimiento=$_POST['fechaNacimiento'];


echo $dni."<br>";
echo $apellidosNombres."<br>";
echo $correo."<br>";
echo $telefono."<br>";
echo $direccion."<br>";
echo $fechaNacimiento."<br>";

$consulta="INSERT INTO usuario (dni, apellidos_nombres, correo, telefono, direccion, fecha_nacimiento, password, activo, reset_password, token_password) 
            VALUES ('$dni','$apellidosNombres','$correo','$telefono','$direccion','$fechaNacimiento','$dni',1,0,'')";

$ejecutar = mysqli_query($conexion, $consulta);

if($ejecutar){
    echo "Registro exitoso";
}else{
    echo "error";
}

?>