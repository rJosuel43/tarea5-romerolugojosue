<?php
// Obtener la variable de entorno
$mensaje = getenv('MENSAJE_APP');

// Si no existe, usar mensaje por defecto
if (!$mensaje) {
    $mensaje = "Hola, me llamo Josue y este es un mensaje personalizado.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tarea 5 - Despliegue SaaS</title>
</head>
<body>
    <h1>Aplicación SaaS en PHP</h1>
    <p><?php echo $mensaje; ?></p>
</body>
</html>