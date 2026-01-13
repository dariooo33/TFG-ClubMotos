<<<<<<< HEAD
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
</body>
=======
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

</head>
<body>
    <?php
    include_once "resources/header.php"
    ?>
    <main>
        <div id="form">
            <h1>Registrate:</h1>
            <form method="post">
                <label for="email">Correo Electronico: </label><input type="email" required>
                <br>
                <label for="nombre">Nombre: </label><input type="text" maxlength="20" required>
                <br>
                <label for="apellido">Apellido: </label><input type="text" maxlength="20" required><br>
                <label for="nombre">Nombre de usuario</label><input type="text" maxlength="20" required>
                <br>
                <label for="contraseña">Contraseña:</label><input type="password" required>
                <br>
                <label for="confirmerContraseña">Confirmar contraseña:</label><input type="password" required>
                <br>
                <label for="tlf">Numero Telefonico (opcional):</label><input type="number">
                <br><br>
                <button>Registrate</button>
            </form>
        </div>
        <div id="iniciar">
            <label for="iniciar">YA ESTÁS REGISTRADO?</label><button>Iniciar Sesion</button>
        </div>
    </main>
</body>
>>>>>>> 005f885aa7fc01984171844876d9af12515c318f
</html>