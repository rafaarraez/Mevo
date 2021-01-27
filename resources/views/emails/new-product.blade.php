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
    <p><strong>Nombre:</strong> {{$data['product_name']}}</p>
    <p><strong>En la presentación:</strong> {{$data['presentation']}}</p>
    <p><strong>Cantidad:</strong> {{$data['quantity']}} </p>
    <p><strong>Desde:</strong> {{$data['origin']}}</p>
    <p><strong>Puerto de llegada:</strong> {{$data['arrival_location']}}</p>
    <br/>
    <p>Ingresa a <a href="conmevo.com">conmevo.com</a> para mas información!</p>
</body>
</html>