<?php
class UsuarioModelo {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USUARIO, DB_CLAVE, DB_NOMBRE);

        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    public function autenticar($usuario, $clave) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND clave = ?");
        $stmt->bind_param("ss", $usuario, $clave);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>