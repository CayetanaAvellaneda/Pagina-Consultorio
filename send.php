<?php
include("conexion.php");

if (isset($_POST['send'])) {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $Mensaje = trim($_POST['Mensaje']);

    if (!empty($name) && !empty($phone) && !empty($email) && !empty($Mensaje)) {
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje) VALUES ('$name', '$phone', '$email', '$Mensaje')";

        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            header("Location: index.php?confirmacion=true");
            exit();
        } else {
            echo "Error al insertar los datos: " . mysqli_error($conex);
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>
