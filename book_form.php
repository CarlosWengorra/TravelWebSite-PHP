<?php
// Establecer conexión a la base de datos
$connection = mysqli_connect('localhost', 'nombre_usuario', 'contraseña', 'book_db');

// Verificar la conexión
if (!$connection) {
    die("Error de conexión: " . mysqli_connect_error());
}

if(isset($_POST['send'])){
    // Recibir y sanitizar los datos del formulario
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);
    $guests = mysqli_real_escape_string($connection, $_POST['guests']);
    $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
    $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

    // Preparar la consulta SQL utilizando una consulta preparada
    $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Inicializar la sentencia preparada
    $stmt = mysqli_prepare($connection, $request);

    // Vincular los parámetros con la sentencia preparada
    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

    // Ejecutar la sentencia preparada
    $success = mysqli_stmt_execute($stmt);

    // Verificar si la consulta se ejecutó con éxito
    if ($success) {
        // Redirigir al usuario a la página de confirmación
        header('Location: book.php');
        exit;
    } else {
        // Manejar errores de ejecución de consulta
        echo 'Algo salió mal. Por favor, inténtelo de nuevo.';
    }

    // Cerrar la sentencia preparada
    mysqli_stmt_close($stmt);
} else {
    // Si el formulario no se ha enviado, mostrar un mensaje de error
    echo 'El formulario no ha sido enviado. Por favor, inténtelo de nuevo.';
}

// Cerrar la conexión a la base de datos
mysqli_close($connection);
?>
