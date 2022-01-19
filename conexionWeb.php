<?php

$servidor="localhost";
$usuario="id17032653_pce";
$pass="1XO-Ym3o\2\(<N})";
$db="id17032653_bitacora";

echo '<button><a href="bitacoraPCE.html">BITACORA</a></button></br>';

$conn = new mysqli($servidor, $usuario, $pass, $db);

$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$folioPce=$_POST['folioPce'];
$llamemergencia=$_POST['llamemergencia'];
$anuario=$_POST['anuario'];
$atendio=$_POST['atendio'];
$municipio=$_POST['municipio'];
$incidente=$_POST['incidente'];
$afectado=$_POST['afectado'];
$telvictima=$_POST['telvictima'];
$telextorsion=$_POST['telextorsion'];
$ctadep=$_POST['ctadep'];
$monto=$_POST['monto'];
$descripcion=$_POST['descripcion'];
$resultados=$_POST['resultados'];


$sql="INSERT INTO datos(fecha, hora, folioPce, llamemergencia, anuario, atendio, municipio, incidente, afectado, telvictima, telextorsion, ctadep, monto, descripcion, resultados) VALUES ('$fecha','$hora', '$folioPce', '$llamemergencia', '$anuario', '$atendio' , '$municipio', '$incidente', '$afectado', '$telvictima' , '$telextorsion', '$ctadep', '$monto', '$descripcion', '$resultados')";

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