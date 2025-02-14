<?php
session_start();
require 'functions.php'; // Importa la funcion auxiliar del archivo functions.php

$alerta = '';
$index = $_GET['index'] ?? null;
$libro = $_SESSION['libros'][$index] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Si el formulario es enviado, actualiza los datos del libro
    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $precio = $_POST['precio'] ?? 0;
    $cantidad = $_POST['cantidad'] ?? 0;

    if (actualizarLibro((int) $index, $titulo, $autor, $precio, $cantidad)) {
        echo "Libro actualizado exitosamente."; // Redirige tras la actualización
        header(`Location: list.php`);
    } else {
        $alerta = "Error al actualizar el libro.";
    }
} else {
    if ($libro) {
        $titulo = $libro['titulo'];
        $autor = $libro['autor'];
        $precio = $libro['precio'];
        $cantidad = $libro['cantidad'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
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
        <h1>Editar Libro</h1>
        <?php if ($alerta): ?>
            <p><?= $alerta; ?></p>
        <?php endif; ?>
        <form method="POST" class="form">
            <input type="hidden" name="index" value="<?= $index; ?>">
            <label>Título:</label>
            <input type="text" name="titulo" value="<?= $titulo; ?>" required>
            <label>Autor:</label>
            <input type="text" name="autor" value="<?= $autor; ?>" required>
            <label>Precio:</label>
            <input type="number" name="precio" value="<?= $precio; ?>" step="0.01" required>
            <label>Cantidad:</label>
            <input type="number" name="cantidad" value="<?= $cantidad; ?>" required>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>

</html>