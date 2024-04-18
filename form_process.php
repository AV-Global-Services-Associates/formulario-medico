<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $clinic_name = $_POST['clinic_name'];
    $contact_name = $_POST['contact_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $info_requested = implode(", ", $_POST['info_requested']);
    $other_info = $_POST['other_info'];
    $comments = $_POST['comments'];

    $to = "admin@avglobalpr.com";
    $subject = "Nuevo formulario de contacto de proveedor médico";
    $message = "Nombre de la Clínica: $clinic_name\n" .
               "Nombre del Contacto: $contact_name\n" .
               "Número Telefónico: $phone_number\n" .
               "Correo Electrónico: $email\n" .
               "Información Solicitada: $info_requested\n" .
               "Otro: $other_info\n" .
               "Comentarios: $comments";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "¡El formulario se envió correctamente!";
    } else {
        echo "¡Error al enviar el formulario!";
    }
}

?>
