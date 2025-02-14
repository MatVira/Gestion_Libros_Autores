<?php //Contiene las funciones auxiliares para la gestión de los libros
if (!isset($_SESSION['libros'])) {  // Si la variable de sesión 'libros' no está inicializada, se crea como un array vacío
    $_SESSION['libros'] = [];
}

function obtenerLibros() // Función para obtener la lista de libros almacenados en sesión
{
    return $_SESSION['libros'];
}

function agregarLibro($titulo, $autor, $precio, $cantidad) // Función para que se pueda agregar un nuevo libro a la lista
{
    if (validarCampos($titulo, $autor, $precio, $cantidad)) {
        $_SESSION['libros'][] = [
            'titulo' => htmlspecialchars($titulo),
            'autor' => htmlspecialchars($autor),
            'precio' => (float) $precio,
            'cantidad' => (int) $cantidad,
        ];
        return true;
    }
    return false;
}

function actualizarLibro($index, $titulo, $autor, $precio, $cantidad) // Función para actualizar los datos de un libro en base a su índice en el array
{
    if (isset($_SESSION['libros'][$index]) && validarCampos($titulo, $autor, $precio, $cantidad)) {
        $_SESSION['libros'][$index] = [
            'titulo' => htmlspecialchars($titulo),
            'autor' => htmlspecialchars($autor),
            'precio' => (float) $precio,
            'cantidad' => (int) $cantidad,
        ];
        echo "<script>alert('Libro actualizado exitosamente'); window.location.href = 'list.php';</script>";
        return true;
    }
    return false;
}

function eliminarLibro($index)  // Función para eliminar un libro dado su índice
{
    if (isset($_SESSION['libros'][$index])) {
        array_splice($_SESSION['libros'], $index, 1);
        return true;
    }
    return false;
}

function validarCampos($titulo, $autor, $precio, $cantidad) // Función para validar los datos ingresados del libro
{
    return !empty($titulo) && !empty($autor) && $precio > 0 && $cantidad > 0;
}
?>