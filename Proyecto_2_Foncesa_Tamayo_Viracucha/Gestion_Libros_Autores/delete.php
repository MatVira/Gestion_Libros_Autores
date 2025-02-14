<?php
session_start();
require 'functions.php'; // Importa la funcion auxiliar del archivo functions.php

$index = $_GET['index'] ?? null; // Obtiene el índice del libro a eliminar desde la URL

if ($index !== null && is_numeric($index)) {
    eliminarLibro((int) $index); // Llama a la función para eliminar el libro
    header('Location: list.php'); // Redirige a la lista de libros
    exit();
} else { 
    echo "Error: Índice no válido.";
}
?>