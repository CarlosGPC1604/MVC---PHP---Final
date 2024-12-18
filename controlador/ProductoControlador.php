<?php
class ProductoControlador {
    private $productoModelo;

    public function __construct($productoModelo) {
        $this->productoModelo = $productoModelo;
    }

    public function mostrarProductos() {
        $productos = $this->productoModelo->obtenerProductos();
        require 'vista/productos.php';
    }

    public function agregarProducto() {
        require 'vista/agregar.php';
    }

    public function guardarProducto() {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $this->productoModelo->agregarProducto($nombre, $precio);
        header("Location: index.php?accion=productos");
        exit();
    }

    public function editarProducto() {
        $id = $_GET['id'];
        $producto = $this->productoModelo->obtenerProducto($id);
        require 'vista/editar.php';
    }

    public function actualizarProducto() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $this->productoModelo->actualizarProducto($id, $nombre, $precio);
        header("Location: index.php?accion=productos");
        exit();
    }

    public function eliminarProducto() {
        $id = $_GET['id'];
        $this->productoModelo->eliminarProducto($id);
        header("Location: index.php?accion=productos");
        exit();
    }
}
?>