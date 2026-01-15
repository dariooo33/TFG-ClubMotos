<?php
    include_once "config/dbConect.php"; // Esto conecta y selecciona la base de datos
    include_once "includes/functions.php"; //Añade funciones predefinidas en functions.php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errores = [];

        $correo = $_POST['email'];
        if(empty($correo)){
            $errores[] = "El campo email esta vacio";
        }elseif(!verificarEmail($correo)){
            $errores[] = "Email invalido";
        }else{
            $consult = "SELECT contrasena FROM Usuario WHERE email = '$correo'";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/fondo.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">

</head>
<body>
<?php
    include_once "includes/header.php"
?>
<main>
    <h1>INICIA SESION EN TU CUENTA</h1>
    <hr>
    <br>
    <form method="post">
        <input type="email" placeholder="Correo electronico"><br>
        <input type="password" placeholder="Contraseña"><br>
        <button type="button">Inicia sesion</button>
    </form>
    <br>
    
    <p><span>¿No tienes una cuetna?</span> <a href="">REGISTRATE</a></p>
    <a href="">¿Olvidaste tu contraseña?</a>
</main>
<?php
    include_once "includes/footer.php"
?>    
</body>
    </html>