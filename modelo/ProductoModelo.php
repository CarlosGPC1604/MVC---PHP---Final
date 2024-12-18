<?php
class ProductoModelo {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USUARIO, DB_CLAVE, DB_NOMBRE);

        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    public function obtenerProductos() {
        $sql = "SELECT * FROM productos";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function agregarProducto($nombre, $precio) {
        $stmt = $this->conn->prepare("INSERT INTO productos (nombre, precio) VALUES (?, ?)");
        $stmt->bind_param("sd", $nombre, $precio);
        $stmt->execute();
    }

    public function obtenerProducto($id) {
        $stmt = $this->conn->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function actualizarProducto($id, $nombre, $precio) {
        $stmt = $this->conn->prepare("UPDATE productos SET nombre = ?, precio = ? WHERE id = ?");
        $stmt->bind_param("sdi", $nombre, $precio, $id);
        $stmt->execute();
    }

    public function eliminarProducto($id) {
        $stmt = $this->conn->prepare("DELETE FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>