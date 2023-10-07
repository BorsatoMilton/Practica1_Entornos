<?php
    if(!empty($_POST)){
        $destinatario = "administradorpagina@mail.com";
        $asunto = "Consulta " . $_POST["apellido"] . $_POST["nombre"];
        $cuerpo = $_POST["motivo"] . "\n" . $_POST["consulta"];
    
        mail($destinatario,$asunto,$cuerpo);

        ?>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Marche</title>
        </head>
        <body>
            <p>Su consulta ha sido enviada</p>
        </body>
        </html>
        
        <?php
    }
    else{
        ?>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Marche</title>
        </head>
        <body>
            <form action="ejercicio2.php" method="POST">
                Nombre: <input type="text" name="nombre"><br>
                Apellido: <input type="text" name="apellido"><br>
                Motivo: <select name="motivo">
                    <option>Inicio de sesion</option>
                    <option>Olvide mi contraseña</option>
                    <option>Problema con el sitio</option>
                    <option>Otro</option>
                </select><br>
                Consulta: <br><textarea name="consulta" cols="30" rows="10"></textarea><br>
                <input type="submit" value="Enviar"><br>
            </form>
        </body>
        </html>

        <?php
    }

?>