<html>
<head>
  <title>ASIR</title>
  
</head>

<body>

	<h3>Clientes</h3>


<?php

$username = root;
$password = Messi88;
$servername = localhost;
$database = HOTEL;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Conexión con la base de datos $database del servidor $servername reali.<br/>";
    $sql = "SELECT * FROM DatosPersonales";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result_array = $stmt->fetchAll();
    print "<table border='1px solid grey'>";
    print "<tr>";
    print "<th>";print "Nombre";print "</th>";
    print "<th>";print "Apellidos";print "</th>";
    print "<th>";print "Telefono";print "</th>";
    print "<th>";print "Email";print "</th>";
    print "</tr>";
    foreach ( $result_array as $linea ) {
        print "<tr>";
        print "<td>";print $linea['Nombre'];print "</td>";
        print "<td>";print $linea['Apellidos'];print "</td>";
        print "<td>";print $linea['Telefono'];print "</td>";
        print "<td>";print $linea['Email'];print "</td>";
        print "</tr>";
    }
    print "</table>";
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>

</body>
</html>
