<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registro.php" method="post">

        <input type="text" name="dui">
        <input type="text" name="usuario">
        <input type="text" name="contra">
        <input type="text" name="correo">
        <input type="text" name="fecNac">
        <button type="submit">Enviar</button>
    </form>

    <?php 
        //base de codigo de login de php sin css
        
        include("registro.php");



    
    ?>
    
</body>
</html>