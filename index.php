<?php
require_once __DIR__ . '/src/motorplantillas.php';
require_once 'src/Blog.php';

$blog = new Blog();
$posts = $blog->getPosts();

// Creamos el motor de plantillas
$plantilla = new MotorPlantillas();

// Asignamos las variables que reemplazarán los contenidos en la plantilla
$plantilla->asignar('pageTitle', 'Mi Blog Dinámico');     // Reemplaza el contenido del <title>
$plantilla->asignar('pageHeader', 'Bienvenido a Mi Blog');  // Reemplaza el contenido del <h1>

// Puedes incluso asignar un subtítulo o título de sección
$plantilla->asignar('sectionTitle', 'Últimas Entradas');

// También pasamos los posts, si la plantilla los necesita
$plantilla->asignar('posts', $posts);

// Renderizamos la plantilla, por ejemplo, la de lista de posts
$plantilla->renderizar('blog-list.php');
?>