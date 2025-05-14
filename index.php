<?php
require_once 'motorplantillas.php';
require_once 'src/Blog.php';

// Inicializa la lógica del blog y obtiene los posts.
$blog = new Blog();
$posts = $blog->getPosts();

// Crea una instancia del motor de plantillas
$plantilla = new MotorPlantillas();

// Asigna las variables que usará la plantilla.
$plantilla->asignar('titulo', 'Bienvenido a Mi Blog');
$plantilla->asignar('posts', $posts);

// Renderiza la plantilla que muestra la lista de posts.
$plantilla->renderizar('blog-list.php');
?>