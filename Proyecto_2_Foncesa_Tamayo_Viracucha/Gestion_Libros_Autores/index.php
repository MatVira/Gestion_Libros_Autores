<?php
session_start(); // Inicio de sesión para la gestión de datos
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Biblioteca</title>

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

    <div class="container text-center my-5">
        <h1>Sistema web de gestión de libros y autores</h1>
        <p>Por favor utiliza el menú para gestionar los libros.</p>
    </div>

    <div class="container text-center my-5">
        <img src="https://www.espe.edu.ec/wp-content/uploads/2018/11/espe.png" alt="Logo ESPE" class="logo">
        <h2 class="fw-bold">Universidad de las Fuerzas Armadas ESPE</h2>
        <hr class="divider">
        <h5><strong>Ingeniería en tecnologías de la información y comunicación</strong></h5>

        <p><strong>Asignatura:</strong> Aplicación de tecnologías WEB</p>
        <p><strong>Actividad:</strong> Laboratorio N. 2</p>
        <p><strong>Nombres y apellidos: <br></strong>
            Fonseca Escobar Harvey Joel <br>
            Tamayo Ñaupa César Augusto <br>
            Viracucha Armijos Mateo David
        </p>

        <p><strong>Docente:</strong> Ing. Cudco Pomagualli Angel Geovanny</p>
        <p><strong>NRC:</strong> 1382</p>
    </div>

</body>

</html>