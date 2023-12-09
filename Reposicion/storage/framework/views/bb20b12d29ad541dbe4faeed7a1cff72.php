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
        <a class="btn btn-primary" href="<?php echo e(route('productos.crear')); ?>">Crear Nuevo Producto</a>
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
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($item->descripcion); ?></th>
                <td><?php echo e($item->precio); ?></td>
                <td><?php echo e($item->stock); ?></td>
                <td><?php echo e($item->pagaisv); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </tbody>
    </table>    
</body>
</html><?php /**PATH C:\Users\Roman Durón\Downloads\Lenguajes de Programación\Examen\Reposicion\resources\views/productos.blade.php ENDPATH**/ ?>