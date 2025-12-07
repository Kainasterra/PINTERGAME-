<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    echo "
        <body style='font-family: Arial; padding: 20px; background: #eef2f3;'>
            <h2 style='color: green;'>¡Mensaje enviado correctamente!</h2>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Correo:</strong> $correo</p>
            <p><strong>Mensaje:</strong></p>
            <p style='padding: 10px; background: white; border-radius: 5px;'>$mensaje</p>

            <a href='contactos.html' 
               style='display: inline-block; margin-top: 20px; padding: 10px 20px; 
                      background: #007bff; color: #fff; text-decoration: none; border-radius: 5px;'>
               Volver al formulario
            </a>
        </body>
    ";

} else {
    echo "Método no permitido.";
}
?>