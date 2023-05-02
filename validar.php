<?php

$usuario= $_POST['usuario'];  //Variables que reciben los datos escritos en los textbox
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['usuario']=$usuario;

//conectarse a la base de datos de mysql
$conexion= mysqli_connect("localhost","root","jt26sq1","bdusers");

$consulta= "SELECT * FROM tbuser where email='$usuario' and pass='$contraseña'";

$resultado= mysqli_query($conexion,$consulta); //Ejecutar consulta

$filas=mysqli_num_rows($resultado); //Contar filas devueltas



//Verificar el estado del usuario

$consulta2="SELECT estado FROM tbuser where idusuario=1";
$resultado2=mysqli_query($conexion,$consulta2);

$estado= mysqli_fetch_array($resultado2,MYSQLI_ASSOC);

$e= $estado['estado'];

if($filas){ //Si el usuario existe ir a la pagina de inicio


   if($e==0){
     
    header("location:cambio.php");

   }else{

    header("location:home.php");

   }


    
}else{

    

    ?>
    <?php
     include("index.php");
    ?>
    <script>alert("Los datos son incorrectos"); </script>
    <?php


    //echo '<script> alert("Los datos son incorrectos");</script>';
    //include("index.php");
    
    header("location:index.php");

    

}

mysqli_free_result($resultado);
mysqli_close($conexion);

