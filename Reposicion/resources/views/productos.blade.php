<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Lista de productos</h1>


    <div>
        <a class="btn btn-primary" href="{{ route('productos.crear') }}">Crear Nuevo Producto</a>
    </div>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">PagaISV</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
            <tr>
                <th scope="row">{{$item->descripcion}}</th>
                <td>{{$item->precio}}</td>
                <td>{{$item->stock}}</td>
                <td>{{$item->pagaisv}}</td>
            </tr>
            @endforeach
        
        </tbody>
    </table>    
</body>
</html>