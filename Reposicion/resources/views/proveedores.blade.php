<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
</head>
<body>
    <h1>Lista de proveedores</h1>


    <div>
        <a class="btn btn-primary" href="{{ route('proveedores.crear') }}">Crear Nuevo Proveedor</a>
    </div>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">FechaRegistro</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $item)
            <tr>
                <th scope="row">{{$item->nombre}}</th>
                <td>{{$item->fechaIngreso}}</td>
                <td>{{$item->telefono}}</td>
                <td>{{$item->correo}}</td>
            </tr>
            @endforeach
        
        </tbody>
    </table>    
</body>
</html>