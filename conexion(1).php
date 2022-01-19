<?php

$servidor="localhost";
$usuario="id17757963_pce";
$pass="uq9TXTE/^26Ij>\%";
$db="id17757963_bitacora";

//echo '<button><a href="https://bitacorapce.000webhostapp.com/">BITACORA</a></button></br>';

$conn = new mysqli($servidor, $usuario, $pass, $db);

$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$folioPce=$_POST['folioPce'];
$llamemergencia=$_POST['llamemergencia'];
$anuario=$_POST['anuario'];
$atendio=$_POST['atendio'];
$municipio=$_POST['municipio'];
$otro=$_POST['otro'];
$incidente=$_POST['incidente'];
$afectado=$_POST['afectado'];
$nickname=$_POST['nickname'];
$telvictima=$_POST['telvictima'];
$telextorsion=$_POST['telextorsion'];
$ctadep=$_POST['ctadep'];
$monto=$_POST['monto'];
$descripcion=$_POST['descripcion'];
$resultados=$_POST['resultados'];


$sql="INSERT INTO datos(fecha, hora, folioPce, llamemergencia, anuario, atendio, municipio, otro, incidente, afectado, nickname, telvictima, telextorsion, ctadep, monto, descripcion, resultados) VALUES ('$fecha','$hora', '$folioPce', '$llamemergencia', '$anuario', '$atendio' , '$municipio', '$otro', '$incidente', '$afectado', '$nickname', '$telvictima' , '$telextorsion', '$ctadep', '$monto', '$descripcion', '$resultados')";

/*$resultado=mysqli_query($conn,$sql);*/

if($conn ->query($sql) === TRUE){
    $sql2="UPDATE datos SET foliopce=CONCAT('pce',id)";
    $resultado2=mysqli_query($conn,$sql2);
    if ($resultado2){
        echo "Datos Guardados";

    }
    else{
        echo mysqli_error($conn);
    }
}
else{
    echo mysqli_error($conn);
}
$conn->close();


?>