<?php

$servidor="localhost";
$usuario="id18033161_datos";
$pass="=A6*Odhi@m6Czu>2";
$db="id18033161_paisano";



$conn = new mysqli($servidor, $usuario, $pass, $db);


$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$comentarios=$_POST['comentarios'];


$sql="INSERT INTO datos(nombre, telefono, comentarios) VALUES ('$nombre','$telefono', '$comentarios')";

/*$resultado=mysqli_query($conn,$sql);*/

if($conn ->query($sql) === TRUE){
    echo"Datos guardados";
}else{
    echo "Error:" .$sql."<br>".$conn->error;
    /*echo"Error de conexion ".mysqli_connect_error();
    exit();*/
}
$conn->close();


?>