<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hola, {{$data['name']}} el estado de tu pedido ha cambiado:</h2>
    <p><strong>Pedido:</strong> {{$data['product_name']}}</p>
    <p><strong>Cantidad:</strong> {{$data['quantity']}}</p>
    @if($data['status'] == 1)
       <p><strong>Estado del pedido:</strong> Esperando Confirmación</p> 
    @elseif($data['status'] == 2)
       <p><strong>Estado del pedido:</strong> Arobado/En Tránsito</p> 
    @elseif($data['status'] == 3)
       <p><strong>Estado del pedido:</strong> Entregado</p> 
    @elseif($data['status'] == 4)
       <p><strong>Estado del pedido:</strong> Cancelado</p> 
    @endif
    <br/>
    <p>Ingresa a <a href="conmevo.com" target="_blank">conmevo.com</a> para obtener mas detales</p>
</body>
</html>