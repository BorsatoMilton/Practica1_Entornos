<?php
    include("conexion.php");
    $cancion = $_POST['cancion'];
    $query = "SELECT canciones, artista FROM buscador WHERE canciones = '$cancion' ";
    $resultado = mysqli_query($cn, $query);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h2 align="center">Busqueda Finalizada!</h2>
    
        <?php
            
            if(mysqli_num_rows($resultado)>0){
            ?>
                <table align="center">
        
                    <tr>
                        <th>Cancion</th>
                        <th>Artista</th>
                    </tr>
                <?php
                    while($elemento = mysqli_fetch_array($resultado)){

                        echo '<tr>';
                        echo '<td>' . $elemento[0] . '</td>';
                        echo '<td>' . $elemento[1] . '</td>';
                        echo '</tr>';
                    }
                ?>
                </table>
            <?php 
            }  
            else{
                echo 'No se encontraron canciones con ese nombre';
                echo '<hr>';
            }
            
        ?>    
        <a href="index.php" align="center">Realiza otra busqueda</a>
</body>
</html>

