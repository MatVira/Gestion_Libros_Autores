<?php
session_start();
require 'functions.php'; // Importa la funcion auxiliar del archivo functions.php

$alerta = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Si se envía el formulario, intenta registrar el libro
    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $precio = $_POST['precio'] ?? 0;
    $cantidad = $_POST['cantidad'] ?? 0;

    if (agregarLibro($titulo, $autor, $precio, $cantidad)) {
        $alerta = "Libro registrado exitosamente.";
    } else {
        $alerta = "Error al registrar el libro. Verifica los campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Libro</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="register.php">Registrar Libro</a>
        <a href="list.php">Listado de Libros</a>
        <a href="contact.php">Contacto</a>
    </nav>
    <div class="container">
        <h1>Registro de Libros</h1>
        <?php if ($alerta): ?>
            <p><?= $alerta; ?></p>
        <?php endif; ?>
        <form method="POST" class="form">
            <label>Título:</label>
            <input type="text" name="titulo" required>
            <label>Autor:</label>
            <input type="text" name="autor" required>
            <label>Precio:</label>
            <input type="number" name="precio" step="0.01" required>
            <label>Cantidad:</label>
            <input type="number" name="cantidad" required>
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>

</html>