<?php
    $destinatario = "aarondebernardo@gmail.com";
    $asunto = "Marche";
    $cuerpo = '
    <html>
        <head>
            <title>Pagina de prueba de Marche</title>
        </head>
        <body>
            <p>Marche funciona correctamente</p>
        </body>
    </html>';
    
    
    $headers = "MIME-Version:1.0\r\n Content-type:text/html; charset=iso-8859- 1\r\n";
    mail($destinatario,$asunto,$cuerpo, $headers);
?>