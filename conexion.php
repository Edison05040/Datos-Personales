<?php
$servidor="localhost";
$usuario="prueba";
$clave="12345";
$base="empleados";
$tabla="datos";

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$direccion=$_POST['direccion'];


$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la conexion con el servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectarse con la base de datos");
$insertar="insert into datos values('$codigo','$nombre','$ciudad','$direccion')";
$resultado=mysqli_query($conexion,$insertar) or die ("error al conectar con la tabla");
mysqli_close($conexion);
echo("los datos se han guardado exitosamente");

?>