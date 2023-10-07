<?php session_start();

    if (!isset($_SESSION["contador"])){
        $_SESSION["contador"] = 1;
    }
    else{
        $_SESSION["contador"]++;
    }

?>

<html>
    <head>
        <title>Contador de visitas</title>
    </head>
    <body>
        <p>Esta pagina cuenta con dos enlaces disponibles</p>
        <a href="ejercicio4.php">Pagina 1</a>
        <br>
        <a href="ejercicio4_3erapagina.php">Pagina 3</a>
        <br>
    </body>
</html>

<?php
    echo "Numero de visitas: " .$_SESSION["contador"];
    //Si visito mas de cien veces las 3 paginas, la sesion se destruye y comienza otra vez
    if($_SESSION["contador"] == 100){
    
        session_destroy();
    }

?>


