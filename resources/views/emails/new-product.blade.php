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
    <p>Hemos agregado un nuevo producto</p>
    <p>Nombre: {{$data['product_name']}}</p>
    <p>En la presentación: {{$data['presentation']}}</p>
    <p>Cantidad: {{$data['quantity']}} </p>
    <p>Desde: {{$data['origin']}}</p>
    <p>Puerto de llegada: {{$data['arrival_location']}}</p>
    <br/>
    <p>Ingresa a <a href="conmevo.com">conmevo.com</a> para mas información!</p>
</body>
</html>