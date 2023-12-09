<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <h1>Lista de empleados</h1>


    <div>
        <a class="btn btn-primary" href="{{ route('empleados.crear') }}">Crear Nuevo Empleado</a>
    </div>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">FechaIngreso</th>
            <th scope="col">Salario</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $item)
            <tr>
                <th scope="row">{{$item->nombre}}</th>
                <td>{{$item->apellido}}</td>
                <td>{{$item->fechaIngreso}}</td>
                <td>{{$item->salario}}</td>
            </tr>
            @endforeach
        
        </tbody>
    </table>    
</body>
</html>