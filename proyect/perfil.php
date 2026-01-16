<?php
    include_once "config/dbConect.php"; // Esto conecta y selecciona la base de datos
    include_once "includes/functions.php"; //Añade funciones predefinidas en functions.php
    include_once "includes/authCheck.php";

    if(!$iniciado){
        header('Location: register.php'); // te redirige al register si no hay sesion
        exit;
    }

    $email = $_SESSION['email'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/perfil.css">
    <link rel="stylesheet" href="styles/header.css">
</head>
<body>
    <?php
    include_once "includes/header.php"
    ?>

    <main>
        <div class="recuadro">
            <img src="TFG-ClubMotos/proyect/assets/photo/plato6.png" alt="sadasd">
            <hr>
            <h3>Nombre de usuario</h3>
            <br>
            <?php
            include_once "logout.php"
            ?>

        </div>
    </main>
</body>
</html>