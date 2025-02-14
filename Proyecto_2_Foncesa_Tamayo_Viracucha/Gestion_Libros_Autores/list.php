<?php
session_start();
require 'functions.php'; // Importa la funcion auxiliar del archivo functions.php

$libros = obtenerLibros(); // Obtiene la lista de libros desde la sesión
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
        <h3 class="mt-4">Lista de Libros</h3>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $index => $libro): ?>
                    <tr>
                        <td><?= $index + 1; ?></td>
                        <td><?= $libro['titulo']; ?></td>
                        <td><?= $libro['autor']; ?></td>
                        <td><?= $libro['precio']; ?></td>
                        <td><?= $libro['cantidad']; ?></td>
                        <td>

                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-warning"
                                    onclick="window.location.href='edit.php?index=<?= $index; ?>'">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger"
                                    onclick="if(confirm('¿Eliminar libro?')) window.location.href='delete.php?index=<?= $index; ?>'">
                                    Eliminar
                                </button>
                            </div>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>