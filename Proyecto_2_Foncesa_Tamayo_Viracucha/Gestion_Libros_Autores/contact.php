<?php
session_start(); // Inicio de sesión para la gestión de datos
require 'functions.php'; // Importa la funcion auxiliar del archivo functions.php
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
</body>

<div class="container_c">
    <section class="box">
        <h1><strong>Usuario 1</strong></h1>
        <img src="styles/foto_1.jpg" width="170" alt="" class="box-img">
        <h2>Aplicación web</h2>
        <p>
        <p><strong>Nombre:</strong> Mateo Viracucha</p>
        <p><strong>Correo:</strong> mdviracucha@espe.edu.ec</p>
        <p><strong>N. Celular:</strong> 0982953878</p>
        <p><strong>NRC:</strong> 1382</p>
        <p><strong>C.I:</strong> 1724700610</p>
        </p>
    </section>

    <section class="box">
        <h1><strong>Usuario 2</strong></h1>
        <img src="styles/foro_2.png" width="170" alt="" class="box-img">
        <h2>Desarrollo de sistemas</h2>
        <p>
        <p><strong>Nombre:</strong> Cesar Tamayo</p>
        <p><strong>Correo:</strong> catamayo5@espe.edu.ec</p>
        <p><strong>N. Celular:</strong> 0989064654</p>
        <p><strong>NRC:</strong> 1382</p>
        <p><strong>C.I:</strong> 17153550811</p>
        </p>
    </section>

    <section class="box">
        <h1><strong>Usuario 3</strong></h1>
        <img src="styles/foto_3.jpeg" width="170" alt="" class="box-img">
        <h2>Ingeniería de software</h2>
        <p>
        <p><strong>Nombre:</strong> Harvey Fonseca </p>
        <p><strong>Correo:</strong> @espe.edu.ec</p>
        <p><strong>N. Celular:</strong> 09</p>
        <p><strong>NRC:</strong> 1382</p>
        <p><strong>C.I:</strong> 17</p>
        </p>
    </section>
</div>

</html>