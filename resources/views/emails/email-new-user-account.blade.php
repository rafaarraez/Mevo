<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hola {{$data['name']}}</h2>
    <p>Te hemos creado un usuario para que te unas nuestra gran familia</p>
    <p>Con el podras conseguir tus productos al mejor precio del mercado</p>
    <p><strong>Usuario:</strong> {{$data['email']}}</p>
    <p><strong>Contraseñá temporal:</strong> {{$data['password']}}</p>
    <br/>
    <p>Inicia a <a href="conmevo.com">conmevo.com</a> inicia sesion, rellena el formulario, actualiza tu clave personal y disfrua de nuestro maravilloso servicio</p>
</body>
</html>