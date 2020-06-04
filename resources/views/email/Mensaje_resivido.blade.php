<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje recibido</title>
</head>
<body>
    <p>Resiviste un mensaje de: {{ $msj['name']}} - {{$msj['email']}} </p>
    <p><strong>Asunto</strong> {{$msj['subject']}}</p>
    <p><strong>Contenido</strong> {{$msj['content']}}</p>
</body>
</html>