<?php
function comprobar_nombre_usuario($nombre_usuario){
 //compruebo que el tamaño del string sea válido.
 if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
 echo $nombre_usuario . " no es válido<br>";
 return false;
 }
 //compruebo que los caracteres sean los permitidos
 $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
_";
 for ($i=0; $i<strlen($nombre_usuario); $i++){
    if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }
 }
    echo $nombre_usuario . " es válido<br>";
    return true;
} 
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Probar función comprobar_nombre_usuario</title>
</head>
<body>

<h1>Probar función comprobar_nombre_usuario</h1>

<form action="index.php" method="post">
    <input type="text" name="nombre_usuario" placeholder="Nombre de usuario">
    <input type="submit" value="Comprobar">
</form>

<?php

// Obtener el nombre de usuario del formulario
$user = $_POST['nombre_usuario'];
comprobar_nombre_usuario($user);

?>

</body>
</html>