<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-6">Lista de Productos</h2>
        <a href="index.php?accion=agregar"
            class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 mb-4 inline-block">Agregar Producto</a>
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Precio</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td class="py-2 px-4 border-b"><?php echo $producto['id']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $producto['nombre']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $producto['precio']; ?></td>
                    <td class="py-2 px-4 border-b">
                        <a href="index.php?accion=editar&id=<?php echo $producto['id']; ?>"
                            class="text-blue-500 hover:underline">Editar</a>
                        <a href="index.php?accion=eliminar&id=<?php echo $producto['id']; ?>"
                            class="text-red-500 hover:underline ml-2">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <footer class="w-full text-center py-4 bg-gray-800 text-white fixed bottom-0 left-0">
        <p>Carlos Gahel Pulido Cervantes | No. Control: 22170006 | Materia: Programación Web</p>
    </footer>
</body>

</html>