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
    <p>Nombre: {{$data['name']}}</p>
    <p>Producto: {{$data['product_name']}}</p>
    @if($data['is_reserve'] == 0)
        <p>Tipo de pedido: Compra</p>
    @elseif($data['is_reserve'] == 1)
        <p>Tipo de pedido: Reserva</p>
    @endif
    <p>Cantidad: {{$data['quantity']}} </p>
    <br/>
    <p>Ingresa a <a href="conmevo.com">conmevo.com</a> para contactar al cliente lo antes posible</p>
</body>
</html>