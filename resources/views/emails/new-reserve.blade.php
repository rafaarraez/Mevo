<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>¡Hola! Tenemos detalle de un nuevo pedido</h2>
    <p><strong>Nombre:</strong> {{$data['name']}}</p>
    <p><strong>Producto:</strong> {{$data['product_name']}}</p>
    @if($data['is_reserve'] == 0)
        <p><strong>Tipo de pedido:</strong> Compra</p>
    @elseif($data['is_reserve'] == 1)
        <p><strong>Tipo de pedido:</strong> Reserva</p>
    @endif
    <p><strong>Cantidad:</strong> {{$data['quantity']}} </p>
    <br/>
    <p>Ingresa a <a href="conmevo.com">conmevo.com</a> para contactar al cliente lo antes posible</p>
</body>
</html>