<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/login.css">
    <link rel="stylesheet" href="styles/fondo.css">
    <link rel="stylesheet" href="styles/header.css">

</head>
<?php
    include_once "includes/header.php"
?>
<body>
    <h1>INICIA SESION EN TU CUENA</h1>
    <hr>
    <form method="post">
        <input type="email" placeholder="Correo electronico"><br>
        <input type="password" placeholder="Contraseña"><br>
        <button type="button">Inicia sesion</button>
    </form>
    <br>
    
    <p><span>¿No tienes una cuetna?</span> <a href="">REGISTRATE</a></p>
    <a href="">¿Olvidaste tu contraseña?</a>
</body>
</html>