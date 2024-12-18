CREATE DATABASE IF NOT EXISTS ProyectoMVC;
USE ProyectoMVC;

CREATE TABLE `usuarios` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `usuario` VARCHAR(50) NOT NULL,
    `clave` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `productos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(100) NOT NULL,
    `precio` DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES ('admin', 'admin');
INSERT INTO `productos` (`nombre`, `precio`) VALUES 
('Producto 1', 10.00),
('Producto 2', 20.00),
('Producto 3', 30.00),
('Producto 4', 40.00),
('Producto 5', 50.00),
('Producto 6', 60.00),
('Producto 7', 70.00),
('Producto 8', 80.00),
('Producto 9', 90.00),
('Producto 10', 100.00);