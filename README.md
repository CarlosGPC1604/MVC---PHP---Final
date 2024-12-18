![Logo de la Universidad](image/univam.webp)

# Proyecto de Programación Web - CRUD de Productos con Login

## Descripción

Este proyecto es una aplicación web simple desarrollada como parte de la materia de Programación Web. La aplicación implementa un sistema de autenticación de usuarios y un CRUD (Crear, Leer, Actualizar, Eliminar) para la gestión de productos. Utiliza el patrón de diseño MVC (Modelo-Vista-Controlador) y está estilizado con Tailwind CSS.

## Características

- **Login:** Los usuarios pueden iniciar sesión con un nombre de usuario y contraseña.
- **CRUD de Productos:** Los usuarios autenticados pueden ver, agregar, editar y eliminar productos.
- **Estilizado con Tailwind CSS:** Todas las vistas están estilizadas utilizando Tailwind CSS para una apariencia moderna y responsiva.

## Estructura del Proyecto

```markdown
mvc/
├── modelo/
│   ├── UsuarioModelo.php
│   ├── ProductoModelo.php
├── vista/
│   ├── login.php
│   ├── productos.php
│   ├── agregar.php
│   ├── editar.php
├── controlador/
│   ├── UsuarioControlador.php
│   ├── ProductoControlador.php
├── index.php
├── config.php
└── SEED_DB.sql
```  

Este bloque se verá correctamente estructurado cuando lo pegues en un archivo Markdown.

## Requisitos

- **Servidor Web:** Se requiere un servidor web como Apache o el servidor PHP integrado en VS Code.
- **Base de Datos MySQL:** La aplicación utiliza una base de datos MySQL para almacenar usuarios y productos.
- **PHP:** La aplicación está desarrollada en PHP.

## Instrucciones para Inicializar el Proyecto

### 1. Configurar la Base de Datos

1. Cree una base de datos en MySQL para el proyecto.
2. Ejecute el archivo `SEED_DB.sql` para crear las tablas necesarias e insertar datos de ejemplo. Puede hacerlo utilizando una herramienta como phpMyAdmin o la línea de comandos de MySQL.

### 2. Configurar la Aplicación

Asegúrese de que las credenciales de la base de datos en el archivo `config.php` sean correctas:

```php
define('DB_HOST', 'localhost');
define('DB_USUARIO', 'root');
define('DB_CLAVE', '');
define('DB_NOMBRE', 'ProyectoMVC');
```

### 3. Ejecutar la Aplicación

1. Utilice la extensión PHP Server de VS Code para ejecutar el archivo `index.php`:
   - Abra el archivo `index.php` en VS Code.
   - Haga clic derecho en el archivo y seleccione **PHP Server: Serve Project**.
2. Alternativamente, puede ejecutar la aplicación en cualquier servidor web compatible con PHP.

### 4. Acceder a la Aplicación

1. Abra su navegador web y acceda a `http://localhost:3000` (o el puerto que esté utilizando su servidor PHP).
2. Inicie sesión con las credenciales de ejemplo:

   - **Usuario:** admin  
   - **Clave:** admin  

3. Una vez autenticado, podrá ver y gestionar los productos.


## Información Adicional

- **Nombre:** Carlos Gahel Pulido Cervantes  
- **Número de Control:** 22170006  
- **Materia:** Programación Web
