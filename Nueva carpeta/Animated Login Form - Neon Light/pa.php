<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripción del juego</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="descripcion">
    <img src="img/<?php echo $_SESSION['imagen']; ?>.webp" alt="Imagen del juego">
    <p><?php echo $_SESSION['descripcion']; ?></p>
    <button onclick="volver()">Volver</button>
</div>

<script src="script.js"></script>
</body>
</html>
