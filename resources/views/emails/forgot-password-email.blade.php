<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hola, {{$data['name']}}</h2>
    <h4 class="text-primary text-heading" style="margin: 0 0 1rem 0;color: #303392;font-weight: 400;font-size: 1.5rem;">Recuperar contraseña</h4>

    <p><strong>Haz click en el boton de abajo</strong> para recuperar tu contraseña.</p>

    <a href="{{$data['url']}}" target="_blank" class="btn-primary" style="text-decoration: none;color: white;display: inline-block;padding: 0.75rem 1rem;background-color: #2b8dc3;font-weight: 500;">Recuperar Contraseña</a>
    <p>O copia y pega el siguiente link en el navegador:<br><a href="{{$data['url']}}" style="text-decoration: none;color: #346bff;">{{$data['url']}}</a></p>
    <br/>
</body>
</html>