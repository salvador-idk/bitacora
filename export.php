<?php
$servidor="localhost";
$usuario="id17757963_pce";
$pass="uq9TXTE/^26Ij>\%";
$db="id17757963_bitacora";

$conn = new mysqli($servidor, $usuario, $pass, $db);

$sqlcomando="SELECT * FROM datos";

$resultado=mysqli_query($conn,$sqlcomando);

if($resultado->num_rows > 0){
	$delimiter = ",";
	$filename = "Search_" . date('Y-m-d') . ".csv";
	
	//create a file pointer
	$f = fopen('php://memory', 'w');
	
	//set column headers
	$fields = array("id", "fecha", "hora", "foliopce", "llamemergencia", "anuario", "atendio", "municipio", "incidente", "afectado", "telvictima", "telextorsion", "ctadep", "monto", "descripcion", "resultados");
	fputcsv($f, $fields, $delimiter);
	
	//output each row of the data, format line as csv and write to file pointer
	while($row = $resultado->fetch_assoc()){
		$lineData = array( $row["id"], $row["fecha"], $row["hora"], $row["foliopce"], $row["llamemergencia"], $row["anuario"], $row["atendio"], $row["municipio"], $row["incidente"], $row["afectado"], $row["telvictima"], $row["telextorsion"], $row["ctadep"], $row["monto"],$row["descripcion"],$row["resultados"]);
		fputcsv($f, $lineData, $delimiter);
	}
	
	//move back to beginning of file
	fseek($f, 0);
	
	//set headers to download file rather than displayed
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="' . $filename . '";');
	
	//output all remaining data on a file pointer
	fpassthru($f);

}
exit;
?>