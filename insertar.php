<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$Apaterno=$_POST['Apaterno'];
$Amaterno=$_POST['Amaterno'];
$division=$_POST['division'];
$curso=$_POST['curso'];
$fechaI=$_POST['fechaI'];
$fechaT=$_POST['fechaT'];


$sql="INSERT INTO imprimir VALUES('$nombre','$Apaterno','$Amaterno','$division','$curso','$fechaI','$fechaT')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: imprimir.php");
    
}else {
}
?>