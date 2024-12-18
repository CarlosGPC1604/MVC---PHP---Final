<?php
session_start();

require 'config.php';
require 'modelo/UsuarioModelo.php';
require 'modelo/ProductoModelo.php';
require 'controlador/UsuarioControlador.php';
require 'controlador/ProductoControlador.php';

$usuarioModelo = new UsuarioModelo();
$productoModelo = new ProductoModelo();
$usuarioControlador = new UsuarioControlador($usuarioModelo);
$productoControlador = new ProductoControlador($productoModelo);

if (isset($_GET['accion'])) {
    switch ($_GET['accion']) {
        case 'login':
            $usuarioControlador->login();
            break;
        case 'productos':
            $productoControlador->mostrarProductos();
            break;
        case 'agregar':
            $productoControlador->agregarProducto();
            break;
        case 'guardar':
            $productoControlador->guardarProducto();
            break;
        case 'editar':
            $productoControlador->editarProducto();
            break;
        case 'actualizar':
            $productoControlador->actualizarProducto();
            break;
        case 'eliminar':
            $productoControlador->eliminarProducto();
            break;
        default:
            $usuarioControlador->login();
            break;
    }
} else {
    $usuarioControlador->login();
}
?>