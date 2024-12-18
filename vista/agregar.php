<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6">Agregar Producto</h2>
        <form method="post" action="index.php?accion=guardar">
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">Nombre:</label>
                <input type="text" autocomplete="off" id="nombre" name="nombre" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-6">
                <label for="precio" class="block text-gray-700">Precio:</label>
                <input type="number" autocomplete="off" id="precio" name="precio" required step="0.01"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="flex justify-between items-center">
                <input type="submit" value="Guardar"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
    </div>

    <footer class="absolute bottom-0 w-full text-center py-4 bg-gray-800 text-white">
        <p>Carlos Gahel Pulido Cervantes | No. Control: 22170006 | Materia: Programación Web</p>
    </footer>
</body>

</html>