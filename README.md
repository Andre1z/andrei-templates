Andrei | Templating
==============================================================================================

Resumen:
---------
Este proyecto es un sistema básico de gestión de un blog desarrollado en PHP. Se utiliza una base de datos SQLite (.db) para almacenar las entradas y un motor de plantillas personalizado para separar la lógica del negocio de la presentación visual. La arquitectura está pensada para ser simple y modular, facilitando futuras extensiones y mejoras.

Estructura del Proyecto:
-------------------------
```
andrei-templates/
├── index.php                 # Punto de entrada de la aplicación
├── db/
│   └── blog.db               # Base de datos SQLite
├── src/
│   ├── DB.php                # Clase para la conexión a la base de datos (PDO con SQLite)
│   └── Blog.php              # Lógica para operaciones CRUD con las entradas del blog
├── templates/
│   ├── header.php            # Cabecera común (incluye <head> y apertura de <body>)
│   ├── footer.php            # Pie de página común (cierre de <body> y <html>)
│   └── blog-list.php         # Vista principal para la lista de entradas del blog
├── motorplantillas.php       # Motor de plantillas personalizado para renderizar vistas
├── assets/
│   └── css/
│       └── styles.css        # Archivo CSS con estilos para un diseño moderno y limpio
└── readme.txt                # Este archivo de documentación
```
Requisitos:
-----------
- PHP 7.x o superior.
- Extensión PDO y SQLite habilitadas.
- Servidor web (Apache o similar); para desarrollo local se puede usar XAMPP, WAMP, etc.

Instalación:
------------
1. Clona o descarga el proyecto en tu entorno de trabajo.
2. Configura el servidor web para que apunte al directorio del proyecto (por ejemplo, http://localhost/andrei-templates).
3. Asegúrate de que PHP esté correctamente instalado y que las extensiones PDO y SQLite estén habilitadas.
4. Crea la base de datos ejecutando el siguiente comando en la terminal:
   
   sqlite3 db/blog.db "CREATE TABLE IF NOT EXISTS posts (
       id INTEGER PRIMARY KEY AUTOINCREMENT,
       title TEXT NOT NULL,
       content TEXT NOT NULL,
       created_at DATETIME DEFAULT CURRENT_TIMESTAMP
   );"

5. (Opcional) Inserta datos de ejemplo en la tabla `posts` para probar la aplicación:

   INSERT INTO posts (title, content) VALUES 
   ('Bienvenido a Mi Blog', 'Este es el primer post de nuestro blog. ¡Nos alegra tenerte por aquí!');
   
   INSERT INTO posts (title, content) VALUES 
   ('Actualización de Proyecto', 'Hoy se han implementado mejoras importantes. ¡Sigue leyendo para conocer los detalles!');
   
   INSERT INTO posts (title, content) VALUES 
   ('Consejos de Desarrollo', 'Compartimos algunos consejos y buenas prácticas para desarrolladores.');

Uso:
----
- El archivo `index.php` es el punto de entrada. Desde ese archivo se separa la lógica del negocio (en `src/Blog.php`) y se renderizan las vistas mediante el motor de plantillas (`motorplantillas.php`).
- Las plantillas se encuentran en la carpeta `templates/`, donde se pueden personalizar los elementos visuales (e.g., `<title>`, `<h1>`, `<h2>`, etc.) utilizando variables dinámicas.
- Los estilos se definen en `assets/css/styles.css`, que puedes modificar para cambiar la apariencia del blog.

Extensiones y Mejoras Futuras:
-------------------------------
- Implementar un panel de administración para agregar, editar y eliminar entradas.
- Ampliar el motor de plantillas para manejar layouts y secciones dinámicas.
- Incorporar validación de formularios y sanitización de datos.
- Añadir un sistema de rutas que permita manejar diferentes vistas (por ejemplo, página de detalles, contacto, etc.).

Créditos y Licencia:
--------------------
Este proyecto se ha desarrollado como ejemplo educativo para ilustrar la separación entre la lógica de negocio y la presentación en aplicaciones PHP. Se permite su uso libre para fines personales y educativos.

¡Disfruta desarrollando y mejorando tu blog!
