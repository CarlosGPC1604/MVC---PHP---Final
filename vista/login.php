<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <div class="mb-6 text-center">
            <img src="/image/univam.webp" alt="Logo Univam" class="mx-auto w-32">
        </div>
        <h2 class="text-2xl font-bold mb-6">Iniciar Sesión</h2>
        <form method="post" action="index.php?accion=login">
            <div class="mb-4">
                <label for="usuario" class="block text-gray-700">Usuario:</label>
                <input type="text" autocomplete="off" id="usuario" name="usuario" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-6">
                <label for="clave" class="block text-gray-700">Clave:</label>
                <input type="password" autocomplete="off" id="clave" name="clave" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="flex justify-between items-center">
                <input type="submit" value="Iniciar Sesión"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
        <?php if (isset($error)) { echo "<p class='text-red-500 mt-4'>$error</p>"; } ?>
    </div>

    <footer class="absolute bottom-0 w-full text-center py-4 bg-gray-800 text-white">
        <p>Carlos Gahel Pulido Cervantes | No. Control: 22170006 | Materia: Programación Web</p>
    </footer>
</body>

</html>