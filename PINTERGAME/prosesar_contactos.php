<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes guardar los datos en la base de datos o enviarlos por correo electrónico
    echo "Gracias, $nombre. Hemos recibido tu mensaje: \"$mensaje\". Te responderemos pronto al correo $email.";
}
?>
