<?php
class UsuarioControlador {
    private $usuarioModelo;

    public function __construct($usuarioModelo) {
        $this->usuarioModelo = $usuarioModelo;
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];

            if ($this->usuarioModelo->autenticar($usuario, $clave)) {
                // Redirigir a la página de productos
                header("Location: index.php?accion=productos");
                exit();
            } else {
                $error = "Usuario o clave inválidos.";
                require 'vista/login.php';
            }
        } else {
            require 'vista/login.php';
        }
    }
}
?>