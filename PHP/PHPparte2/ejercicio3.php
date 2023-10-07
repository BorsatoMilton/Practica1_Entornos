
    <?php
    
    if(!empty($_POST)){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];

        $mensaje = "Hola .$nombre te recomiendo el sitio web [nombre del sitio].";

     
        mail($email, "Recomendación de sitio web", $mensaje);
        ?>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Mail a mi amigo</title>
        </head>
        <body>
            <p>Su recomendacion ha sido enviada</p>
        </body>
        </html>
    <?php    
    }
    else{
    ?>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Recomendar sitio</title>
    </head>
    <body>
        <h1>Recomendar sitio</h1>

        <form action="ejercicio3.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre del amigo">
            <input type="email" name="email" placeholder="Correo electrónico del amigo">
            <input type="submit" value="Enviar">
        </form>
    </body>
    </html>
    <?php 
    
    }
    ?>
