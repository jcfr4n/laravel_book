<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Titulo del mensaje</h3>
    <p>Mensaje de prueba para el email del contacto</p>
    <p>Nombre: {{ $contacto['nombre'] }}</p>
    <p>Correo: {{ $contacto['correo'] }}</p>
    <p>Mensaje: {{ $contacto['mensaje'] }}</p>

</body>
</html>
