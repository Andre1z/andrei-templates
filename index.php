<?php
require_once 'src/Blog.php';

// Obtener los posts del blog
$blog = new Blog();
$posts = $blog->getPosts();
?>

<?php include 'templates/header.php'; ?>

<main>
    <h1>Bienvenido a Mi Blog</h1>
    <?php if (!empty($posts)) : ?>
        <?php foreach($posts as $post): ?>
            <article>
                <h2><?php echo htmlspecialchars($post['title']); ?></h2>
                <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                <small>Publicado el: <?php echo htmlspecialchars($post['created_at']); ?></small>
            </article>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay entradas disponibles.</p>
    <?php endif; ?>
</main>

<?php include 'templates/footer.php'; ?>