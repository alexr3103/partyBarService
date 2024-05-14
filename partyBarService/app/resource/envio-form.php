<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $consulta = $_POST['consulta'];
    $nameUser = $_POST['nameUser'];
    $lastName = $_POST['last_name'];
    $email = $_POST['mail'];
    $dni = $_POST['dni'];
    $street = $_POST['street'];
    $streetNumber = $_POST['street_number'];
    $postalCode = $_POST['postal_code'];
    $birthDate = $_POST['birth_date'];
    $messageContent = $_POST['messageContent'];

    // Formatea el mensaje a enviar por correo electrónico
    $mensaje = "Motivo de consulta: $consulta\n";
    $mensaje .= "Nombre: $nameUser\n";
    $mensaje .= "Apellido: $lastName\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "DNI: $dni\n";
    $mensaje .= "Calle: $street\n";
    $mensaje .= "Altura: $streetNumber\n";
    $mensaje .= "Código Postal: $postalCode\n";
    $mensaje .= "Fecha de Nacimiento: $birthDate\n";
    $mensaje .= "Mensaje: $messageContent\n";

    $para = "alexandra.rivero@davinci.edu.ar"; 
    $asunto = "Nuevo mensaje de formulario";

    // Envía el correo electrónico
    if (mail($para, $asunto, $mensaje)) {
        echo "<p>Su mensaje ha sido enviado correctamente.</p>";
    } else {
        echo "<p>Ocurrió un error al enviar el mensaje. Por favor, inténtelo de nuevo más tarde.</p>";
    }
}
?>
