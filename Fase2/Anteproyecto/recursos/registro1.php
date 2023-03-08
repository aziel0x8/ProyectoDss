<?php 



// include("conexion.php");

        // <input type="text" name="dui">
        // <input type="text" name="usuario">
        // <input type="text" name="contra">
        // <input type="text" name="correo">
        // <input type="text" name="fecNac">
        //falta en pass en bd
// if (strlen($_POST['dui']) < 1 && strlen($_POST['usuario']) < 1&& strlen($_POST['correo']) && strlen($_POST['fecNac'])<1) {

$dui = trim($_POST['dui']);
$usuario = trim($_POST['usuario']);
$correo = trim($_POST['correo']);
// $fecNac = trim($_POST['fecNac']);

echo $dui." ".$usuario." ".$correo." ".$dui ;

// $query =" INSERT INTO Usuario VALUES('$dui','$usuario','$correo','$fecNac')";
// $finconsulta = mysqli_query($conexion,$query);

//         if ($finconsulta) {
//             echo "<p>Conexion exitosa</p>";
//         }else{
//             echo "<p>Conexion fallida</p>"; 
//         }


    // }


?>