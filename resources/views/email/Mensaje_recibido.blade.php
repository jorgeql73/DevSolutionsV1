<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje recibido</title>
</head>
<body>
   
    <p><strong>Nombre: </strong>{{ $msg['name'] }}</p>
    <p><strong>Correo: </strong>{{ $msg['email'] }}</p>
    <p><strong>Correo: </strong>{{ $msg['subject'] }}</p>
    <p><strong>Mensaje: </strong>{{ $msg['content'] }}</p>
    
</body>
</html>