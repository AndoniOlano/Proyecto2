
	
<?php

$conexion = mysqli_connect("localhost", "root", "Messi88", "HOTEL");


if ($conexion)
{

 
	$sql= "
INSERT INTO DatosPersonales (Nombre, Apellidos,Telefono,Email,DiaLlegada,DiaSalida,NHabitaciones,NPersonas,Observaciones) 
		values ('".$_POST["nombre"]."', '".$_POST["apellidos"]."', '".$_POST["telefono"]."', '".$_POST["email"]."','".$_POST["diallegada"]."', '".$_POST["diasalida"]."','".$_POST["Nhabitaciones"]."', '".$_POST["Npersonas"]."',  
	'".$_POST["observaciones"]."')";
	//echo $sql;
	 mysqli_query($conexion,$sql);
	

	






	
}

mysqli_close($conexion);

?>




