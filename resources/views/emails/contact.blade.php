<!DOCTYPE html>
<html>
<head>
    <title>Mensaje de Contacto</title>
</head>
<body>
    <h2>Mensaje de Contacto</h2>

    <p>Nombre: {{ $data['name'] }}</p>
    <p>Correo Electrónico: {{ $data['email'] }}</p>
    <p>Mensaje:</p>
    <p>{{ $data['message'] }}</p>
</body>
</html>