
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/index.css">

</head>
<body>
    <?php
    include_once "includes/header.php"
    ?>
    <video autoplay muted loop playsinline id="bg-video">
        <source src="assets/videos/fondo.mp4" type="video/mp4">
    </video>
    <main>
        <h2>RIDE ANYWHERE, <br>
            ANYTIME
        </h2>
        <br>
        <button type="button"><a href="">Supermotard</a></button>
        <button type="button"><a href="">Motrocross</a></button>
        <button type="button"><a href="">Enduro</a></button>
    </main>
    <?php
        include_once "includes/footer.php"
    ?>
</body>
</html>

