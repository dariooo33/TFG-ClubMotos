<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/fondo.css">
    <link rel="stylesheet" href="styles/footer.css">

</head>
<body>
    <?php
    include_once "includes/header.php"
    ?>
    <main>
        <div id="form">
            <h1>Crear una nueva cuenta</h1>
            <hr>
            <br>
            <form method="post">
                
                <input type="email" required placeholder="Correo electronico">
                <br>
                <input type="text" maxlength="20" required placeholder="Nombre">
                <br>
                <input type="text" maxlength="20" required placeholder="Apellido"> <br>
                <input type="text" maxlength="20" required placeholder="Nombre Usuario">
                <br>
                <input type="password" required placeholder="Contrraseña">
                <br>
                <input type="password" required placeholder="Confirmar contraseña">
                <br>
                <input type="number" placeholder="Numero de telefono">
                <br><br>
                <button>Registrate</button>
            </form>
        </div>
        <div id="iniciar">
            <label for="iniciar">YA ESTÁS REGISTRADO?</label><button>Iniciar Sesion</button>
        </div>
    </main>
    <?php
    include_once "includes/footer.php"
    ?>    
</body>

