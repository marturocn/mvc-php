<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php require 'views/header.php' ?>

        <div id="main">
            <h1 class="center">Sección de Nuevo</h1>

            <form action="<?php echo constant('URL') ?>nuevo/regAlumno" method="POST">
                <p>
                    <label for="matricula">Matrícula</label><br>
                    <input type="text" name="matricula" id="">
                </p>
                <p>
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre" id="">
                </p>
                <p>
                    <label for="apellido">Apellido</label><br>
                    <input type="text" name="apellido" id="">
                </p>
                <p>
                    <input type="submit" value="Registrar">
                </p>
            </form>
        </div>
        
        <?php require 'views/footer.php' ?>
    </body>
</html>
