<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPHP</title>
</head>
<link rel="stylesheet" href="index.css"/>
<body>
    <?php include "./Views/header.php"?>
    <div class="cont">
        <div class="box"></div>
    </div>
    <form action="./mensaje.php" method="post" target="_blank">
        <input class="textbox" type="email" name="correo" placeholder="Correo"/>
        <input class="textbox" type="password" name="contrasena" placeholder="Contraseña"/>
        <input type="submit" class="submit"/>
    </form>
</body>
</html>