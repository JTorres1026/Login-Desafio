
<?php

$contraseña=$_POST['contraseña'];

session_start();

$conexion= mysqli_connect("localhost","root","jt26sq1","bdusers"); //Conexion a la bd

//se actualiza la tabla y queda el registro que el usuario ya ingreso una vez
$consulta= "UPDATE tbuser set pass='$contraseña', estado=1 where idusuario=1";

//Ejecutar consulta
mysqli_query($conexion,$consulta);

mysqli_close($conexion);

header("location:home.php");



?>