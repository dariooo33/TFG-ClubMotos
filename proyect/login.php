<?php
include_once "includes/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/header.css">
</head>

<body>
<main>
    <div class="recuadro">
        <h2 class="titulo">INICIA SESION EN TU CUENTA</h2>
        <hr><br>
        <form method="post">
            <!-- <button type="button" class="googleBoton"> INICIA SESION A TRAVES DE GOOGLE </button> -->
            <input type="email" placeholder="Correo electronico"><br>
            <input type="password" placeholder="Contraseña"><br>
            <button type="button" class="iniciaSesion">Inicia sesion</button>
        </form>
        
        <br>
        <p><span>¿No tienes una cuenta?</span> <a href="" class="regi">REGISTRATE</a></p>
        <br>
        <a href="" class="olvido">¿Olvidaste tu contraseña?</a>
    </div>
</main>  
</body>
</html>
