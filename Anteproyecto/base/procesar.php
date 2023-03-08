<?php
function validar(){
// Paso 1: Conectar a la base de datos
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contra' ";
$resultado=mysqli_query($conn,$consulta);
$filas=mysqli_num_rows($resultado);// me da un resultado si coincide de vuelve 1 si hay o 0 si no
if($filas>0){
    header('Location: recursos/menuCliente.php');
    exit;
}
else{
   echo "Error en la verificacion"; 
}
mysqli_close($conn);
}

if(isset($_POST['enviar'])){
    validar();
}
?>